<?php

namespace Database\Seeders;
use App\Models\Question;

class QuestionSeeder extends AbstractSeeder
{
    protected $modelClass = Question::class;
    
    protected function data() : array
    {
        return [
            [
                'user_id' => 1,
				'title' => 'Bagaimana Anda menjelaskan konsep berpikir komputasional?',
				'text' => 'Bagaimana Anda menjelaskan konsep berpikir komputasional?',
            ],
            [
                'user_id' => 2,
				'title' => 'Apa yang dimaksud dengan berpikir komputasional?',
				'text' => 'Apa yang dimaksud dengan berpikir komputasional?',
            ],
            [
                'user_id' => 3,
				'title' => 'Apa keuntungan dari penerapan berpikir komputasional (Computational Thinking) bagi kalangan pelajar?',
				'text' => 'Apa keuntungan dari penerapan berpikir komputasional (Computational Thinking) bagi kalangan pelajar?',
            ],
            [
                'user_id' => 4,
				'title' => 'Bagaimana cara yang efektif untuk belajar cara berpikir komputasional untuk orang dewasa?',
				'text' => 'Bagaimana cara yang efektif untuk belajar cara berpikir komputasional untuk orang dewasa?',
            ],
            [
                'user_id' => 5,
				'title' => 'Adakah tips bagi mahasiswa yang ingin meningkatkan kemampuan berpikir komputasional (computational thinking)?',
				'text' => 'Adakah tips bagi mahasiswa yang ingin meningkatkan kemampuan berpikir komputasional (computational thinking)?',
            ],
        ];
    }
}