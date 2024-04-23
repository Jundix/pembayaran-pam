<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriPelangganTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori_pelanggan')->delete();
        
        \DB::table('kategori_pelanggan')->insert(array (
            0 => 
            array (
                'created_at' => '2023-11-01 22:04:37',
                'id' => 1,
                'kategori' => 'Sosial Khusus - Sekolah',
                'updated_at' => '2023-11-01 22:04:37',
            ),
            1 => 
            array (
                'created_at' => '2023-11-01 22:04:37',
                'id' => 2,
                'kategori' => 'Sosial Khusus - Layanan Kesehatan',
                'updated_at' => '2023-11-01 22:04:37',
            ),
            2 => 
            array (
                'created_at' => '2023-11-01 22:07:19',
                'id' => 3,
                'kategori' => 'Sosial Khusus - Panti',
                'updated_at' => '2023-11-01 22:07:19',
            ),
            3 => 
            array (
                'created_at' => '2023-11-01 22:07:19',
                'id' => 4,
                'kategori' => 'Sosial Khusus - Terminal Air',
                'updated_at' => '2023-11-01 22:07:19',
            ),
            4 => 
            array (
                'created_at' => '2023-11-01 22:08:23',
                'id' => 5,
                'kategori' => 'Rumah Tangga - Luas Bangunan < 36 m2',
                'updated_at' => '2023-11-01 22:08:23',
            ),
            5 => 
            array (
                'created_at' => '2023-11-01 22:09:46',
                'id' => 6,
                'kategori' => 'Rumah Tangga - Luas Bangunan > 36 m2 s/d 54 m2',
                'updated_at' => '2023-11-01 22:09:46',
            ),
            6 => 
            array (
                'created_at' => '2023-11-01 22:10:11',
                'id' => 7,
                'kategori' => 'Rumah Tangga - Luas Bangunan > 54 m2 s/d 100 m2',
                'updated_at' => '2023-11-01 22:10:11',
            ),
            7 => 
            array (
                'created_at' => '2023-11-01 22:10:37',
                'id' => 8,
                'kategori' => 'Rumah Tangga - Luas Bangunan > 100 m2 s/d 200 m2',
                'updated_at' => '2023-11-01 22:10:37',
            ),
            8 => 
            array (
                'created_at' => '2023-11-01 22:11:10',
                'id' => 9,
                'kategori' => 'Rumah Tangga - Luas Bangunan > 200 m2 s/d 300 m2',
                'updated_at' => '2023-11-01 22:11:10',
            ),
            9 => 
            array (
                'created_at' => '2023-11-01 22:11:10',
                'id' => 10,
                'kategori' => 'Rumah Tangga - Luas Bangunan > 300 m2',
                'updated_at' => '2023-11-01 22:11:10',
            ),
        ));
        
        
    }
}