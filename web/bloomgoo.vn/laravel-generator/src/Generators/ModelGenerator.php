<?php

namespace BloomGoo\Generator\Generators;

use BloomGoo\Generator\Common\CommandData;
use BloomGoo\Generator\Utils\FileUtil;
use BloomGoo\Generator\Utils\TableFieldsGenerator;

class ModelGenerator extends BaseGenerator
{
    /**
     * Fields not included in the generator by default.
     *
     * @var array
     */
    protected $excluded_fields = [
        'created_at',
        'updated_at',
    ];

    /** @var CommandData */
    private $commandData;

    /** @var string */
    private $path;
    private $fileName;
    private $table;

    /**
     * ModelGenerator constructor.
     *
     * @param \BloomGoo\Generator\Common\CommandData $commandData
     */
    public function __construct(CommandData $commandData)
    {
        $this->commandData = $commandData;
        $this->path = $commandData->config->pathModel;
        $this->fileName = $this->commandData->modelName.'.php';
        $this->table = $this->commandData->dynamicVars['$TABLE_NAME$'];
    }

    public function generate()
    {
        // lấy nội dung file model .stub
        $templateData = get_template('model.model', 'laravel-generator');
        // tạo ra nội dung chuẩn dựa trên đầu vào
        $templateData = $this->fillTemplate($templateData);

        FileUtil::createFile($this->path, $this->fileName, $templateData);

        $this->commandData->commandComment("\nModel created: ");
        $this->commandData->commandInfo($this->fileName);
    }

    private function fillTemplate($templateData)
    {
        $templateData = fill_template($this->commandData->dynamicVars, $templateData);

        $templateData = $this->fillSoftDeletes($templateData);

        $fillables = [];
        foreach ($this->commandData->fields as $field) {
            if ($field->isFillable) {
                $fillables[] = "'".$field->name."'";
            }
        }

        $templateData = $this->fillDocs($templateData);

        $templateData = $this->fillTimestamps($templateData);

        if ($this->commandData->getOption('primary')) {
            $primary = infy_tab()."protected \$primaryKey = '".$this->commandData->getOption('primary')."';\n";
        } else {
            $primary = '';
        }

        $templateData = str_replace('$PRIMARY$', $primary, $templateData);

        $templateData = str_replace('$FIELDS$', implode(','.infy_nl_tab(1, 2), $fillables), $templateData);

        $templateData = str_replace('$RULES$', implode(','.infy_nl_tab(1, 2), $this->generateRules()), $templateData);

        $templateData = str_replace('$CAST$', implode(','.infy_nl_tab(1, 2), $this->generateCasts()), $templateData);

        // chứa nội dung hoàn chỉnh của các hàm relations

        //$this->commandData->dynamicVars la mot mang Key value dang:
        /*
         * "$MODEL_NAME_PLURAL$" => "Demos"
          "$MODEL_NAME_PLURAL_CAMEL$" => "demos"
          "$MODEL_NAME_SNAKE$" => "demo"
          "$MODEL_NAME_PLURAL_SNAKE$" => "demos"
          "$MODEL_NAME_DASHED$" => "demo"
         * */
        $templateData = str_replace(
            '$RELATIONS$',
            fill_template($this->commandData->dynamicVars, implode(PHP_EOL.infy_nl_tab(1, 1), $this->generateRelations())),
            $templateData
        );
        $templateData = str_replace(
            '$CHILDREN$',
            fill_template($this->commandData->dynamicVars, implode(PHP_EOL.infy_nl_tab(1, 1), $this->generateChild('children'))),
            $templateData
        );
        $templateData = str_replace('$CHILDREN$','',$templateData);
        $templateData = str_replace('$GENERATE_DATE$', date('F j, Y, g:i a T'), $templateData);

        // kiểm tra có trường slug không
        foreach ($this->commandData->fields as $field){
            if($field->name==='slug'){
                foreach ($this->commandData->fields as $f){
                    if($f->slug==true){
                        $filedSlug=$f->name;
                    }
                }
                $templateSlug = get_template('slug.slug', 'laravel-generator');
                $templateData = str_replace('$SLUG$',$templateSlug,$templateData);
                $templateData = str_replace('$FIELD_SLUG$',$filedSlug,$templateData);
                $templateData = str_replace('$IMPORT_SLUG$','use Cviebrock\EloquentSluggable\Sluggable;',$templateData);
            }
        }
        // sau cùng chuyển $SLUG$ thành null
        $templateData = str_replace('$SLUG$','',$templateData);
        $templateData = str_replace('$IMPORT_SLUG$','',$templateData);
        return $templateData;
    }

    private function fillSoftDeletes($templateData)
    {
        if (!$this->commandData->getOption('softDelete')) {
            $templateData = str_replace('$SOFT_DELETE_IMPORT$', '', $templateData);
            $templateData = str_replace('$SOFT_DELETE$', '', $templateData);
            $templateData = str_replace('$SOFT_DELETE_DATES$', '', $templateData);
        } else {
            $templateData = str_replace(
                '$SOFT_DELETE_IMPORT$', "use Illuminate\\Database\\Eloquent\\SoftDeletes;\n",
                $templateData
            );
            $templateData = str_replace('$SOFT_DELETE$', infy_tab()."use SoftDeletes;\n", $templateData);
            $deletedAtTimestamp = config('bloomgoo.laravel_generator.timestamps.deleted_at', 'deleted_at');
            $templateData = str_replace(
                '$SOFT_DELETE_DATES$', infy_nl_tab()."protected \$dates = ['".$deletedAtTimestamp."'];\n",
                $templateData
            );
        }

        return $templateData;
    }

