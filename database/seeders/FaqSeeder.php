<?php

namespace Database\Seeders;
use App\Models\Faq;

class FaqSeeder extends AbstractSeeder
{
    protected $modelClass = Faq::class;
    
    protected function data() : array
    {
        return [
            [
				'user_id' => 1, 
                'question' => 'Apa keuntungan dari penerapan berpikir komputasional (Computational Thinking) bagi kalangan pelajar?',
				'answer' => 'Berpikir komputasi intinya adalah “problem solving”',
            ],
            [
				'user_id' => 2,
                'question' => 'Apakah penting untuk berkuliah di kampus ternama?',
				'answer' => 'Bisa penting, dan mungkin juga tidak penting. Jawaban tidak hitam putih, ya atau tidak',
            ],
            [
				'user_id' => 3,
                'question' => 'Bagaimana cara yang bijak dalam menyikapi kekurangan kita?',
				'answer' => 'Dengan melakukan analisis symptom-nya apa, evaluasi diri, menyadari, mengakui kekurangan tersebut,',
            ],
            [
				'user_id' => 4,
                'question' => 'Bagaimana teknik mengajar terbaik agar murid atau siswa lebih tertarik untuk memperhatikan materi yang diajarkan?',
				'answer' => 'Tugas guru tidak hanya membuat siswa tertarik, tetapi agar siswa belajar (ini penting). Kalau hanya agar siswa tertarik',
            ],
            [
				'user_id' => 5,
                'question' => 'Apa yang harus dilakukan saat kehilangan selera belajar?',
				'answer' => 'Berhenti sejenak, kemudian evaluasi dan refleksi diri kenapa kehilangan selera belajar? Dari hasil evaluasi dan refleksi diri ',
            ],
        ];
    }
}
