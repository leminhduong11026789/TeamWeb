<?php

namespace App\Repositories;

use App\Models\SanPham;
use BloomGoo\Generator\Common\BaseRepository;

class SanPhamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ten'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SanPham::class;
    }
}
