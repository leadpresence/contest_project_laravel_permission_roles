<?php

use Illuminate\Database\Seeder;
use App\Model\Contest;

class ContestsSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contest::truncate();

        Contest::create([
'challenge_name'=>'Summer Challenge 2021',
'description'=>'April/June 2021 Innovation Challenge ',
       'batch_name'=>'A' ,
    'year'=>'2021',
  
 
]);

Contest::create([
    'challenge_name'=>'Winter Challenge 2021',
    'description'=>'August/October 2021 Innovation Challenge ',
           'batch_name'=>'B' ,
        'year'=>'2021',
          
    
]);



}
}
