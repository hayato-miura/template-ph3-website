<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Quiz;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        // ITクイズのクイズIDを取得
        $itQuiz = Quiz::where('name', 'ITクイズ')->first();

        // 設問データを作成し登録
        Question::create([
            'image' => '/image/sample.jpg',
            'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
            'quiz_id' => $itQuiz->id,
        ]);
        Question::create([
            'image' => '/image/sample.jpg',
            'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
            'quiz_id' => $itQuiz->id,
        ]);
        // 他の設問も同様に追加
    }
}
?>