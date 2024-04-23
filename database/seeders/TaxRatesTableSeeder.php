<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxRatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tax_rates')->delete();
        
        \DB::table('tax_rates')->insert(array (
            0 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 1,
                'indonesia_city_id' => '3171',
                'rate' => '3.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            1 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 2,
                'indonesia_city_id' => '3172',
                'rate' => '3.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            2 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 3,
                'indonesia_city_id' => '3173',
                'rate' => '3.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            3 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 4,
                'indonesia_city_id' => '3174',
                'rate' => '3.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            4 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 5,
                'indonesia_city_id' => '3175',
                'rate' => '3.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            5 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 6,
                'indonesia_city_id' => '3201',
                'rate' => '3.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            6 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 7,
                'indonesia_city_id' => '3271',
                'rate' => '3.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            7 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 8,
                'indonesia_city_id' => '5171',
                'rate' => '5.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            8 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 9,
                'indonesia_city_id' => '3273',
                'rate' => '6.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            9 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 10,
                'indonesia_city_id' => '1275',
                'rate' => '7.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            10 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 11,
                'indonesia_city_id' => '3216',
                'rate' => '7.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            11 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 12,
                'indonesia_city_id' => '3275',
                'rate' => '7.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            12 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 13,
                'indonesia_city_id' => '3374',
                'rate' => '8.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            13 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 14,
                'indonesia_city_id' => '3515',
                'rate' => '8.50',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            14 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 15,
                'indonesia_city_id' => '1171',
                'rate' => '9.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
            15 => 
            array (
                'created_at' => '2023-08-14 01:24:11',
                'id' => 16,
                'indonesia_city_id' => '7571',
                'rate' => '10.00',
                'tax_type_id' => 1,
                'updated_at' => '2023-08-14 01:24:11',
            ),
        ));
        
        
    }
}