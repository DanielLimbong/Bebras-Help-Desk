<?php

namespace Database\Seeders;
use App\Models\Province;

class ProvinceSeeder extends AbstractSeeder
{
    protected $modelClass = Province::class;
    
    protected function data() : array
    {
        return [
            [
                'name' => 'Nanggroe Aceh Darussalam',
            ],
            [
                'name' => 'Sumatera Utara',
            ],
            [
                'name' => 'Sumatera Barat',
            ],
            [
                'name' => 'Sumatera Selatan',
            ],
            [
                'name' => 'Bengkulu',
            ],
            [
                'name' => 'Riau',
            ],
            [
                'name' => 'Kepulauan Riau'
            ],
            [
                'name' => 'Jambi',
            ],
            [
                'name' => 'Lampung',
            ],
        ];
    }
}
