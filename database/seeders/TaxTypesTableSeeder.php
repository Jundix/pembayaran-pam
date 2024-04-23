<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tax_types')->delete();
        
        \DB::table('tax_types')->insert(array (
            0 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
            'description' => 'Pajak Penerangan Jalan (PPJ) adalah pajak yang wajib dibayar oleh pelanggan listrik PLN. Dimana hasil PPJ tersebut merupakan salah satu Pendapatan Asli Daerah (PAD) yang digunakan untuk membiayai daerah, termasuk pemasangan dan pemeliharaan serta pembayaran rekening Penerangan Jalan Umum (PJU) sesuai kemampuan PEMDA.',
                'id' => 1,
                'name' => 'Pajak Penerangan Jalan',
                'updated_at' => '2023-08-14 01:24:11',
            ),
        ));
        
        
    }
}