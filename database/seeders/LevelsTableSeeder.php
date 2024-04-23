<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('levels')->delete();
        
        \DB::table('levels')->insert(array (
            0 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'deleted_at' => NULL,
                'id' => 1,
                'level' => 'administrator',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'deleted_at' => NULL,
                'id' => 2,
                'level' => 'pelanggan',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'deleted_at' => NULL,
                'id' => 3,
                'level' => 'bank',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}