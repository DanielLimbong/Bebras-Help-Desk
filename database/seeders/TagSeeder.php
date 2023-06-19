<?php

namespace Database\Seeders;
use App\Models\Tag;

class TagSeeder extends AbstractSeeder
{
    protected $modelClass = Tag::class;
    
    protected function data() : array
    {
        return [
            [
                'name' => 'Komputasional',
                'slug' => 'Komputasional',
            ],
            [
                'name' => 'Berpikir',
                'slug' => 'Berpikir',
            ],
            [
                'name' => 'Tantangan',
                'slug' => 'Tantangan',
            ],
            [
                'name' => 'Kreativitas',
                'slug' => 'Kreativitas',
            ],
            [
                'name' => 'Inovasi',
                'slug' => 'Inovasi',
            ],
        ];
    }
}