    private function fillDocs($templateData)
    {
        if ($this->commandData->getAddOn('swagger')) {
            $templateData = $this->generateSwagger($templateData);
        } else {
            $docsTemplate = get_template('docs.model', 'laravel-generator');
            $docsTemplate = fill_template($this->commandData->dynamicVars, $docsTemplate);
            $docsTemplate = str_replace('$GENERATE_DATE$', date('F j, Y, g:i a T'), $docsTemplate);

            $templateData = str_replace('$DOCS$', $docsTemplate, $templateData);
        }

        return $templateData;
    }

    public function generateSwagger($templateData)
    {
        $fieldTypes = SwaggerGenerator::generateTypes($this->commandData->fields);

        $template = get_template('model.model', 'swagger-generator');

        $template = fill_template($this->commandData->dynamicVars, $template);

        $template = str_replace('$REQUIRED_FIELDS$',
            '"'.implode('"'.', '.'"', $this->generateRequiredFields()).'"', $template);

        $propertyTemplate = get_template('model.property', 'swagger-generator');

        $properties = SwaggerGenerator::preparePropertyFields($propertyTemplate, $fieldTypes);

        $template = str_replace('$PROPERTIES$', implode(",\n", $properties), $template);

        $templateData = str_replace('$DOCS$', $template, $templateData);

        return $templateData;
    }

    private function generateRequiredFields()
    {
        $requiredFields = [];

        foreach ($this->commandData->fields as $field) {
            if (!empty($field->validations)) {
                if (str_contains($field->validations, 'required')) {
                    $requiredFields[] = $field->name;
                }
            }
        }

        return $requiredFields;
    }

    private function fillTimestamps($templateData)
    {
        $timestamps = TableFieldsGenerator::getTimestampFieldNames();

        $replace = '';

        if ($this->commandData->getOption('fromTable')) {
            if (empty($timestamps)) {
                $replace = infy_nl_tab()."public \$timestamps = false;\n";
            } else {
                list($created_at, $updated_at) = collect($timestamps)->map(function ($field) {
                    return !empty($field) ? "'$field'" : 'null';
                });

                $replace .= infy_nl_tab()."const CREATED_AT = $created_at;";
                $replace .= infy_nl_tab()."const UPDATED_AT = $updated_at;\n";
            }
        }

        return str_replace('$TIMESTAMPS$', $replace, $templateData);
    }

    private function generateRules()
    {
        $rules = [];

        foreach ($this->commandData->fields as $field) {
            if (!empty($field->validations)) {
                if($field->name!='slug'){ // khong them slug vào rules
                    $rule = "'".$field->name."' => '".$field->validations;
                    $rule=$rule."'";
                    $rules[] = $rule;
                }
            }
        }

        return $rules;
    }

    public function generateCasts()
    {
        $casts = [];

        $timestamps = TableFieldsGenerator::getTimestampFieldNames();

        foreach ($this->commandData->fields as $field) {
            if (in_array($field->name, $timestamps)) {
                continue;
            }

            $rule = "'".$field->name."' => ";

            switch ($field->fieldType) {
                case 'integer':
                    $rule .= "'integer'";
                    break;
                case 'double':
                    $rule .= "'double'";
                    break;
                case 'float':
                    $rule .= "'float'";
                    break;
                case 'boolean':
                    $rule .= "'boolean'";
                    break;
                case 'dateTime':
                case 'dateTimeTz':
                    $rule .= "'datetime'";
                    break;
                case 'date':
                    $rule .= "'date'";
                    break;
                case 'enum':
                case 'string':
                case 'char':
                case 'text':
                    $rule .= "'string'";
                    break;
                default:
                    $rule = '';
                    break;
            }

            if (!empty($rule)) {
                $casts[] = $rule;
            }
        }

        return $casts;
    }

    private function generateRelations()
    {
        $relations = [];

        foreach ($this->commandData->relations as $relation) {
            $relationText = $relation->getRelationFunctionText(camel_case($this->commandData->modelName));
//            echo('echo'.$relationText);
            if (!empty($relationText)) {
                $relations[] = $relationText;
            }
        }
        return $relations;
    }
    private function generateChild($nameFunction)
    {
        $children = [];
        foreach ($this->commandData->relations as $relation){
            if($relation->inputs[0]===$this->commandData->modelName){
                $relationText = $relation->getRelationFunctionText($nameFunction,$this->commandData->modelName);
                break;
            }
        }

        if (!empty($relationText)) {
            $children[] = $relationText;
        }


        return $children;
    }

    public function rollback()
    {
        if ($this->rollbackFile($this->path, $this->fileName)) {
            $this->commandData->commandComment('Model file deleted: '.$this->fileName);
        }
    }
}
