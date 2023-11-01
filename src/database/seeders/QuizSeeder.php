<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run()
    {
        Quiz::create([
            'name' => 'ITクイズ'
        ]);
        // 他の設問も同様に追加
    }
}
?>