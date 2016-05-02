<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_id = \p4\Category::where('category','=','Encoding')->pluck('id')->first();
        DB::table('questions')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'category_id' => $category_id,
            'question' => 'd2tyajRPSTMyNTJLQWtsajIzNEtKMzVqaw==',
            'flag' => 'wkrj4OI3252KAklj234KJ35jk',
            'difficulty' => '1.00';
            'hint1' => 'It is encoded with Base64',
            'hint2' => 'Try using http:\/\/www.base64decode.org, paste the encoded text into the top portion, and click DECODE'
        ]);
    }
}
