<?php

namespace Database\Seeders;
use App\Models\Comment;

class CommentSeeder extends AbstractSeeder
{
    protected $modelClass = Comment::class;
    
    protected function data() : array
    {
        return [
            [
                'answer_id' => 1,
                'user_id' => 1,
                'text' =>   'Jawaban ini sudah cukup membantu. Terimkasih',
            ],
            [
                'answer_id' => 2,
                'user_id' => 2,
                'text' =>   'Nice answer, thankyouu',
            ],
            [
                'answer_id' => 3,
                'user_id' => 3,
                'text' =>   'Jawaban ini sangat bagus dan sangat membantu',
            ],
            [
                'answer_id' => 4,
                'user_id' => 4,
                'text' =>   'Cukup membantu',
            ],
            [
                'answer_id' => 5,
                'user_id' => 5,
                'text' => 'Terimakasih',
            ],
        ];
    }
}
