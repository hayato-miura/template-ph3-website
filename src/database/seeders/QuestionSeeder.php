<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\OtherQuestion; // 他己紹介クイズ用のモデルをインポート
use App\Models\Quiz;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        // ITクイズのクイズIDを取得
        $itQuiz = Quiz::where('name', 'ITクイズ')->first();
        $otherQuiz = Quiz::where('name', '他己紹介クイズ')->first();

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
        // 追加のITクイズを登録
        Question::create([
            'image' => '/image/sample.jpg',
            'text' => 'プログラミング言語Pythonの創始者は誰でしょう？',
            'quiz_id' => $itQuiz->id,
        ]);



        // 他のクイズを登録
        Question::create([
            'image' => '/image/sample.jpg',
            'text' => '三浦颯人の生まれた場所はどこでしょうか？',
            'quiz_id' => $otherQuiz->id,
        ]);
    }
}
