<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndonesiaProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('indonesia_provinces')->delete();
        
        \DB::table('indonesia_provinces')->insert(array (
            0 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '11',
                'meta' => '{"lat":"4.695135","long":"96.7493993"}',
                'name' => 'ACEH',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            1 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '12',
                'meta' => '{"lat":"2.1153547","long":"99.5450974"}',
                'name' => 'SUMATERA UTARA',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            2 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '13',
                'meta' => '{"lat":"-0.7399397","long":"100.8000051"}',
                'name' => 'SUMATERA BARAT',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            3 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '14',
                'meta' => '{"lat":"0.2933469","long":"101.7068294"}',
                'name' => 'RIAU',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            4 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '15',
                'meta' => '{"lat":"-1.6101229","long":"103.6131203"}',
                'name' => 'JAMBI',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            5 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '16',
                'meta' => '{"lat":"-3.3194374","long":"103.914399"}',
                'name' => 'SUMATERA SELATAN',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            6 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '17',
                'meta' => '{"lat":"-3.7928451","long":"102.2607641"}',
                'name' => 'BENGKULU',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            7 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '18',
                'meta' => '{"lat":"-4.5585849","long":"105.4068079"}',
                'name' => 'LAMPUNG',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            8 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '19',
                'meta' => '{"lat":"-2.7410513","long":"106.4405872"}',
                'name' => 'KEPULAUAN BANGKA BELITUNG',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            9 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '21',
                'meta' => '{"lat":"3.9456514","long":"108.1428669"}',
                'name' => 'KEPULAUAN RIAU',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            10 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '31',
                'meta' => '{"lat":"-6.2087634","long":"106.845599"}',
                'name' => 'DKI JAKARTA',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            11 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '32',
                'meta' => '{"lat":"-7.090911","long":"107.668887"}',
                'name' => 'JAWA BARAT',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            12 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '33',
                'meta' => '{"lat":"-7.150975","long":"110.1402594"}',
                'name' => 'JAWA TENGAH',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            13 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '34',
                'meta' => '{"lat":"-7.8753849","long":"110.4262088"}',
                'name' => 'DI YOGYAKARTA',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            14 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '35',
                'meta' => '{"lat":"-7.5360639","long":"112.2384017"}',
                'name' => 'JAWA TIMUR',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            15 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '36',
                'meta' => '{"lat":"-6.4058172","long":"106.0640179"}',
                'name' => 'BANTEN',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            16 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '51',
                'meta' => '{"lat":"-8.3405389","long":"115.0919509"}',
                'name' => 'BALI',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            17 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '52',
                'meta' => '{"lat":"-8.6529334","long":"117.3616476"}',
                'name' => 'NUSA TENGGARA BARAT',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            18 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '53',
                'meta' => '{"lat":"-8.6573819","long":"121.0793705"}',
                'name' => 'NUSA TENGGARA TIMUR',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            19 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '61',
                'meta' => '{"lat":"-0.2787808","long":"111.4752851"}',
                'name' => 'KALIMANTAN BARAT',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            20 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '62',
                'meta' => '{"lat":"-1.6814878","long":"113.3823545"}',
                'name' => 'KALIMANTAN TENGAH',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            21 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '63',
                'meta' => '{"lat":"-3.0926415","long":"115.2837585"}',
                'name' => 'KALIMANTAN SELATAN',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            22 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '64',
                'meta' => '{"lat":"0.5386586","long":"116.419389"}',
                'name' => 'KALIMANTAN TIMUR',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            23 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '65',
                'meta' => '{"lat":"3.0730929","long":"116.0413889"}',
                'name' => 'KALIMANTAN UTARA',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            24 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '71',
                'meta' => '{"lat":"0.6246932","long":"123.9750018"}',
                'name' => 'SULAWESI UTARA',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            25 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '72',
                'meta' => '{"lat":"-1.4300254","long":"121.4456179"}',
                'name' => 'SULAWESI TENGAH',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            26 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '73',
                'meta' => '{"lat":"-3.6687994","long":"119.9740534"}',
                'name' => 'SULAWESI SELATAN',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            27 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '74',
                'meta' => '{"lat":"-4.14491","long":"122.174605"}',
                'name' => 'SULAWESI TENGGARA',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            28 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '75',
                'meta' => '{"lat":"0.5435442","long":"123.0567693"}',
                'name' => 'GORONTALO',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            29 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '76',
                'meta' => '{"lat":"-2.8441371","long":"119.2320784"}',
                'name' => 'SULAWESI BARAT',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            30 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '81',
                'meta' => '{"lat":"-2.8646166","long":"129.5765974"}',
                'name' => 'MALUKU',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            31 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '82',
                'meta' => '{"lat":"1.5709993","long":"127.8087693"}',
                'name' => 'MALUKU UTARA',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            32 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '91',
                'meta' => '{"lat":"-1.3361154","long":"133.1747162"}',
                'name' => 'PAPUA BARAT',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            33 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '94',
                'meta' => '{"lat":"-4.269928","long":"138.0803529"}',
                'name' => 'PAPUA',
                'updated_at' => '2023-08-14 01:24:10',
            ),
        ));
        
        
    }
}