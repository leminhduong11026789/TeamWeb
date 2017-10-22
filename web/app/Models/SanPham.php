<?php

namespace App\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SanPham
 * @package App\Models
 * @version October 21, 2017, 3:25 am UTC
 */
class SanPham extends Model
{
    use SoftDeletes;

    public $table = 'san_phams';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ten',
        'danh_muc_id',
        'url',
        'anh',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ten' => 'string',
        'danh_muc_id' => 'integer',
        'url' => 'string',
        'anh' => 'string',
        'slug' => 'string'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ten' => 'required|max:255'
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function danhMucSanPham()
    {
        return $this->belongsTo(\App\Models\DanhMucSanPham::class, 'danh_muc_id', 'id');
    }



    use Sluggable;

    /**
    * Return the sluggable configuration array for this model.
    *
    * @return array
    */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'ten'
            ]
        ];
    }
}
