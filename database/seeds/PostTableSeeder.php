<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = [];
        for($i=0;$i<10;$i++){
            array_push($dataArray,[
                'title' => str_random(20),
                'teaser' => str_random(50),
                'content' =>str_random(50),
                'created' =>date('y-m-d H:i:s')
            ]);
        }

        DB::table('post')->insert($dataArray);
    }
}
