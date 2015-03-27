<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
   
class QuestiontagsTableSeeder extends Seeder {
    
    public function run() {
        
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        
        DB::table('question_tags')->delete();
        
        DB::table('question_tags')->insert(
            [
                [
                    'question_id' => '0',
                    'tag_id'      => '2',
                ],
                [
                    'question_id' => '0',
                    'tag_id'      => '3',
                ],
                [
                    'question_id' => '1',
                    'tag_id'      => '4',
                ],
            ]
        );
    }
}