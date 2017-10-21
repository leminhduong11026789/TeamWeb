<?php

namespace App\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DanhMucSanPham
 * @package App\Models
 * @version October 15, 2017, 1:13 pm UTC
 */
class DanhMucSanPham extends Model
{
    use SoftDeletes;

    public $table = 'danh_muc_san_phams';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ten',
        'description',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ten' => 'string',
        'description' => 'string',
        'slug' => 'string'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ten' => 'required|max:255',
        'description' => 'max:500'
    ];





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
