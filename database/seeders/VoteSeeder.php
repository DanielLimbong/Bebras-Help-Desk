<?php

namespace Database\Seeders;
use App\Models\Vote;

class VoteSeeder extends AbstractSeeder
{
    protected $modelClass = Vote::class;
    
    protected function data() : array
    {
        return [
            [
                'user_id' => 1,
                'answer_id' => 1,
                'helpful' => true,
            ],
            [
                'user_id' => 2,
                'answer_id' => 2,
                'helpful' => true,
            ],
            [
                'user_id' => 3,
                'answer_id' => 3,
                'helpful' => false,
            ],
            [
                'user_id' => 4,
                'answer_id' => 4,
                'helpful' => true,
            ],
            [
                'user_id' => 5,
                'answer_id' => 5,
                'helpful' => true,
            ],
        ];
    }
}
