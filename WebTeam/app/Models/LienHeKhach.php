<?php

namespace App\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LienHeKhach
 * @package App\Models
 * @version October 15, 2017, 1:14 pm UTC
 */
class LienHeKhach extends Model
{
    use SoftDeletes;

    public $table = 'lien_he_khaches';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ten_lien_he',
        'so_dien_thoai',
        'email',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ten_lien_he' => 'string',
        'so_dien_thoai' => 'string',
        'email' => 'string',
        'slug' => 'string'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ten_lien_he' => 'required|max:255'
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
                'source' => 'ten_lien_he'
            ]
        ];
    }
}
