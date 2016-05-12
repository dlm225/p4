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
            'hint2' => 'Try using http:\/\/www.base64decode.org, paste the encoded text into the top portion, and click DECODE',
            'createdby' => '1',
            'approved' => '1',
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
            'hint2' => 'Try using http:\/\/www.base64decode.org, paste the encoded text into the top portion, and click DECODE',
            'createdby' => '1',
            'approved' => '1',
        ]);

        $category_id = \p4\Category::where('category','=','Encryption')->pluck('id')->first();
        DB::table('questions')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'category_id' => $category_id,
            'question' => 'xuXNFnfqs8789nfqsn87e3uwu23xwu',
            'flag' => 'khKASasdf8789asdfa87r3hjh23kjh',
            'difficulty' => '1.00',
            'hint1' => 'Hail Caesar...',
            'hint2' => 'Research Caesar rotation cipher',
            'createdby' => '1',
            'approved' => '1',
        ]);

        $category_id = \p4\Category::where('category','=','File Forensics')->pluck('id')->first();
        DB::table('questions')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'category_id' => $category_id,
            'question' => 'File type: 50 4B 03 04',
            'flag' => 'pdf',
            'difficulty' => '1.00',
            'hint1' => 'File header....',
            'hint2' => 'Research file headers at www.garykessler.net',
            'createdby' => '6',
            'approved' => '1',
        ]);

        $category_id = \p4\Category::where('category','=','File Forensics')->pluck('id')->first();
            DB::table('questions')->insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'category_id' => $category_id,
                'question' => '89 50 4E 47 0D 0A 1A 0A',
                'flag' => 'png',
                'difficulty' => '2.00',
                'hint1' => 'File header....',
                'hint2' => 'Research file headers at www.garykessler.net',
                'createdby' => '2',
                'approved' => '1',
            ]);

        $category_id = \p4\Category::where('category','=','Encoding')->pluck('id')->first();
            DB::table('questions')->insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'category_id' => $category_id,
                'question' => 'MJWGC2DCNRQWQYTMMFUA====',
                'flag' => 'blahblahblah',
                'difficulty' => '2.00',
                'hint1' => 'BaseX encoded?',
                'hint2' => 'Having 4 "=" at the end is significant...',
                'createdby' => '2',
                'approved' => '1',
            ]);
    }
}
