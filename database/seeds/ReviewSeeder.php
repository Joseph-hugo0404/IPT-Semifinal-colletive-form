<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [    
              'id'=> 1,
              'name'=> 'Joseph Hugo',
              'email'=> 'josephjhugo@gmail.com',
              'message'=> 'You have successfully review',
              'rating'=> 1.4,
  
          ],
          [

            'id'=> 3,
              'name'=> 'Gabriel Flor',
              'email'=> 'Gabriel@gmail.com',
              'message'=> 'You have successfully review',
              'rating'=> 1.6,
   
            ]
        ];
        foreach($data as $rev){
            \App\Review::create($rev);
        }
    }
}
