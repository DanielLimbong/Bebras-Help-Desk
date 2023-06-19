<?php

namespace Database\Seeders;
use App\Models\Answer;

class AnswerSeeder extends AbstractSeeder
{
    protected $modelClass = Answer::class;
    
    protected function data() : array
    {
        return [
            [
                'question_id' => 1,
                'user_id' => 1,
                'text' =>   'Dengan sedikit penjelasan, dan banyak contoh-contoh serta disesuaikan dengan kedewasaan berpikir audiens-nya. 
                            Utk anak SD, SMP, SMA dapat didownload.',
            ],
            [
                'question_id' => 2,
                'user_id' => 2,
                'text' =>   'Berpikir komputasional (Computational Thinking) adalah metode menyelesaikan persoalan dengan menerapkan teknik ilmu komputer (informatika). ',
            ],
            [
                'question_id' => 3,
                'user_id' => 3,
                'text' =>   'Berpikir komputasi intinya adalah “problem solving”, penyelesaian persoalan yang solusinya akan dilakukan oleh “information processing agent” 
                            yaitu bisa manusia atau komputer (jika lebih efisien).',
            ],
            [
                'question_id' => 4,
                'user_id' => 4,
                'text' =>   'Dengan banyak latihan problem solving, dan menerapkan dekomposisi, anatraksi, algoritma serta pattern recognition utk diaplikasikan ke problem lain.',
            ],
            [
                'question_id' => 5,
                'user_id' => 5,
                'text' => 'Berlatih, berlatih dan berlatih.
                            Pada dasarnya kemampuan berpikir komputasional itu “hanya” melakukan dekomposisi, abstraksi, algoritma, dan pattern recognition. ',
            ],
        ];
    }
}
