<?php

namespace App\Repositories;

use App\Models\LienHeKhach;
use BloomGoo\Generator\Common\BaseRepository;

class LienHeKhachRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ten_lien_he'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return LienHeKhach::class;
    }
}
