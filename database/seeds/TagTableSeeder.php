<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
   
class TagTableSeeder extends Seeder {
    
    public function run() {
        
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        
        DB::table('tags')->delete();
        
        DB::table('tags')->insert(
            [
                [
                    'name'   => 'écrivain',
                ],
                [
                    'name'   => 'poète',
                ],
                [
                    'name'   => 'sciences',
                ],
                [
                    'name'   => 'musique',
                ],
                [
                    'name'   => 'humour',
                ],
                [
                    'name'   => 'amour',
                ]
            ]
        );
    }
}