<?php

namespace Database\Seeders;
use App\Models\Level;

class LevelSeeder extends AbstractSeeder
{
    protected $modelClass = Level::class;
    
    protected function data() : array
    {
        return [
            [
                'name' => 'TK',
            ],
            [
                'name' => 'SD',
            ],
            [
                'name' => 'SMP',
            ],
            [
                'name' => 'SMA',
            ],
            [
                'name' => 'Universitas',
            ],
        ];
    }
}
