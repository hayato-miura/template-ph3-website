<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Choice;
use App\Models\Question;

class ChoiceSeeder extends Seeder
{
    public function run()
    {
        // 設問IDを取得
        $question1 = Question::where('text', '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？')->first();

        // 選択肢データを作成し登録
        Choice::create([
            'text' => '約79万人',
            'is_correct' => true, // 正解
            'question_id' => $question1->id,
        ]);

        Choice::create([
            'text' => '約28万人',
            'is_correct' => false,
            'question_id' => $question1->id,
        ]);

        Choice::create([
            'text' => '約183万人',
            'is_correct' => false,
            'question_id' => $question1->id,
        ]);

        // 他の設問に対する選択肢も同様に追加
        $question2 = Question::where('text', '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？')->first();
        // 選択肢データを作成し登録
        Choice::create([
            'text' => 'lot',
            'is_correct' => true, // 正解
            'question_id' => $question2->id,
        ]);

        Choice::create([
            'text' => 'x-tech',
            'is_correct' => false,
            'question_id' => $question2->id,
        ]);

        Choice::create([
            'text' => 'techness',
            'is_correct' => false,
            'question_id' => $question2->id,
        ]);
        $question3 = Question::where('text', 'プログラミング言語Pythonの創始者は誰でしょう？')->first();
        // 選択肢データを作成し登録
        Choice::create([
            'text' => 'Guido van Rossum',
            'is_correct' => true, // 正解
            'question_id' => $question3->id,
        ]);

        Choice::create([
            'text' => 'John Smith',
            'is_correct' => false,
            'question_id' => $question3->id,
        ]);

        Choice::create([
            'text' => 'Jane Doe',
            'is_correct' => false,
            'question_id' => $question3->id,
        ]);
    }
}
