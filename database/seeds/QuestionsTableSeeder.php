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
            'difficulty' => '1.00',
            'hint1' => 'It is encoded with Base64',
            'hint2' => 'Try using http:\/\/www.base64decode.org, paste the encoded text into the top portion, and click DECODE'
        ]);

        $category_id = \p4\Category::where('category','=','Encoding')->pluck('id')->first();
        DB::table('questions')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'category_id' => $category_id,
            'question' => 'VGhlIGZsYWcgaXMgaGVyZTogYXNsZWtyMjM0NUxERkpsa0szMg==',
            'flag' => 'aslekr2345LDFJlkK32',
            'difficulty' => '1.5',
            'hint1' => 'It is encoded with Base64',
            'hint2' => 'Try using http:\/\/www.base64decode.org, paste the encoded text into the top portion, and click DECODE'
        ]);

        $category_id = \p4\Category::where('category','=','Encryption')->pluck('id')->first();
        DB::table('questions')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'category_id' => $category_id,
            'question' => 'xuXNFnfqs8789nfqsn87e3uwu23xwu',
            'flag' => 'khKASasdf8789asdfa87r3hjh23kjh',
            'difficulty' => '1.00',
            'hint1' => 'Caesar you devil...',
            'hint2' => 'Research Caesar rotation cipher'
        ]);
    }
}