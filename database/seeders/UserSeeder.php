<?php

namespace Database\Seeders;
use App\Models\User;

class UserSeeder extends AbstractSeeder
{
    protected $modelClass = User::class;
    
    protected function data() : array
    {
        return [
            [
                'province_id' => 1,
                'regency_id' => 1,
                'district_id' => 2,
                'level_id' => 3,
                'name' => 'Sevia Rajagukguk',
                'address' => 'Jln. Layung Gunong Meuh,Km.6 Suak Pangkat',
                'school' => 'SMP Negeri 2 Bubon',
                'phone' => '081314151617',
                'email' => 'seviarajagukguk123@gmail.com',
                'password' => bcrypt('12345678')
            ],
            [
                'province_id' => 2,
                'regency_id' => 3,
                'district_id' => 4,
                'level_id' => 4,
                'name' => 'Arni Sitorus',
                'address' => 'Aek Kanopan Tim., Kec. Kualuh Hulu, Kabupaten Labuhanbatu Utara',
                'school' => 'SMP Negeri 1 Aek Ledong',
                'phone' => '081234567891',
                'email' => 'arnisitorus@gmail.com',
                'password' => bcrypt('12345655')
            ],
            [
                'province_id' => 3,
                'regency_id' => 5,
                'district_id' => 6,
                'level_id' => 2,
                'name' => 'Agnes Veronika Sihombing',
                'address' => 'SD Negeri 11 Sipinang',
                'school' => 'Sipinang, Kec. Palembayan, Kabupaten Agam',
                'phone' => '089678543212',
                'email' => 'agnesveronika89@gmail.com',
                'password' => bcrypt('12344678')
            ],
            [
                'province_id' => 5,
                'regency_id' => 9,
                'district_id' => 10,
                'level_id' => 5,
                'name' => 'Gabriella Panjaitan',
                'address' => 'Kota Agung, Kec. Seginim, Kabupaten Bengkulu Selatan',
                'school' => 'SMA Negeri 7 Bengkulu Selatan',
                'phone' => '081345676522',
                'email' => 'gabriellapanjaitan@gmail.com',
                'password' => bcrypt('66345678')
            ],
            [
                'province_id' => 6,
                'regency_id' => 13,
                'district_id' => 14,
                'level_id' => 5,
                'name' => 'Daniel Limbong',
                'address' => 'Komplek PT. Pertamina Hulu Rokan Duri, Talang Mandi, Kec. Mandau, Kabupaten Bengkalis',
                'school' => 'SMA Negeri 1 Mandau',
                'phone' => '082345671235',
                'email' => 'daniellimbong@gmail.com',
                'password' => bcrypt('12095678')
            ],
        ];
    }
}
