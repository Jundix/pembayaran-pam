<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'alamat' => 'tegal',
                'created_at' => '2023-08-14 01:24:10',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2023-08-14 01:24:10',
                'gambar' => NULL,
                'id' => 1,
                'id_level' => 1,
                'nama' => 'admin',
                'no_hp' => '08773771883',
                'password' => '$2y$10$Ns4y/nMlFuChX1kTwKrlLeLmP8yXbE3K8W0eJ9LsowtI5/dp/eEZC',
                'updated_at' => '2023-10-28 01:35:08',
                'username' => 'Admin',
            ),
            1 => 
            array (
                'alamat' => 'tegal',
                'created_at' => '2023-08-14 01:24:11',
                'email' => 'bankbca@gmail.com',
                'email_verified_at' => '2023-08-14 01:24:10',
                'gambar' => NULL,
                'id' => 2,
                'id_level' => 3,
                'nama' => 'bank',
                'no_hp' => '08773771883',
                'password' => '$2y$10$saW75a3ksU3srfkxzyNVlubipibSDY0B9A/agzYiNeL9EM754x3dW',
                'updated_at' => '2023-08-14 01:24:11',
                'username' => 'Bank BCA',
            ),
            2 => 
            array (
                'alamat' => 'tegal',
                'created_at' => '2023-08-14 01:24:11',
                'email' => 'bankbni@gmail.com',
                'email_verified_at' => '2023-08-14 01:24:11',
                'gambar' => NULL,
                'id' => 3,
                'id_level' => 3,
                'nama' => 'bank',
                'no_hp' => '08773771883',
                'password' => '$2y$10$AZdBMKVt5UVNHHMpzdxaBeChuxCTwYIfpyfwi44S8wPOWedGycIPu',
                'updated_at' => '2023-08-14 01:24:11',
                'username' => 'Bank BNI',
            ),
            3 => 
            array (
                'alamat' => 'tegal',
                'created_at' => '2023-08-14 01:24:11',
                'email' => 'bankmandiri@gmail.com',
                'email_verified_at' => '2023-08-14 01:24:11',
                'gambar' => NULL,
                'id' => 4,
                'id_level' => 3,
                'nama' => 'bank',
                'no_hp' => '08773771883',
                'password' => '$2y$10$oiYAjaG.dDOrA8DyDSYPCulr2es6uQHjizlTrppFEySZT1NwWX1za',
                'updated_at' => '2023-08-14 01:24:11',
                'username' => 'Bank Mandiri',
            ),
        ));
        
        
    }
}