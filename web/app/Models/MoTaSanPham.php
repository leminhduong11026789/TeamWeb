<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class MoTaSanPham
 * @package App\Models
 * @version October 21, 2017, 6:42 pm UTC
 */
class MoTaSanPham extends Model
{

    public $table = 'mo_ta_san_phams';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'san_pham_id',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'san_pham_id' => 'integer',
        'content' => 'string'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'max:500'
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function sanPham()
    {
        return $this->belongsTo(\App\Models\SanPham::class, 'san_pham_id', 'id');
    }




}
