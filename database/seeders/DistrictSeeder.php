<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Regency;

class DistrictSeeder extends AbstractSeeder
{
    protected $modelClass = District::class;
    
    protected function data() : array
    {
        return [
            // Aceh Barat
            [
                'regency_id' => 1,
                'name' => 'Johan Pahlawan',
            ],
            [
                'regency_id' => 1,
                'name' => 'Bubon',
            ],

            //Asahan
            [
                'regency_id' => 3,
                'name' => 'Aek Kuasan',
            ],
            [
                'regency_id' => 3,
                'name' => 'Aek Ledong',
            ],

            //Agam
            [
                'regency_id' => 5,
                'name' => 'Baringin',
            ],
            [
                'regency_id' => 5,
                'name' => 'Sipinang',
            ],

            //Banyuasin
            [
                'regency_id' => 7,
                'name' => 'Air Kumbang',
            ],
            [
                'regency_id' => 7,
                'name' => 'Air Salek',
            ],

            // Bengkulu Selatan
            [
                'regency_id' => 9,
                'name' => 'Kedurang',
            ],
            [
                'regency_id' => 9,
                'name' => 'Seginim',
            ],

            //Bengkalis
            [
                'regency_id' => 11,
                'name' => 'Bantan',
            ],
            [
                'regency_id' => 11,
                'name' => 'Mandau',
            ],

            // Bintan
            [
                'regency_id' => 13,
                'name' => 'Mantang',
            ],
            [
                'regency_id' => 13,
                'name' => 'Tambelan',
            ],

            //Batanghari
            [
                'regency_id' => 15,
                'name' => 'Bajubang',
            ],
            [
                'regency_id' => 15,
                'name' => 'Mersam',
            ],

            // Jakarta Barat
            [
                'regency_id' => 17,
                'name' => 'Cengkareng',
            ],
            [
                'regency_id' => 17,
                'name' => 'Kebon Jeruk',
            ],

            // Bandung
            [
                'regency_id' => 19,
                'name' => 'Cileunyi',
            ],
            [
                'regency_id' => 19,
                'name' => 'Margaasih',
            ],
        ];
    }
}
