<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_methods')->delete();
        
        \DB::table('payment_methods')->insert(array (
            0 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'deskripsi' => '-',
                'gambar' => 'img/payment-method/bca-thumb.png',
                'id' => 1,
                'nama' => 'VA BCA',
                'slug' => 'va-bca',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'deskripsi' => '-',
                'gambar' => 'img/payment-method/mandiri-thumb.png',
                'id' => 2,
                'nama' => 'VA Mandiri',
                'slug' => 'va-mandiri',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'deskripsi' => '-',
                'gambar' => 'img/payment-method/bni-thumb.png',
                'id' => 3,
                'nama' => 'VA BNI',
                'slug' => 'va-bni',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}