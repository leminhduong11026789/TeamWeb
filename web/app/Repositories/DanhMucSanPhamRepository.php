<?php

namespace App\Repositories;

use App\Models\DanhMucSanPham;
use BloomGoo\Generator\Common\BaseRepository;

class DanhMucSanPhamRepository extends BaseRepository
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
        return DanhMucSanPham::class;
    }
}
