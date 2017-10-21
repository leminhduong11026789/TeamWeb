<?php

namespace App\Repositories;

use App\Models\MoTaSanPham;
use BloomGoo\Generator\Common\BaseRepository;

class MoTaSanPhamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MoTaSanPham::class;
    }
}
