<?php

namespace Database\Seeders;
use App\Models\FaqVote;

class FaqVoteSeeder extends AbstractSeeder
{
    protected $modelClass = FaqVote::class;
    
    protected function data() : array
    {
        return [
            [
				'user_id' => 1, 
				'faq_id' => 1,
				'helpful' => true,
            ],
            [
				'user_id' => 2, 
				'faq_id' => 2,
				'helpful' => true,
            ],
            [
				'user_id' => 3, 
				'faq_id' => 3,
				'helpful' => false,
            ],
            [
				'user_id' => 4, 
				'faq_id' => 4,
				'helpful' => true,
            ],
            [
				'user_id' => 5, 
				'faq_id' => 5,
				'helpful' => true,
            ],
        ];
    }
}
