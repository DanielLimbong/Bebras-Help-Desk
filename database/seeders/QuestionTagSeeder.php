<?php

namespace Database\Seeders;
use App\Models\QuestionTag;

class QuestionTagSeeder extends AbstractSeeder
{
    protected $modelClass = QuestionTag::class;
    
    protected function data() : array
    {
        return [
            [
                'question_id' => 1,
                'tags_id' => 1,
            ],
            [
                'question_id' => 2,
				'tags_id' => 2,
            ],
            [
                'question_id' => 3,
				'tags_id' => 3,
            ],
            [
                'question_id' => 4,
				'tags_id' => 4,
            ],
            [
                'question_id' => 5,
				'tags_id' => 5,
            ],
        ];
    }
}