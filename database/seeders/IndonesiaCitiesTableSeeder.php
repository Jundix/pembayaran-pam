<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndonesiaCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('indonesia_cities')->delete();
        
        \DB::table('indonesia_cities')->insert(array (
            0 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1101',
                'meta' => '{"lat":"2.6439724","long":"96.0255738"}',
                'name' => 'KABUPATEN SIMEULUE',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            1 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1102',
                'meta' => '{"lat":"2.3589459","long":"97.87216"}',
                'name' => 'KABUPATEN ACEH SINGKIL',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            2 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1103',
                'meta' => '{"lat":"3.3115056","long":"97.3516558"}',
                'name' => 'KABUPATEN ACEH SELATAN',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            3 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1104',
                'meta' => '{"lat":"3.3088666","long":"97.6982272"}',
                'name' => 'KABUPATEN ACEH TENGGARA',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            4 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1105',
                'meta' => '{"lat":"4.5224111","long":"97.6114217"}',
                'name' => 'KABUPATEN ACEH TIMUR',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            5 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1106',
                'meta' => '{"lat":"4.4482641","long":"96.8350999"}',
                'name' => 'KABUPATEN ACEH TENGAH',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            6 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1107',
                'meta' => '{"lat":"4.4542745","long":"96.1526985"}',
                'name' => 'KABUPATEN ACEH BARAT',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            7 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1108',
                'meta' => '{"lat":"5.4529168","long":"95.4777811"}',
                'name' => 'KABUPATEN ACEH BESAR',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            8 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1109',
                'meta' => '{"lat":"5.0742659","long":"95.940971"}',
                'name' => 'KABUPATEN PIDIE',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            9 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1110',
                'meta' => '{"lat":"5.1086446","long":"96.663812"}',
                'name' => 'KABUPATEN BIREUEN',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            10 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1111',
                'meta' => '{"lat":"4.9786331","long":"97.2221421"}',
                'name' => 'KABUPATEN ACEH UTARA',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            11 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1112',
                'meta' => '{"lat":"3.7963426","long":"97.0068393"}',
                'name' => 'KABUPATEN ACEH BARAT DAYA',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            12 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1113',
                'meta' => '{"lat":"3.955165","long":"97.3516558"}',
                'name' => 'KABUPATEN GAYO LUES',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            13 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1114',
                'meta' => '{"lat":"4.2328871","long":"98.0028892"}',
                'name' => 'KABUPATEN ACEH TAMIANG',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            14 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1115',
                'meta' => '{"lat":"4.1248406","long":"96.4929797"}',
                'name' => 'KABUPATEN NAGAN RAYA',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            15 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1116',
                'meta' => '{"lat":"4.7873684","long":"95.6457951"}',
                'name' => 'KABUPATEN ACEH JAYA',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            16 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1117',
                'meta' => '{"lat":"4.7513606","long":"96.9525224"}',
                'name' => 'KABUPATEN BENER MERIAH',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            17 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1118',
                'meta' => '{"lat":"5.1548063","long":"96.195132"}',
                'name' => 'KABUPATEN PIDIE JAYA',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            18 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1171',
                'meta' => '{"lat":"5.5482904","long":"95.3237559"}',
                'name' => 'KOTA BANDA ACEH',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            19 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1172',
                'meta' => '{"lat":"5.8926053","long":"95.3237608"}',
                'name' => 'KOTA SABANG',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            20 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1173',
                'meta' => '{"lat":"4.4725348","long":"97.9756343"}',
                'name' => 'KOTA LANGSA',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            21 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1174',
                'meta' => '{"lat":"5.1811638","long":"97.1413222"}',
                'name' => 'KOTA LHOKSEUMAWE',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            22 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1175',
                'meta' => '{"lat":"2.7121164","long":"97.9157099"}',
                'name' => 'KOTA SUBULUSSALAM',
                'province_id' => '11',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            23 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1201',
                'meta' => '{"lat":"1.0869444","long":"97.7416703"}',
                'name' => 'KABUPATEN NIAS',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            24 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1202',
                'meta' => '{"lat":"0.7432372","long":"99.3673084"}',
                'name' => 'KABUPATEN MANDAILING NATAL',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            25 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1203',
                'meta' => '{"lat":"1.5774933","long":"99.2785583"}',
                'name' => 'KABUPATEN TAPANULI SELATAN',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            26 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1204',
                'meta' => '{"lat":"1.8493299","long":"98.704075"}',
                'name' => 'KABUPATEN TAPANULI TENGAH',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            27 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1205',
                'meta' => '{"lat":"2.0405246","long":"99.1013498"}',
                'name' => 'KABUPATEN TAPANULI UTARA',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            28 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1206',
                'meta' => '{"lat":"2.3502398","long":"99.2785583"}',
                'name' => 'KABUPATEN TOBA SAMOSIR',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            29 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1207',
                'meta' => '{"lat":"2.3439863","long":"100.1703257"}',
                'name' => 'KABUPATEN LABUHAN BATU',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            30 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1208',
                'meta' => '{"lat":"2.8174722","long":"99.634135"}',
                'name' => 'KABUPATEN ASAHAN',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            31 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1209',
                'meta' => '{"lat":"2.9781612","long":"99.2785583"}',
                'name' => 'KABUPATEN SIMALUNGUN',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            32 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1210',
                'meta' => '{"lat":"2.8675801","long":"98.265058"}',
                'name' => 'KABUPATEN DAIRI',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            33 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1211',
                'meta' => '{"lat":"3.1052909","long":"98.265058"}',
                'name' => 'KABUPATEN KARO',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            34 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1212',
                'meta' => '{"lat":"3.4201802","long":"98.704075"}',
                'name' => 'KABUPATEN DELI SERDANG',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            35 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1213',
                'meta' => '{"lat":"3.8653916","long":"98.3088441"}',
                'name' => 'KABUPATEN LANGKAT',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            36 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1214',
                'meta' => '{"lat":"0.7086091","long":"97.8286368"}',
                'name' => 'KABUPATEN NIAS SELATAN',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            37 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1215',
                'meta' => '{"lat":"2.1988508","long":"98.5721016"}',
                'name' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            38 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1216',
                'meta' => '{"lat":"2.5135376","long":"98.2212979"}',
                'name' => 'KABUPATEN PAKPAK BHARAT',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            39 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1217',
                'meta' => '{"lat":"2.6274431","long":"98.7921836"}',
                'name' => 'KABUPATEN SAMOSIR',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            40 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1218',
                'meta' => '{"lat":"3.3371694","long":"99.0571089"}',
                'name' => 'KABUPATEN SERDANG BEDAGAI',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            41 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1219',
                'meta' => '{"lat":"3.1740979","long":"99.5006143"}',
                'name' => 'KABUPATEN BATU BARA',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            42 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1220',
                'meta' => '{"lat":"1.5758644","long":"99.634135"}',
                'name' => 'KABUPATEN PADANG LAWAS UTARA',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            43 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1221',
                'meta' => '{"lat":"1.1186977","long":"99.8124935"}',
                'name' => 'KABUPATEN PADANG LAWAS',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            44 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1222',
                'meta' => '{"lat":"1.8799353","long":"100.1703257"}',
                'name' => 'KABUPATEN LABUHAN BATU SELATAN',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            45 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1223',
                'meta' => '{"lat":"2.3465638","long":"99.8124935"}',
                'name' => 'KABUPATEN LABUHAN BATU UTARA',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            46 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1224',
                'meta' => '{"lat":"1.3166036","long":"97.394882"}',
                'name' => 'KABUPATEN NIAS UTARA',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            47 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1225',
                'meta' => '{"lat":"1.0116383","long":"97.4814163"}',
                'name' => 'KABUPATEN NIAS BARAT',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            48 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1271',
                'meta' => '{"lat":"1.7368371","long":"98.7851121"}',
                'name' => 'KOTA SIBOLGA',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            49 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1272',
                'meta' => '{"lat":"2.9659488","long":"99.7983506"}',
                'name' => 'KOTA TANJUNG BALAI',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            50 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1273',
                'meta' => '{"lat":"2.970042","long":"99.0681668"}',
                'name' => 'KOTA PEMATANG SIANTAR',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            51 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1274',
                'meta' => '{"lat":"3.3262879","long":"99.1566855"}',
                'name' => 'KOTA TEBING TINGGI',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            52 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1275',
                'meta' => '{"lat":"3.5951956","long":"98.6722227"}',
                'name' => 'KOTA MEDAN',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            53 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1276',
                'meta' => '{"lat":"3.6135482","long":"98.5025286"}',
                'name' => 'KOTA BINJAI',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            54 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1277',
                'meta' => '{"lat":"1.4437644","long":"99.2563859"}',
                'name' => 'KOTA PADANGSIDIMPUAN',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            55 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1278',
                'meta' => '{"lat":"1.2804692","long":"97.6146757"}',
                'name' => 'KOTA GUNUNGSITOLI',
                'province_id' => '12',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            56 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1301',
                'meta' => '{"lat":"-1.426001","long":"98.9245343"}',
                'name' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            57 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1302',
                'meta' => '{"lat":"-1.7223147","long":"100.8903099"}',
                'name' => 'KABUPATEN PESISIR SELATAN',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            58 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1303',
                'meta' => '{"lat":"-0.9643838","long":"100.8903099"}',
                'name' => 'KABUPATEN SOLOK',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            59 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1304',
                'meta' => '{"lat":"-0.6647007","long":"101.0711758"}',
                'name' => 'KABUPATEN SIJUNJUNG',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            60 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1305',
                'meta' => '{"lat":"-0.4797043","long":"100.5746224"}',
                'name' => 'KABUPATEN TANAH DATAR',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            61 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1306',
                'meta' => '{"lat":"-0.5546757","long":"100.2151578"}',
                'name' => 'KABUPATEN PADANG PARIAMAN',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            62 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1307',
                'meta' => '{"lat":"-0.2209392","long":"100.1703257"}',
                'name' => 'KABUPATEN AGAM',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            63 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1308',
                'meta' => '{"lat":"0.0734192","long":"100.5296115"}',
                'name' => 'KABUPATEN LIMA PULUH KOTA',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            64 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1309',
                'meta' => '{"lat":"0.2209392","long":"100.1703257"}',
                'name' => 'KABUPATEN PASAMAN',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            65 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1310',
                'meta' => '{"lat":"-1.4157329","long":"101.2523792"}',
                'name' => 'KABUPATEN SOLOK SELATAN',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            66 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1311',
                'meta' => '{"lat":"-1.1120568","long":"101.6157773"}',
                'name' => 'KABUPATEN DHARMASRAYA',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            67 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1312',
                'meta' => '{"lat":"0.2213005","long":"99.634135"}',
                'name' => 'KABUPATEN PASAMAN BARAT',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            68 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1371',
                'meta' => '{"lat":"-0.9470832","long":"100.417181"}',
                'name' => 'KOTA PADANG',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            69 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1372',
                'meta' => '{"lat":"-0.7885335","long":"100.6549823"}',
                'name' => 'KOTA SOLOK',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            70 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1373',
                'meta' => '{"lat":"-0.6841069","long":"100.7323332"}',
                'name' => 'KOTA SAWAH LUNTO',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            71 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1374',
                'meta' => '{"lat":"-0.4660955","long":"100.3984148"}',
                'name' => 'KOTA PADANG PANJANG',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            72 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1375',
                'meta' => '{"lat":"-0.3039178","long":"100.383479"}',
                'name' => 'KOTA BUKITTINGGI',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            73 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1376',
                'meta' => '{"lat":"-0.2246548","long":"100.6318006"}',
                'name' => 'KOTA PAYAKUMBUH',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            74 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1377',
                'meta' => '{"lat":"-0.6256517","long":"100.1233396"}',
                'name' => 'KOTA PARIAMAN',
                'province_id' => '13',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            75 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1401',
                'meta' => '{"lat":"-0.4411596","long":"101.5248055"}',
                'name' => 'KABUPATEN KUANTAN SINGINGI',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            76 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1402',
                'meta' => '{"lat":"-0.7361181","long":"102.2547919"}',
                'name' => 'KABUPATEN INDRAGIRI HULU',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            77 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1403',
                'meta' => '{"lat":"-0.1456733","long":"102.989615"}',
                'name' => 'KABUPATEN INDRAGIRI HILIR',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            78 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1404',
                'meta' => '{"lat":"0.1460923","long":"102.2547919"}',
                'name' => 'KABUPATEN PELALAWAN',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            79 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1405',
                'meta' => '{"lat":"0.8118812","long":"101.7979613"}',
                'name' => 'KABUPATEN S I A K',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            80 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1406',
                'meta' => '{"lat":"0.146671","long":"101.1617356"}',
                'name' => 'KABUPATEN KAMPAR',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            81 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1407',
                'meta' => '{"lat":"1.0410934","long":"100.439656"}',
                'name' => 'KABUPATEN ROKAN HULU',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            82 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1408',
                'meta' => '{"lat":"1.4139187","long":"101.6157773"}',
                'name' => 'KABUPATEN BENGKALIS',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            83 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1409',
                'meta' => '{"lat":"1.6463978","long":"100.8000051"}',
                'name' => 'KABUPATEN ROKAN HILIR',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            84 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1410',
                'meta' => '{"lat":"0.9208765","long":"102.6675575"}',
                'name' => 'KABUPATEN KEPULAUAN MERANTI',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            85 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1471',
                'meta' => '{"lat":"0.5070677","long":"101.4477793"}',
                'name' => 'KOTA PEKANBARU',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            86 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1473',
                'meta' => '{"lat":"1.6666349","long":"101.4001855"}',
                'name' => 'KOTA D U M A I',
                'province_id' => '14',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            87 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1501',
                'meta' => '{"lat":"-1.8720467","long":"101.4339148"}',
                'name' => 'KABUPATEN KERINCI',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            88 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1502',
                'meta' => '{"lat":"-2.1752789","long":"101.9804613"}',
                'name' => 'KABUPATEN MERANGIN',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            89 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1503',
                'meta' => '{"lat":"-2.3230422","long":"102.7135121"}',
                'name' => 'KABUPATEN SAROLANGUN',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            90 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1504',
                'meta' => '{"lat":"-1.7083922","long":"103.0817903"}',
                'name' => 'KABUPATEN BATANG HARI',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            91 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1505',
                'meta' => '{"lat":"-1.552136","long":"103.8216261"}',
                'name' => 'KABUPATEN MUARO JAMBI',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            92 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1506',
                'meta' => '{"lat":"-1.1024367","long":"103.8216261"}',
                'name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            93 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1507',
                'meta' => '{"lat":"-1.105846","long":"103.0817903"}',
                'name' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            94 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1508',
                'meta' => '{"lat":"-1.2592999","long":"102.3463875"}',
                'name' => 'KABUPATEN TEBO',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            95 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1509',
                'meta' => '{"lat":"-1.6401338","long":"101.8891721"}',
                'name' => 'KABUPATEN BUNGO',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            96 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1571',
                'meta' => '{"lat":"-1.6101229","long":"103.6131203"}',
                'name' => 'KOTA JAMBI',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            97 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1572',
                'meta' => '{"lat":"-2.0634335","long":"101.3947481"}',
                'name' => 'KOTA SUNGAI PENUH',
                'province_id' => '15',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            98 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1601',
                'meta' => '{"lat":"-4.0283486","long":"104.0072348"}',
                'name' => 'KABUPATEN OGAN KOMERING ULU',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            99 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1602',
                'meta' => '{"lat":"-3.4559744","long":"105.2194808"}',
                'name' => 'KABUPATEN OGAN KOMERING ILIR',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            100 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1603',
                'meta' => '{"lat":"-3.7114163","long":"104.0072348"}',
                'name' => 'KABUPATEN MUARA ENIM',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            101 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1604',
                'meta' => '{"lat":"-3.8008893","long":"103.3587288"}',
                'name' => 'KABUPATEN LAHAT',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            102 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1605',
                'meta' => '{"lat":"-3.0956537","long":"103.0817903"}',
                'name' => 'KABUPATEN MUSI RAWAS',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            103 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1606',
                'meta' => '{"lat":"-2.5442029","long":"103.7289167"}',
                'name' => 'KABUPATEN MUSI BANYUASIN',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            104 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1607',
                'meta' => '{"lat":"-2.6095639","long":"104.7520939"}',
                'name' => 'KABUPATEN BANYU ASIN',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            105 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1608',
                'meta' => '{"lat":"-4.6681951","long":"104.0072348"}',
                'name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            106 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1609',
                'meta' => '{"lat":"-3.8567934","long":"104.7520939"}',
                'name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            107 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1610',
                'meta' => '{"lat":"-3.426544","long":"104.6121475"}',
                'name' => 'KABUPATEN OGAN ILIR',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            108 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1611',
                'meta' => '{"lat":"-3.7286029","long":"102.8975098"}',
                'name' => 'KABUPATEN EMPAT LAWANG',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            109 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1612',
                'meta' => '{"lat":"-3.239825","long":"104.0072348"}',
                'name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            110 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1613',
                'meta' => '{"lat":"-2.787759","long":"102.7135121"}',
                'name' => 'KABUPATEN MUSI RAWAS UTARA',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            111 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1671',
                'meta' => '{"lat":"-2.9760735","long":"104.7754307"}',
                'name' => 'KOTA PALEMBANG',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            112 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1672',
                'meta' => '{"lat":"-3.4213707","long":"104.2436833"}',
                'name' => 'KOTA PRABUMULIH',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            113 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1673',
                'meta' => '{"lat":"-4.0419617","long":"103.2278845"}',
                'name' => 'KOTA PAGAR ALAM',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            114 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1674',
                'meta' => '{"lat":"-3.2995858","long":"102.857236"}',
                'name' => 'KOTA LUBUKLINGGAU',
                'province_id' => '16',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            115 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1701',
                'meta' => '{"lat":"-4.3248409","long":"103.035694"}',
                'name' => 'KABUPATEN BENGKULU SELATAN',
                'province_id' => '17',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            116 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1702',
                'meta' => '{"lat":"-3.4548154","long":"102.6675575"}',
                'name' => 'KABUPATEN REJANG LEBONG',
                'province_id' => '17',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            117 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1703',
                'meta' => '{"lat":"-3.2663246","long":"101.9804613"}',
                'name' => 'KABUPATEN BENGKULU UTARA',
                'province_id' => '17',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            118 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1704',
                'meta' => '{"lat":"-4.5215978","long":"103.2663479"}',
                'name' => 'KABUPATEN KAUR',
                'province_id' => '17',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            119 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1705',
                'meta' => '{"lat":"-4.0499387","long":"102.7135121"}',
                'name' => 'KABUPATEN SELUMA',
                'province_id' => '17',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            120 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1706',
                'meta' => '{"lat":"-2.6449114","long":"101.4339148"}',
                'name' => 'KABUPATEN MUKOMUKO',
                'province_id' => '17',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            121 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1707',
                'meta' => '{"lat":"-3.1455094","long":"102.2090224"}',
                'name' => 'KABUPATEN LEBONG',
                'province_id' => '17',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            122 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1708',
                'meta' => '{"lat":"-3.6130091","long":"102.6675575"}',
                'name' => 'KABUPATEN KEPAHIANG',
                'province_id' => '17',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            123 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1709',
                'meta' => '{"lat":"-3.6962324","long":"102.3922135"}',
                'name' => 'KABUPATEN BENGKULU TENGAH',
                'province_id' => '17',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            124 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1771',
                'meta' => '{"lat":"-3.7928451","long":"102.2607641"}',
                'name' => 'KOTA BENGKULU',
                'province_id' => '17',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            125 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1801',
                'meta' => '{"lat":"-5.1095293","long":"104.1466046"}',
                'name' => 'KABUPATEN LAMPUNG BARAT',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            126 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1802',
                'meta' => '{"lat":"-5.3027489","long":"104.5655273"}',
                'name' => 'KABUPATEN TANGGAMUS',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            127 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1803',
                'meta' => '{"lat":"-5.5622614","long":"105.5474373"}',
                'name' => 'KABUPATEN LAMPUNG SELATAN',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            128 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1804',
                'meta' => '{"lat":"-5.1134995","long":"105.6881788"}',
                'name' => 'KABUPATEN LAMPUNG TIMUR',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            129 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1805',
                'meta' => '{"lat":"-4.8008086","long":"105.3131185"}',
                'name' => 'KABUPATEN LAMPUNG TENGAH',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            130 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1806',
                'meta' => '{"lat":"-4.8133905","long":"104.7520939"}',
                'name' => 'KABUPATEN LAMPUNG UTARA',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            131 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1807',
                'meta' => '{"lat":"-4.4963689","long":"104.5655273"}',
                'name' => 'KABUPATEN WAY KANAN',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            132 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1808',
                'meta' => '{"lat":"-4.3176576","long":"105.5005483"}',
                'name' => 'KABUPATEN TULANGBAWANG',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            133 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1809',
                'meta' => '{"lat":"-5.493245","long":"105.0791228"}',
                'name' => 'KABUPATEN PESAWARAN',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            134 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1810',
                'meta' => '{"lat":"-5.3331186","long":"104.9856176"}',
                'name' => 'KABUPATEN PRINGSEWU',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            135 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1811',
                'meta' => '{"lat":"-4.0044783","long":"105.3131185"}',
                'name' => 'KABUPATEN MESUJI',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            136 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1812',
                'meta' => '{"lat":"-4.5256967","long":"105.0791228"}',
                'name' => 'KABUPATEN TULANG BAWANG BARAT',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            137 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1813',
                'meta' => '{"lat":"-5.2928191","long":"104.1233667"}',
                'name' => 'KABUPATEN PESISIR BARAT',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            138 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1871',
                'meta' => '{"lat":"-5.3971396","long":"105.2667887"}',
                'name' => 'KOTA BANDAR LAMPUNG',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            139 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1872',
                'meta' => '{"lat":"-5.1178394","long":"105.3072646"}',
                'name' => 'KOTA METRO',
                'province_id' => '18',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            140 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1901',
                'meta' => '{"lat":"-1.874294","long":"105.92299"}',
                'name' => 'KABUPATEN BANGKA',
                'province_id' => '19',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            141 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1902',
                'meta' => '{"lat":"-2.7216743","long":"107.763621"}',
                'name' => 'KABUPATEN BELITUNG',
                'province_id' => '19',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            142 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1903',
                'meta' => '{"lat":"-1.8405046","long":"105.5005483"}',
                'name' => 'KABUPATEN BANGKA BARAT',
                'province_id' => '19',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            143 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1904',
                'meta' => '{"lat":"-2.4007823","long":"106.2051484"}',
                'name' => 'KABUPATEN BANGKA TENGAH',
                'province_id' => '19',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            144 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1905',
                'meta' => '{"lat":"-2.7410513","long":"106.4405872"}',
                'name' => 'KABUPATEN BANGKA SELATAN',
                'province_id' => '19',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            145 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1906',
                'meta' => '{"lat":"-2.8678037","long":"108.1428669"}',
                'name' => 'KABUPATEN BELITUNG TIMUR',
                'province_id' => '19',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            146 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '1971',
                'meta' => '{"lat":"-2.1316266","long":"106.1169299"}',
                'name' => 'KOTA PANGKAL PINANG',
                'province_id' => '19',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            147 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '2101',
                'meta' => '{"lat":"0.7697665","long":"103.4049445"}',
                'name' => 'KABUPATEN KARIMUN',
                'province_id' => '21',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            148 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '2102',
                'meta' => '{"lat":"1.0619173","long":"104.5189214"}',
                'name' => 'KABUPATEN BINTAN',
                'province_id' => '21',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            149 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '2103',
                'meta' => '{"lat":"4","long":"108.25"}',
                'name' => 'KABUPATEN NATUNA',
                'province_id' => '21',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            150 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '2104',
                'meta' => '{"lat":"-0.4726065","long":"104.4257533"}',
                'name' => 'KABUPATEN LINGGA',
                'province_id' => '21',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            151 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '2105',
                'meta' => '{"lat":"3.1055459","long":"105.6537231"}',
                'name' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'province_id' => '21',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            152 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '2171',
                'meta' => '{"lat":"1.1300779","long":"104.0529207"}',
                'name' => 'KOTA BATAM',
                'province_id' => '21',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            153 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '2172',
                'meta' => '{"lat":"0.9185504","long":"104.4665072"}',
                'name' => 'KOTA TANJUNG PINANG',
                'province_id' => '21',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            154 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3101',
                'meta' => '{"lat":"-5.6122404","long":"106.6169964"}',
                'name' => 'KABUPATEN KEPULAUAN SERIBU',
                'province_id' => '31',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            155 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3171',
                'meta' => '{"lat":"-6.2614927","long":"106.8105998"}',
                'name' => 'KOTA JAKARTA SELATAN',
                'province_id' => '31',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            156 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3172',
                'meta' => '{"lat":"-6.2250138","long":"106.9004472"}',
                'name' => 'KOTA JAKARTA TIMUR',
                'province_id' => '31',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            157 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3173',
                'meta' => '{"lat":"-6.1805113","long":"106.8283831"}',
                'name' => 'KOTA JAKARTA PUSAT',
                'province_id' => '31',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            158 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3174',
                'meta' => '{"lat":"-6.1674309","long":"106.7637239"}',
                'name' => 'KOTA JAKARTA BARAT',
                'province_id' => '31',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            159 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3175',
                'meta' => '{"lat":"-6.1554057","long":"106.8926634"}',
                'name' => 'KOTA JAKARTA UTARA',
                'province_id' => '31',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            160 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3201',
                'meta' => '{"lat":"-6.5517758","long":"106.6291304"}',
                'name' => 'KABUPATEN BOGOR',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            161 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3202',
                'meta' => '{"lat":"-6.8649236","long":"106.9535691"}',
                'name' => 'KABUPATEN SUKABUMI',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            162 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3203',
                'meta' => '{"lat":"-7.3579773","long":"107.1957203"}',
                'name' => 'KABUPATEN CIANJUR',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            163 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3204',
                'meta' => '{"lat":"-7.1340702","long":"107.6215321"}',
                'name' => 'KABUPATEN BANDUNG',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            164 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3205',
                'meta' => '{"lat":"-7.5012204","long":"107.763621"}',
                'name' => 'KABUPATEN GARUT',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            165 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3206',
                'meta' => '{"lat":"-7.6513306","long":"108.1428669"}',
                'name' => 'KABUPATEN TASIKMALAYA',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            166 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3207',
                'meta' => '{"lat":"-7.3320773","long":"108.3492543"}',
                'name' => 'KABUPATEN CIAMIS',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            167 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3208',
                'meta' => '{"lat":"-7.0138053","long":"108.5700636"}',
                'name' => 'KABUPATEN KUNINGAN',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            168 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3209',
                'meta' => '{"lat":"-6.6898876","long":"108.4750846"}',
                'name' => 'KABUPATEN CIREBON',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            169 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3210',
                'meta' => '{"lat":"-6.7790605","long":"108.2852049"}',
                'name' => 'KABUPATEN MAJALENGKA',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            170 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3211',
                'meta' => '{"lat":"-6.832858","long":"107.9531836"}',
                'name' => 'KABUPATEN SUMEDANG',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            171 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3212',
                'meta' => '{"lat":"-6.33731","long":"108.3258329"}',
                'name' => 'KABUPATEN INDRAMAYU',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            172 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3213',
                'meta' => '{"lat":"-6.3487617","long":"107.763621"}',
                'name' => 'KABUPATEN SUBANG',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            173 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3214',
                'meta' => '{"lat":"-6.5649241","long":"107.4321959"}',
                'name' => 'KABUPATEN PURWAKARTA',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            174 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3215',
                'meta' => '{"lat":"-6.3227303","long":"107.3375791"}',
                'name' => 'KABUPATEN KARAWANG',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            175 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3216',
                'meta' => '{"lat":"-6.366723","long":"107.1735638"}',
                'name' => 'KABUPATEN BEKASI',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            176 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3217',
                'meta' => '{"lat":"-6.8652214","long":"107.4919767"}',
                'name' => 'KABUPATEN BANDUNG BARAT',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            177 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3218',
                'meta' => '{"lat":"-7.6150611","long":"108.4988269"}',
                'name' => 'KABUPATEN PANGANDARAN',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            178 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3271',
                'meta' => '{"lat":"-6.5971469","long":"106.8060388"}',
                'name' => 'KOTA BOGOR',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            179 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3272',
                'meta' => '{"lat":"-6.9277361","long":"106.9299579"}',
                'name' => 'KOTA SUKABUMI',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            180 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3273',
                'meta' => '{"lat":"-6.9174639","long":"107.6191228"}',
                'name' => 'KOTA BANDUNG',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            181 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3274',
                'meta' => '{"lat":"-6.7320229","long":"108.5523164"}',
                'name' => 'KOTA CIREBON',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            182 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3275',
                'meta' => '{"lat":"-6.2382699","long":"106.9755726"}',
                'name' => 'KOTA BEKASI',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            183 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3276',
                'meta' => '{"lat":"-6.4024844","long":"106.7942405"}',
                'name' => 'KOTA DEPOK',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            184 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3277',
                'meta' => '{"lat":"-6.8840816","long":"107.5413039"}',
                'name' => 'KOTA CIMAHI',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            185 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3278',
                'meta' => '{"lat":"-7.3505808","long":"108.2171633"}',
                'name' => 'KOTA TASIKMALAYA',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            186 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3279',
                'meta' => '{"lat":"-7.3706874","long":"108.5342487"}',
                'name' => 'KOTA BANJAR',
                'province_id' => '32',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            187 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3301',
                'meta' => '{"lat":"-7.6982991","long":"109.023521"}',
                'name' => 'KABUPATEN CILACAP',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            188 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3302',
                'meta' => '{"lat":"-7.4832133","long":"109.140438"}',
                'name' => 'KABUPATEN BANYUMAS',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            189 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3303',
                'meta' => '{"lat":"-7.3058578","long":"109.4259114"}',
                'name' => 'KABUPATEN PURBALINGGA',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            190 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3304',
                'meta' => '{"lat":"-7.3794368","long":"109.6163185"}',
                'name' => 'KABUPATEN BANJARNEGARA',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            191 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3305',
                'meta' => '{"lat":"-7.6680559","long":"109.6524575"}',
                'name' => 'KABUPATEN KEBUMEN',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            192 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3306',
                'meta' => '{"lat":"-7.6964509","long":"109.9989416"}',
                'name' => 'KABUPATEN PURWOREJO',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            193 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3307',
                'meta' => '{"lat":"-7.3632094","long":"109.9001796"}',
                'name' => 'KABUPATEN WONOSOBO',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            194 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3308',
                'meta' => '{"lat":"-7.4305237","long":"110.2832217"}',
                'name' => 'KABUPATEN MAGELANG',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            195 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3309',
                'meta' => '{"lat":"-7.4317773","long":"110.6883536"}',
                'name' => 'KABUPATEN BOYOLALI',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            196 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3310',
                'meta' => '{"lat":"-7.657893","long":"110.6645683"}',
                'name' => 'KABUPATEN KLATEN',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            197 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3311',
                'meta' => '{"lat":"-7.6483506","long":"110.8552919"}',
                'name' => 'KABUPATEN SUKOHARJO',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            198 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3312',
                'meta' => '{"lat":"-7.8846484","long":"111.0460407"}',
                'name' => 'KABUPATEN WONOGIRI',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            199 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3313',
                'meta' => '{"lat":"-7.6387228","long":"111.0460407"}',
                'name' => 'KABUPATEN KARANGANYAR',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            200 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3314',
                'meta' => '{"lat":"-7.43027","long":"111.0091855"}',
                'name' => 'KABUPATEN SRAGEN',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            201 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3315',
                'meta' => '{"lat":"-7.1541672","long":"110.9506636"}',
                'name' => 'KABUPATEN GROBOGAN',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            202 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3316',
                'meta' => '{"lat":"-7.012244","long":"111.3798928"}',
                'name' => 'KABUPATEN BLORA',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            203 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3317',
                'meta' => '{"lat":"-6.8082115","long":"111.4275888"}',
                'name' => 'KABUPATEN REMBANG',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            204 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3318',
                'meta' => '{"lat":"-6.7449635","long":"111.0460407"}',
                'name' => 'KABUPATEN PATI',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            205 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3319',
                'meta' => '{"lat":"-6.7726186","long":"110.8791343"}',
                'name' => 'KABUPATEN KUDUS',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            206 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3320',
                'meta' => '{"lat":"-6.582711","long":"110.6786933"}',
                'name' => 'KABUPATEN JEPARA',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            207 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3321',
                'meta' => '{"lat":"-6.9238879","long":"110.6645683"}',
                'name' => 'KABUPATEN DEMAK',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            208 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3322',
                'meta' => '{"lat":"-7.1764785","long":"110.4738762"}',
                'name' => 'KABUPATEN SEMARANG',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            209 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3323',
                'meta' => '{"lat":"-7.2748721","long":"110.0891894"}',
                'name' => 'KABUPATEN TEMANGGUNG',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            210 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3324',
                'meta' => '{"lat":"-7.0265442","long":"110.1879106"}',
                'name' => 'KABUPATEN KENDAL',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            211 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3325',
                'meta' => '{"lat":"-7.0392183","long":"109.9020509"}',
                'name' => 'KABUPATEN BATANG',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            212 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3326',
                'meta' => '{"lat":"-7.0517128","long":"109.6163185"}',
                'name' => 'KABUPATEN PEKALONGAN',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            213 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3327',
                'meta' => '{"lat":"-7.0599422","long":"109.4259114"}',
                'name' => 'KABUPATEN PEMALANG',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            214 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3328',
                'meta' => '{"lat":"-6.8588473","long":"109.1047663"}',
                'name' => 'KABUPATEN TEGAL',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            215 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3329',
                'meta' => '{"lat":"-6.9591793","long":"108.902683"}',
                'name' => 'KABUPATEN BREBES',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            216 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3371',
                'meta' => '{"lat":"-7.4797342","long":"110.2176941"}',
                'name' => 'KOTA MAGELANG',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            217 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3372',
                'meta' => '{"lat":"-7.5754887","long":"110.8243272"}',
                'name' => 'KOTA SURAKARTA',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            218 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3373',
                'meta' => '{"lat":"-7.3305234","long":"110.5084366"}',
                'name' => 'KOTA SALATIGA',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            219 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3374',
                'meta' => '{"lat":"-7.0051453","long":"110.4381254"}',
                'name' => 'KOTA SEMARANG',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            220 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3375',
                'meta' => '{"lat":"-6.8898362","long":"109.6745916"}',
                'name' => 'KOTA PEKALONGAN',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            221 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3376',
                'meta' => '{"lat":"-6.8797041","long":"109.1255917"}',
                'name' => 'KOTA TEGAL',
                'province_id' => '33',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            222 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3401',
                'meta' => '{"lat":"-7.8266798","long":"110.1640846"}',
                'name' => 'KABUPATEN KULON PROGO',
                'province_id' => '34',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            223 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3402',
                'meta' => '{"lat":"-7.9190169","long":"110.3785438"}',
                'name' => 'KABUPATEN BANTUL',
                'province_id' => '34',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            224 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3403',
                'meta' => '{"lat":"-8.0305091","long":"110.6168921"}',
                'name' => 'KABUPATEN GUNUNG KIDUL',
                'province_id' => '34',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            225 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3404',
                'meta' => '{"lat":"-7.7325213","long":"110.402376"}',
                'name' => 'KABUPATEN SLEMAN',
                'province_id' => '34',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            226 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3471',
                'meta' => '{"lat":"-7.7955798","long":"110.3694896"}',
                'name' => 'KOTA YOGYAKARTA',
                'province_id' => '34',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            227 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3501',
                'meta' => '{"lat":"-8.126331","long":"111.1414226"}',
                'name' => 'KABUPATEN PACITAN',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            228 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3502',
                'meta' => '{"lat":"-7.8650759","long":"111.4696322"}',
                'name' => 'KABUPATEN PONOROGO',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            229 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3503',
                'meta' => '{"lat":"-8.1824112","long":"111.6183755"}',
                'name' => 'KABUPATEN TRENGGALEK',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            230 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3504',
                'meta' => '{"lat":"-8.091221","long":"111.9641728"}',
                'name' => 'KABUPATEN TULUNGAGUNG',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            231 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3505',
                'meta' => '{"lat":"-8.0954627","long":"112.1609056"}',
                'name' => 'KABUPATEN BLITAR',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            232 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3506',
                'meta' => '{"lat":"-7.8232397","long":"112.1907122"}',
                'name' => 'KABUPATEN KEDIRI',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            233 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3507',
                'meta' => '{"lat":"-8.242209","long":"112.7152125"}',
                'name' => 'KABUPATEN MALANG',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            234 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3508',
                'meta' => '{"lat":"-8.0943571","long":"113.1441558"}',
                'name' => 'KABUPATEN LUMAJANG',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            235 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3509',
                'meta' => '{"lat":"-8.1844859","long":"113.6680747"}',
                'name' => 'KABUPATEN JEMBER',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            236 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3510',
                'meta' => '{"lat":"-8.2190944","long":"114.3691416"}',
                'name' => 'KABUPATEN BANYUWANGI',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            237 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3511',
                'meta' => '{"lat":"-7.9673906","long":"113.9060624"}',
                'name' => 'KABUPATEN BONDOWOSO',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            238 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3512',
                'meta' => '{"lat":"-7.7888522","long":"114.1914951"}',
                'name' => 'KABUPATEN SITUBONDO',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            239 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3513',
                'meta' => '{"lat":"-7.8717562","long":"113.4776098"}',
                'name' => 'KABUPATEN PROBOLINGGO',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            240 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3514',
                'meta' => '{"lat":"-7.7859961","long":"112.858217"}',
                'name' => 'KABUPATEN PASURUAN',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            241 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3515',
                'meta' => '{"lat":"-7.4726134","long":"112.6675398"}',
                'name' => 'KABUPATEN SIDOARJO',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            242 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3516',
                'meta' => '{"lat":"-7.4698914","long":"112.4351068"}',
                'name' => 'KABUPATEN MOJOKERTO',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            243 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3517',
                'meta' => '{"lat":"-7.5740867","long":"112.28609"}',
                'name' => 'KABUPATEN JOMBANG',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            244 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3518',
                'meta' => '{"lat":"-7.5943507","long":"111.9045541"}',
                'name' => 'KABUPATEN NGANJUK',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            245 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3519',
                'meta' => '{"lat":"-7.6093306","long":"111.6183755"}',
                'name' => 'KABUPATEN MADIUN',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            246 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3520',
                'meta' => '{"lat":"-7.6433138","long":"111.356045"}',
                'name' => 'KABUPATEN MAGETAN',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            247 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3521',
                'meta' => '{"lat":"-7.460987","long":"111.3321974"}',
                'name' => 'KABUPATEN NGAWI',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            248 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3522',
                'meta' => '{"lat":"-7.3174629","long":"111.7614661"}',
                'name' => 'KABUPATEN BOJONEGORO',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            249 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3523',
                'meta' => '{"lat":"-6.8949099","long":"112.0416754"}',
                'name' => 'KABUPATEN TUBAN',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            250 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3524',
                'meta' => '{"lat":"-7.1269261","long":"112.3337769"}',
                'name' => 'KABUPATEN LAMONGAN',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            251 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3525',
                'meta' => '{"lat":"-7.1550291","long":"112.5721881"}',
                'name' => 'KABUPATEN GRESIK',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            252 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3526',
                'meta' => '{"lat":"-7.038375","long":"112.9136695"}',
                'name' => 'KABUPATEN BANGKALAN',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            253 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3527',
                'meta' => '{"lat":"-7.0402326","long":"113.2394452"}',
                'name' => 'KABUPATEN SAMPANG',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            254 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3528',
                'meta' => '{"lat":"-7.1050857","long":"113.5252319"}',
                'name' => 'KABUPATEN PAMEKASAN',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            255 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3529',
                'meta' => '{"lat":"-6.9253999","long":"113.9060624"}',
                'name' => 'KABUPATEN SUMENEP',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            256 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3571',
                'meta' => '{"lat":"-7.8480156","long":"112.0178286"}',
                'name' => 'KOTA KEDIRI',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            257 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3572',
                'meta' => '{"lat":"-8.0954627","long":"112.1609056"}',
                'name' => 'KOTA BLITAR',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            258 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3573',
                'meta' => '{"lat":"-7.9666204","long":"112.6326321"}',
                'name' => 'KOTA MALANG',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            259 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3574',
                'meta' => '{"lat":"-7.7764226","long":"113.2037131"}',
                'name' => 'KOTA PROBOLINGGO',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            260 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3575',
                'meta' => '{"lat":"-7.6469193","long":"112.8999225"}',
                'name' => 'KOTA PASURUAN',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            261 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3576',
                'meta' => '{"lat":"-7.4704747","long":"112.4401329"}',
                'name' => 'KOTA MOJOKERTO',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            262 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3577',
                'meta' => '{"lat":"-7.6310587","long":"111.5300159"}',
                'name' => 'KOTA MADIUN',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            263 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3578',
                'meta' => '{"lat":"-7.2574719","long":"112.7520883"}',
                'name' => 'KOTA SURABAYA',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            264 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3579',
                'meta' => '{"lat":"-7.8830648","long":"112.5334492"}',
                'name' => 'KOTA BATU',
                'province_id' => '35',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            265 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3601',
                'meta' => '{"lat":"-6.7482706","long":"105.6881788"}',
                'name' => 'KABUPATEN PANDEGLANG',
                'province_id' => '36',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            266 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3602',
                'meta' => '{"lat":"-6.5643956","long":"106.2522143"}',
                'name' => 'KABUPATEN LEBAK',
                'province_id' => '36',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            267 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3603',
                'meta' => '{"lat":"-6.1870007","long":"106.487658"}',
                'name' => 'KABUPATEN TANGERANG',
                'province_id' => '36',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            268 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3604',
                'meta' => '{"lat":"-6.1397339","long":"106.040506"}',
                'name' => 'KABUPATEN SERANG',
                'province_id' => '36',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            269 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3671',
                'meta' => '{"lat":"-6.1701796","long":"106.6403236"}',
                'name' => 'KOTA TANGERANG',
                'province_id' => '36',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            270 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3672',
                'meta' => '{"lat":"-6.0186817","long":"106.0558218"}',
                'name' => 'KOTA CILEGON',
                'province_id' => '36',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            271 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3673',
                'meta' => '{"lat":"-6.1169309","long":"106.1538519"}',
                'name' => 'KOTA SERANG',
                'province_id' => '36',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            272 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '3674',
                'meta' => '{"lat":"-6.2835218","long":"106.7112933"}',
                'name' => 'KOTA TANGERANG SELATAN',
                'province_id' => '36',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            273 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5101',
                'meta' => '{"lat":"-8.3233438","long":"114.6667939"}',
                'name' => 'KABUPATEN JEMBRANA',
                'province_id' => '51',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            274 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5102',
                'meta' => '{"lat":"-8.4595561","long":"115.0465991"}',
                'name' => 'KABUPATEN TABANAN',
                'province_id' => '51',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            275 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5103',
                'meta' => '{"lat":"-8.5819296","long":"115.1770586"}',
                'name' => 'KABUPATEN BADUNG',
                'province_id' => '51',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            276 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5104',
                'meta' => '{"lat":"-8.4248244","long":"115.2600506"}',
                'name' => 'KABUPATEN GIANYAR',
                'province_id' => '51',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            277 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5105',
                'meta' => '{"lat":"-8.727807","long":"115.5444231"}',
                'name' => 'KABUPATEN KLUNGKUNG',
                'province_id' => '51',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            278 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5106',
                'meta' => '{"lat":"-8.2975884","long":"115.3548713"}',
                'name' => 'KABUPATEN BANGLI',
                'province_id' => '51',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            279 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5107',
                'meta' => '{"lat":"-8.3465933","long":"115.5207358"}',
                'name' => 'KABUPATEN KARANG ASEM',
                'province_id' => '51',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            280 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5108',
                'meta' => '{"lat":"-8.2238968","long":"114.9516869"}',
                'name' => 'KABUPATEN BULELENG',
                'province_id' => '51',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            281 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5171',
                'meta' => '{"lat":"-8.6704582","long":"115.2126293"}',
                'name' => 'KOTA DENPASAR',
                'province_id' => '51',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            282 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5201',
                'meta' => '{"lat":"-8.6464599","long":"116.1123078"}',
                'name' => 'KABUPATEN LOMBOK BARAT',
                'province_id' => '52',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            283 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5202',
                'meta' => '{"lat":"-8.694623","long":"116.2777073"}',
                'name' => 'KABUPATEN LOMBOK TENGAH',
                'province_id' => '52',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            284 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5203',
                'meta' => '{"lat":"-8.5134471","long":"116.5609857"}',
                'name' => 'KABUPATEN LOMBOK TIMUR',
                'province_id' => '52',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            285 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5204',
                'meta' => '{"lat":"-8.6529334","long":"117.3616476"}',
                'name' => 'KABUPATEN SUMBAWA',
                'province_id' => '52',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            286 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5205',
                'meta' => '{"lat":"-8.5363958","long":"118.3461948"}',
                'name' => 'KABUPATEN DOMPU',
                'province_id' => '52',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            287 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5206',
                'meta' => '{"lat":"-8.4353962","long":"118.626479"}',
                'name' => 'KABUPATEN BIMA',
                'province_id' => '52',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            288 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5207',
                'meta' => '{"lat":"-8.9292907","long":"116.8910342"}',
                'name' => 'KABUPATEN SUMBAWA BARAT',
                'province_id' => '52',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            289 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5208',
                'meta' => '{"lat":"-8.3739076","long":"116.2777073"}',
                'name' => 'KABUPATEN LOMBOK UTARA',
                'province_id' => '52',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            290 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5271',
                'meta' => '{"lat":"-8.5970808","long":"116.1004894"}',
                'name' => 'KOTA MATARAM',
                'province_id' => '52',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            291 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5272',
                'meta' => '{"lat":"-8.4642661","long":"118.7449028"}',
                'name' => 'KOTA BIMA',
                'province_id' => '52',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            292 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5301',
                'meta' => '{"lat":"-9.6548326","long":"119.3947135"}',
                'name' => 'KABUPATEN SUMBA BARAT',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            293 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5302',
                'meta' => '{"lat":"-9.9802103","long":"120.3435506"}',
                'name' => 'KABUPATEN SUMBA TIMUR',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            294 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5303',
                'meta' => '{"lat":"-9.9906166","long":"123.8857747"}',
                'name' => 'KABUPATEN KUPANG',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            295 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5304',
                'meta' => '{"lat":"-9.7762816","long":"124.4198243"}',
                'name' => 'KABUPATEN TIMOR TENGAH SELATAN',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            296 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5305',
                'meta' => '{"lat":"-9.4522647","long":"124.597132"}',
                'name' => 'KABUPATEN TIMOR TENGAH UTARA',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            297 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5306',
                'meta' => '{"lat":"-9.1538978","long":"124.906551"}',
                'name' => 'KABUPATEN BELU',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            298 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5307',
                'meta' => '{"lat":"-8.2928427","long":"124.5528387"}',
                'name' => 'KABUPATEN ALOR',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            299 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5308',
                'meta' => '{"lat":"-8.4719075","long":"123.4831906"}',
                'name' => 'KABUPATEN LEMBATA',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            300 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5309',
                'meta' => '{"lat":"-8.3130942","long":"122.9663018"}',
                'name' => 'KABUPATEN FLORES TIMUR',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            301 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5310',
                'meta' => '{"lat":"-8.6766175","long":"122.1291843"}',
                'name' => 'KABUPATEN SIKKA',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            302 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5311',
                'meta' => '{"lat":"-8.6762912","long":"121.7195459"}',
                'name' => 'KABUPATEN ENDE',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            303 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5312',
                'meta' => '{"lat":"-8.7430424","long":"120.9876321"}',
                'name' => 'KABUPATEN NGADA',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            304 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5313',
                'meta' => '{"lat":"-8.6796987","long":"120.3896651"}',
                'name' => 'KABUPATEN MANGGARAI',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            305 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5314',
                'meta' => '{"lat":"-10.7386421","long":"123.1239049"}',
                'name' => 'KABUPATEN ROTE NDAO',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            306 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5315',
                'meta' => '{"lat":"-8.6688149","long":"120.0665236"}',
                'name' => 'KABUPATEN MANGGARAI BARAT',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            307 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5316',
                'meta' => '{"lat":"-9.4879226","long":"119.6962677"}',
                'name' => 'KABUPATEN SUMBA TENGAH',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            308 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5317',
                'meta' => '{"lat":"-9.539139","long":"119.1390642"}',
                'name' => 'KABUPATEN SUMBA BARAT DAYA',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            309 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5318',
                'meta' => '{"lat":"-8.6753545","long":"121.3084088"}',
                'name' => 'KABUPATEN NAGEKEO',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            310 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5319',
                'meta' => '{"lat":"-8.6206712","long":"120.6199895"}',
                'name' => 'KABUPATEN MANGGARAI TIMUR',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            311 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5320',
                'meta' => '{"lat":"-10.5541116","long":"121.8334868"}',
                'name' => 'KABUPATEN SABU RAIJUA',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            312 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5321',
                'meta' => '{"lat":"-9.5308587","long":"124.906551"}',
                'name' => 'KABUPATEN MALAKA',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            313 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '5371',
                'meta' => '{"lat":"-10.1771997","long":"123.6070329"}',
                'name' => 'KOTA KUPANG',
                'province_id' => '53',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            314 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6101',
                'meta' => '{"lat":"1.3625191","long":"109.2831531"}',
                'name' => 'KABUPATEN SAMBAS',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            315 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6102',
                'meta' => '{"lat":"1.06911","long":"109.6639309"}',
                'name' => 'KABUPATEN BENGKAYANG',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            316 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6103',
                'meta' => '{"lat":"0.4237287","long":"109.7591675"}',
                'name' => 'KABUPATEN LANDAK',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            317 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6104',
                'meta' => '{"lat":"0.3897139","long":"109.140438"}',
                'name' => 'KABUPATEN MEMPAWAH',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            318 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6105',
                'meta' => '{"lat":"0.1400117","long":"110.5215459"}',
                'name' => 'KABUPATEN SANGGAU',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            319 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6106',
                'meta' => '{"lat":"-1.5697615","long":"110.5215459"}',
                'name' => 'KABUPATEN KETAPANG',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            320 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6107',
                'meta' => '{"lat":"-0.1378068","long":"112.8105512"}',
                'name' => 'KABUPATEN SINTANG',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            321 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6108',
                'meta' => '{"lat":"0.8336697","long":"113.0011989"}',
                'name' => 'KABUPATEN KAPUAS HULU',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            322 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6109',
                'meta' => '{"lat":"-0.0697175","long":"110.9983515"}',
                'name' => 'KABUPATEN SEKADAU',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            323 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6110',
                'meta' => '{"lat":"-0.7000681","long":"111.6660725"}',
                'name' => 'KABUPATEN MELAWI',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            324 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6111',
                'meta' => '{"lat":"-0.9225877","long":"110.0449662"}',
                'name' => 'KABUPATEN KAYONG UTARA',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            325 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6112',
                'meta' => '{"lat":"-0.3533938","long":"109.4735066"}',
                'name' => 'KABUPATEN KUBU RAYA',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            326 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6171',
                'meta' => '{"lat":"-0.0263303","long":"109.3425039"}',
                'name' => 'KOTA PONTIANAK',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            327 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6172',
                'meta' => '{"lat":"0.9060204","long":"108.9872049"}',
                'name' => 'KOTA SINGKAWANG',
                'province_id' => '61',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            328 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6201',
                'meta' => '{"lat":"-2.5063419","long":"111.7614661"}',
                'name' => 'KABUPATEN KOTAWARINGIN BARAT',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            329 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6202',
                'meta' => '{"lat":"-2.1225475","long":"112.8105512"}',
                'name' => 'KABUPATEN KOTAWARINGIN TIMUR',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            330 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6203',
                'meta' => '{"lat":"-1.8116445","long":"114.3341432"}',
                'name' => 'KABUPATEN KAPUAS',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            331 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6204',
                'meta' => '{"lat":"-1.875943","long":"114.8092691"}',
                'name' => 'KABUPATEN BARITO SELATAN',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            332 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6205',
                'meta' => '{"lat":"-0.9587136","long":"115.094045"}',
                'name' => 'KABUPATEN BARITO UTARA',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            333 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6206',
                'meta' => '{"lat":"-2.6267517","long":"111.2368084"}',
                'name' => 'KABUPATEN SUKAMARA',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            334 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6207',
                'meta' => '{"lat":"-1.8526377","long":"111.2845025"}',
                'name' => 'KABUPATEN LAMANDAU',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            335 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6208',
                'meta' => '{"lat":"-3.0123467","long":"112.4291464"}',
                'name' => 'KABUPATEN SERUYAN',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            336 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6209',
                'meta' => '{"lat":"-0.9758379","long":"112.8105512"}',
                'name' => 'KABUPATEN KATINGAN',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            337 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6210',
                'meta' => '{"lat":"-2.6849607","long":"113.9536466"}',
                'name' => 'KABUPATEN PULANG PISAU',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            338 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6211',
                'meta' => '{"lat":"-1.2522464","long":"113.5728501"}',
                'name' => 'KABUPATEN GUNUNG MAS',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            339 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6212',
                'meta' => '{"lat":"-2.0123999","long":"115.188916"}',
                'name' => 'KABUPATEN BARITO TIMUR',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            340 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6213',
                'meta' => '{"lat":"-0.1362171","long":"114.3341432"}',
                'name' => 'KABUPATEN MURUNG RAYA',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            341 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6271',
                'meta' => '{"lat":"-2.2161048","long":"113.913977"}',
                'name' => 'KOTA PALANGKA RAYA',
                'province_id' => '62',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            342 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6301',
                'meta' => '{"lat":"-3.7694047","long":"114.8092691"}',
                'name' => 'KABUPATEN TANAH LAUT',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            343 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6302',
                'meta' => '{"lat":"-3.0029841","long":"115.9467997"}',
                'name' => 'KABUPATEN KOTA BARU',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            344 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6303',
                'meta' => '{"lat":"-3.3200228","long":"114.9991464"}',
                'name' => 'KABUPATEN BANJAR',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            345 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6304',
                'meta' => '{"lat":"-3.0714738","long":"114.6667939"}',
                'name' => 'KABUPATEN BARITO KUALA',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            346 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6305',
                'meta' => '{"lat":"-2.9160746","long":"115.0465991"}',
                'name' => 'KABUPATEN TAPIN',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            347 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6306',
                'meta' => '{"lat":"-2.7662681","long":"115.2363408"}',
                'name' => 'KABUPATEN HULU SUNGAI SELATAN',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            348 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6307',
                'meta' => '{"lat":"-2.6153162","long":"115.5207358"}',
                'name' => 'KABUPATEN HULU SUNGAI TENGAH',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            349 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6308',
                'meta' => '{"lat":"-2.4421225","long":"115.188916"}',
                'name' => 'KABUPATEN HULU SUNGAI UTARA',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            350 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6309',
                'meta' => '{"lat":"-1.864302","long":"115.5681084"}',
                'name' => 'KABUPATEN TABALONG',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            351 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6310',
                'meta' => '{"lat":"-3.4512244","long":"115.5681084"}',
                'name' => 'KABUPATEN TANAH BUMBU',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            352 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6311',
                'meta' => '{"lat":"-2.3260425","long":"115.6154732"}',
                'name' => 'KABUPATEN BALANGAN',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            353 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6371',
                'meta' => '{"lat":"-3.3186067","long":"114.5943784"}',
                'name' => 'KOTA BANJARMASIN',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            354 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6372',
                'meta' => '{"lat":"-3.4572422","long":"114.8103181"}',
                'name' => 'KOTA BANJAR BARU',
                'province_id' => '63',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            355 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6401',
                'meta' => '{"lat":"-1.7175266","long":"115.9467997"}',
                'name' => 'KABUPATEN PASER',
                'province_id' => '64',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            356 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6402',
                'meta' => '{"lat":"-0.4051796","long":"115.8521764"}',
                'name' => 'KABUPATEN KUTAI BARAT',
                'province_id' => '64',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            357 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6403',
                'meta' => '{"lat":"-0.1336655","long":"116.6081653"}',
                'name' => 'KABUPATEN KUTAI KARTANEGARA',
                'province_id' => '64',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            358 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6404',
                'meta' => '{"lat":"0.9433774","long":"116.9852422"}',
                'name' => 'KABUPATEN KUTAI TIMUR',
                'province_id' => '64',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            359 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6405',
                'meta' => '{"lat":"2.0450883","long":"117.3616476"}',
                'name' => 'KABUPATEN BERAU',
                'province_id' => '64',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            360 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6409',
                'meta' => '{"lat":"-1.2917094","long":"116.5137964"}',
                'name' => 'KABUPATEN PENAJAM PASER UTARA',
                'province_id' => '64',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            361 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6411',
                'meta' => '{"lat":"0.9616678","long":"114.7142918"}',
                'name' => 'KABUPATEN MAHAKAM HULU',
                'province_id' => '64',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            362 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6471',
                'meta' => '{"lat":"-1.2379274","long":"116.8528526"}',
                'name' => 'KOTA BALIKPAPAN',
                'province_id' => '64',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            363 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6472',
                'meta' => '{"lat":"-0.5016166","long":"117.1264753"}',
                'name' => 'KOTA SAMARINDA',
                'province_id' => '64',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            364 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6474',
                'meta' => '{"lat":"0.120863","long":"117.4800445"}',
                'name' => 'KOTA BONTANG',
                'province_id' => '64',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            365 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6501',
                'meta' => '{"lat":"3.0730929","long":"116.0413889"}',
                'name' => 'KABUPATEN MALINAU',
                'province_id' => '65',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            366 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6502',
                'meta' => '{"lat":"2.9042476","long":"116.9852422"}',
                'name' => 'KABUPATEN BULUNGAN',
                'province_id' => '65',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            367 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6503',
                'meta' => '{"lat":"3.551869","long":"117.0794082"}',
                'name' => 'KABUPATEN TANA TIDUNG',
                'province_id' => '65',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            368 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6504',
                'meta' => '{"lat":"4.0809649","long":"116.6081653"}',
                'name' => 'KABUPATEN NUNUKAN',
                'province_id' => '65',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            369 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '6571',
                'meta' => '{"lat":"3.3273599","long":"117.5785049"}',
                'name' => 'KOTA TARAKAN',
                'province_id' => '65',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            370 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7101',
                'meta' => '{"lat":"0.6870994","long":"124.0641419"}',
                'name' => 'KABUPATEN BOLAANG MONGONDOW',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            371 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7102',
                'meta' => '{"lat":"1.2168837","long":"124.8182593"}',
                'name' => 'KABUPATEN MINAHASA',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            372 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7103',
                'meta' => '{"lat":"3.6329172","long":"125.5000999"}',
                'name' => 'KABUPATEN KEPULAUAN SANGIHE',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            373 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7104',
                'meta' => '{"lat":"4.3066741","long":"126.8034921"}',
                'name' => 'KABUPATEN KEPULAUAN TALAUD',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            374 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7105',
                'meta' => '{"lat":"1.0946773","long":"124.4641848"}',
                'name' => 'KABUPATEN MINAHASA SELATAN',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            375 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7106',
                'meta' => '{"lat":"1.5327973","long":"124.994751"}',
                'name' => 'KABUPATEN MINAHASA UTARA',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            376 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7107',
                'meta' => '{"lat":"0.9070359","long":"123.2657311"}',
                'name' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            377 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7108',
                'meta' => '{"lat":"2.345964","long":"125.4124355"}',
                'name' => 'KABUPATEN SIAU TAGULANDANG BIARO',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            378 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7109',
                'meta' => '{"lat":"1.0278551","long":"124.7298765"}',
                'name' => 'KABUPATEN MINAHASA TENGGARA',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            379 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7110',
                'meta' => '{"lat":"0.4053215","long":"123.8411288"}',
                'name' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            380 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7111',
                'meta' => '{"lat":"0.7152651","long":"124.4641848"}',
                'name' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            381 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7171',
                'meta' => '{"lat":"1.4748305","long":"124.8420794"}',
                'name' => 'KOTA MANADO',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            382 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7172',
                'meta' => '{"lat":"1.4403744","long":"125.1216524"}',
                'name' => 'KOTA BITUNG',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            383 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7173',
                'meta' => '{"lat":"1.3229337","long":"124.8405081"}',
                'name' => 'KOTA TOMOHON',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            384 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7174',
                'meta' => '{"lat":"0.7243733","long":"124.3199316"}',
                'name' => 'KOTA KOTAMOBAGU',
                'province_id' => '71',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            385 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7201',
                'meta' => '{"lat":"-1.3075939","long":"123.0338767"}',
                'name' => 'KABUPATEN BANGGAI KEPULAUAN',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            386 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7202',
                'meta' => '{"lat":"-0.956178","long":"122.6277455"}',
                'name' => 'KABUPATEN BANGGAI',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            387 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7203',
                'meta' => '{"lat":"-2.6987231","long":"121.9017954"}',
                'name' => 'KABUPATEN MOROWALI',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            388 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7204',
                'meta' => '{"lat":"-1.6468883","long":"120.4357631"}',
                'name' => 'KABUPATEN POSO',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            389 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7205',
                'meta' => '{"lat":"-0.4233155","long":"119.8352303"}',
                'name' => 'KABUPATEN DONGGALA',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            390 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7206',
                'meta' => '{"lat":"0.8768231","long":"120.7579834"}',
                'name' => 'KABUPATEN TOLI-TOLI',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            391 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7207',
                'meta' => '{"lat":"0.9695452","long":"121.3541631"}',
                'name' => 'KABUPATEN BUOL',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            392 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7208',
                'meta' => '{"lat":"0.5817607","long":"120.8039474"}',
                'name' => 'KABUPATEN PARIGI MOUTONG',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            393 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7209',
                'meta' => '{"lat":"-1.098757","long":"121.5370003"}',
                'name' => 'KABUPATEN TOJO UNA-UNA',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            394 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7210',
                'meta' => '{"lat":"-1.3859904","long":"119.8815203"}',
                'name' => 'KABUPATEN SIGI',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            395 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7211',
                'meta' => '{"lat":"-1.6734525","long":"123.5504076"}',
                'name' => 'KABUPATEN BANGGAI LAUT',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            396 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7212',
                'meta' => '{"lat":"-1.6311761","long":"121.3541631"}',
                'name' => 'KABUPATEN MOROWALI UTARA',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            397 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7271',
                'meta' => '{"lat":"-0.9002915","long":"119.8779987"}',
                'name' => 'KOTA PALU',
                'province_id' => '72',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            398 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7301',
                'meta' => '{"lat":"-6.2869786","long":"120.5048792"}',
                'name' => 'KABUPATEN KEPULAUAN SELAYAR',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            399 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7302',
                'meta' => '{"lat":"-5.4329368","long":"120.2051096"}',
                'name' => 'KABUPATEN BULUKUMBA',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            400 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7303',
                'meta' => '{"lat":"-5.5169316","long":"120.0202964"}',
                'name' => 'KABUPATEN BANTAENG',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            401 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7304',
                'meta' => '{"lat":"-5.554579","long":"119.6730939"}',
                'name' => 'KABUPATEN JENEPONTO',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            402 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7305',
                'meta' => '{"lat":"-5.4162493","long":"119.4875668"}',
                'name' => 'KABUPATEN TAKALAR',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            403 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7306',
                'meta' => '{"lat":"-5.3102888","long":"119.742604"}',
                'name' => 'KABUPATEN GOWA',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            404 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7307',
                'meta' => '{"lat":"-5.2171961","long":"120.112735"}',
                'name' => 'KABUPATEN SINJAI',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            405 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7308',
                'meta' => '{"lat":"-5.0549145","long":"119.6962677"}',
                'name' => 'KABUPATEN MAROS',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            406 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7309',
                'meta' => '{"lat":"-4.805035","long":"119.5571677"}',
                'name' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            407 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7310',
                'meta' => '{"lat":"-4.436417","long":"119.6499162"}',
                'name' => 'KABUPATEN BARRU',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            408 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7311',
                'meta' => '{"lat":"-4.7443383","long":"120.0665236"}',
                'name' => 'KABUPATEN BONE',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            409 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7312',
                'meta' => '{"lat":"-4.3518541","long":"119.9277947"}',
                'name' => 'KABUPATEN SOPPENG',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            410 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7313',
                'meta' => '{"lat":"-4.022229","long":"120.0665236"}',
                'name' => 'KABUPATEN WAJO',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            411 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7314',
                'meta' => '{"lat":"-3.7738981","long":"120.0202964"}',
                'name' => 'KABUPATEN SIDENRENG RAPPANG',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            412 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7315',
                'meta' => '{"lat":"-3.6483486","long":"119.5571677"}',
                'name' => 'KABUPATEN PINRANG',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            413 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7316',
                'meta' => '{"lat":"-3.4590744","long":"119.8815203"}',
                'name' => 'KABUPATEN ENREKANG',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            414 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7317',
                'meta' => '{"lat":"-3.3052214","long":"120.2512728"}',
                'name' => 'KABUPATEN LUWU',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            415 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7318',
                'meta' => '{"lat":"-3.0753003","long":"119.742604"}',
                'name' => 'KABUPATEN TANA TORAJA',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            416 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7322',
                'meta' => '{"lat":"-2.2690446","long":"119.9740534"}',
                'name' => 'KABUPATEN LUWU UTARA',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            417 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7325',
                'meta' => '{"lat":"-2.5825518","long":"121.1710389"}',
                'name' => 'KABUPATEN LUWU TIMUR',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            418 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7326',
                'meta' => '{"lat":"-2.8621942","long":"119.8352303"}',
                'name' => 'KABUPATEN TORAJA UTARA',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            419 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7371',
                'meta' => '{"lat":"-5.1476651","long":"119.4327314"}',
                'name' => 'KOTA MAKASSAR',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            420 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7372',
                'meta' => '{"lat":"-4.0096221","long":"119.6290617"}',
                'name' => 'KOTA PAREPARE',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            421 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7373',
                'meta' => '{"lat":"-3.0016343","long":"120.1985141"}',
                'name' => 'KOTA PALOPO',
                'province_id' => '73',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            422 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7401',
                'meta' => '{"lat":"-5.3096355","long":"122.9888319"}',
                'name' => 'KABUPATEN BUTON',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            423 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7402',
                'meta' => '{"lat":"-4.901629","long":"122.6277455"}',
                'name' => 'KABUPATEN MUNA',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            424 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7403',
                'meta' => '{"lat":"-3.9380432","long":"122.0837445"}',
                'name' => 'KABUPATEN KONAWE',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            425 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7404',
                'meta' => '{"lat":"-3.9946988","long":"121.5826642"}',
                'name' => 'KABUPATEN KOLAKA',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            426 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7405',
                'meta' => '{"lat":"-4.2027915","long":"122.4467238"}',
                'name' => 'KABUPATEN KONAWE SELATAN',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            427 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7406',
                'meta' => '{"lat":"-4.6543462","long":"121.9017954"}',
                'name' => 'KABUPATEN BOMBANA',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            428 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7407',
                'meta' => '{"lat":"-5.6326806","long":"123.8902463"}',
                'name' => 'KABUPATEN WAKATOBI',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            429 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7408',
                'meta' => '{"lat":"-3.1347227","long":"121.1710389"}',
                'name' => 'KABUPATEN KOLAKA UTARA',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            430 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7409',
                'meta' => '{"lat":"-4.7023424","long":"123.0338767"}',
                'name' => 'KABUPATEN BUTON UTARA',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            431 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7410',
                'meta' => '{"lat":"-3.3803291","long":"122.0837445"}',
                'name' => 'KABUPATEN KONAWE UTARA',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            432 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7411',
                'meta' => '{"lat":"-4.2279225","long":"121.9017954"}',
                'name' => 'KABUPATEN KOLAKA TIMUR',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            433 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7412',
                'meta' => '{"lat":"-4.1361465","long":"123.1239049"}',
                'name' => 'KABUPATEN KONAWE KEPULAUAN',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            434 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7413',
                'meta' => '{"lat":"-4.901629","long":"122.6277455"}',
                'name' => 'KABUPATEN MUNA BARAT',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            435 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7414',
                'meta' => '{"lat":"-5.2891405","long":"122.424074"}',
                'name' => 'KABUPATEN BUTON TENGAH',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            436 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7415',
                'meta' => '{"lat":"-5.3096355","long":"122.9888319"}',
                'name' => 'KABUPATEN BUTON SELATAN',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            437 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7471',
                'meta' => '{"lat":"-3.9984597","long":"122.5129742"}',
                'name' => 'KOTA KENDARI',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            438 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7472',
                'meta' => '{"lat":"-5.507078","long":"122.596901"}',
                'name' => 'KOTA BAUBAU',
                'province_id' => '74',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            439 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7501',
                'meta' => '{"lat":"0.7013419","long":"122.2653887"}',
                'name' => 'KABUPATEN BOALEMO',
                'province_id' => '75',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            440 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7502',
                'meta' => '{"lat":"0.5692733","long":"122.8084496"}',
                'name' => 'KABUPATEN GORONTALO',
                'province_id' => '75',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            441 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7503',
                'meta' => '{"lat":"0.7055278","long":"121.7195459"}',
                'name' => 'KABUPATEN POHUWATO',
                'province_id' => '75',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            442 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7504',
                'meta' => '{"lat":"0.5657885","long":"123.3486147"}',
                'name' => 'KABUPATEN BONE BOLANGO',
                'province_id' => '75',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            443 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7505',
                'meta' => '{"lat":"0.9252647","long":"122.4920088"}',
                'name' => 'KABUPATEN GORONTALO UTARA',
                'province_id' => '75',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            444 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7571',
                'meta' => '{"lat":"0.5435442","long":"123.0567693"}',
                'name' => 'KOTA GORONTALO',
                'province_id' => '75',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            445 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7601',
                'meta' => '{"lat":"-3.0297251","long":"118.9062794"}',
                'name' => 'KABUPATEN MAJENE',
                'province_id' => '76',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            446 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7602',
                'meta' => '{"lat":"-3.3419323","long":"119.1390642"}',
                'name' => 'KABUPATEN POLEWALI MANDAR',
                'province_id' => '76',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            447 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7603',
                'meta' => '{"lat":"-2.9118209","long":"119.3250347"}',
                'name' => 'KABUPATEN MAMASA',
                'province_id' => '76',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            448 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7604',
                'meta' => '{"lat":"-2.4920057","long":"119.3250347"}',
                'name' => 'KABUPATEN MAMUJU',
                'province_id' => '76',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            449 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7605',
                'meta' => '{"lat":"-1.5264542","long":"119.5107708"}',
                'name' => 'KABUPATEN MAMUJU UTARA',
                'province_id' => '76',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            450 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '7606',
                'meta' => '{"lat":"-1.9354109","long":"119.5107708"}',
                'name' => 'KABUPATEN MAMUJU TENGAH',
                'province_id' => '76',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            451 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8101',
                'meta' => '{"lat":"-7.5322642","long":"131.3611121"}',
                'name' => 'KABUPATEN MALUKU TENGGARA BARAT',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            452 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8102',
                'meta' => '{"lat":"-5.7512455","long":"132.7271587"}',
                'name' => 'KABUPATEN MALUKU TENGGARA',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            453 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8103',
                'meta' => '{"lat":"-3.0166501","long":"129.4864411"}',
                'name' => 'KABUPATEN MALUKU TENGAH',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            454 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8104',
                'meta' => '{"lat":"-3.3307379","long":"126.6957216"}',
                'name' => 'KABUPATEN BURU',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            455 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8105',
                'meta' => '{"lat":"-6.2067294","long":"134.4718394"}',
                'name' => 'KABUPATEN KEPULAUAN ARU',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            456 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8106',
                'meta' => '{"lat":"-3.1271575","long":"128.4008357"}',
                'name' => 'KABUPATEN SERAM BAGIAN BARAT',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            457 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8107',
                'meta' => '{"lat":"-3.4233267","long":"130.2271243"}',
                'name' => 'KABUPATEN SERAM BAGIAN TIMUR',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            458 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8108',
                'meta' => '{"lat":"-7.7851588","long":"126.3498097"}',
                'name' => 'KABUPATEN MALUKU BARAT DAYA',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            459 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8109',
                'meta' => '{"lat":"-3.7273972","long":"126.6957216"}',
                'name' => 'KABUPATEN BURU SELATAN',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            460 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8171',
                'meta' => '{"lat":"-3.6386665","long":"128.1688559"}',
                'name' => 'KOTA AMBON',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            461 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8172',
                'meta' => '{"lat":"-5.626563","long":"132.7520867"}',
                'name' => 'KOTA TUAL',
                'province_id' => '81',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            462 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8201',
                'meta' => '{"lat":"1.3589663","long":"127.5960704"}',
                'name' => 'KABUPATEN HALMAHERA BARAT',
                'province_id' => '82',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            463 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8202',
                'meta' => '{"lat":"0.4419543","long":"128.3587174"}',
                'name' => 'KABUPATEN HALMAHERA TENGAH',
                'province_id' => '82',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            464 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8203',
                'meta' => '{"lat":"-1.8321222","long":"125.958777"}',
                'name' => 'KABUPATEN KEPULAUAN SULA',
                'province_id' => '82',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            465 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8204',
                'meta' => '{"lat":"-1.5109015","long":"127.7237678"}',
                'name' => 'KABUPATEN HALMAHERA SELATAN',
                'province_id' => '82',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            466 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8205',
                'meta' => '{"lat":"1.5074308","long":"127.8936663"}',
                'name' => 'KABUPATEN HALMAHERA UTARA',
                'province_id' => '82',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            467 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8206',
                'meta' => '{"lat":"1.3121235","long":"128.4849923"}',
                'name' => 'KABUPATEN HALMAHERA TIMUR',
                'province_id' => '82',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            468 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8207',
                'meta' => '{"lat":"2.3656672","long":"128.4008357"}',
                'name' => 'KABUPATEN PULAU MOROTAI',
                'province_id' => '82',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            469 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8208',
                'meta' => '{"lat":"-1.8268344","long":"124.7740793"}',
                'name' => 'KABUPATEN PULAU TALIABU',
                'province_id' => '82',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            470 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8271',
                'meta' => '{"lat":"0.7957999","long":"127.3613533"}',
                'name' => 'KOTA TERNATE',
                'province_id' => '82',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            471 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '8272',
                'meta' => '{"lat":"0.6740044","long":"127.4040871"}',
                'name' => 'KOTA TIDORE KEPULAUAN',
                'province_id' => '82',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            472 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9101',
                'meta' => '{"lat":"-3.097706","long":"133.0194897"}',
                'name' => 'KABUPATEN FAKFAK',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            473 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9102',
                'meta' => '{"lat":"-3.288406","long":"133.9436788"}',
                'name' => 'KABUPATEN KAIMANA',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            474 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9103',
                'meta' => '{"lat":"-2.8551699","long":"134.3236557"}',
                'name' => 'KABUPATEN TELUK WONDAMA',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            475 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9104',
                'meta' => '{"lat":"-1.9056848","long":"133.329466"}',
                'name' => 'KABUPATEN TELUK BINTUNI',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            476 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9105',
                'meta' => '{"lat":"-0.8614531","long":"134.0620421"}',
                'name' => 'KABUPATEN MANOKWARI',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            477 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9106',
                'meta' => '{"lat":"-1.7657744","long":"132.1572702"}',
                'name' => 'KABUPATEN SORONG SELATAN',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            478 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9107',
                'meta' => '{"lat":"-1.1223204","long":"131.4883373"}',
                'name' => 'KABUPATEN SORONG',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            479 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9108',
                'meta' => '{"lat":"-1.0915151","long":"130.8778586"}',
                'name' => 'KABUPATEN RAJA AMPAT',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            480 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9109',
                'meta' => '{"lat":"-0.781856","long":"132.3938375"}',
                'name' => 'KABUPATEN TAMBRAUW',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            481 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9110',
                'meta' => '{"lat":"-1.2970979","long":"132.3150993"}',
                'name' => 'KABUPATEN MAYBRAT',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            482 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9111',
                'meta' => '{"lat":"-0.9135107","long":"134.0008674"}',
                'name' => 'KABUPATEN MANOKWARI SELATAN',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            483 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9112',
                'meta' => '{"lat":"-1.1554562","long":"133.7142484"}',
                'name' => 'KABUPATEN PEGUNUNGAN ARFAK',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            484 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9171',
                'meta' => '{"lat":"-0.8761629","long":"131.255828"}',
                'name' => 'KOTA SORONG',
                'province_id' => '91',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            485 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9401',
                'meta' => '{"lat":"-7.7838334","long":"139.041312"}',
                'name' => 'KABUPATEN MERAUKE',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            486 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9402',
                'meta' => '{"lat":"-4.0004481","long":"138.7995122"}',
                'name' => 'KABUPATEN JAYAWIJAYA',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            487 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9403',
                'meta' => '{"lat":"-2.987923","long":"139.8547266"}',
                'name' => 'KABUPATEN JAYAPURA',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            488 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9404',
                'meta' => '{"lat":"-3.5095462","long":"135.7520985"}',
                'name' => 'KABUPATEN NABIRE',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            489 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9408',
                'meta' => '{"lat":"-1.7469359","long":"136.1709012"}',
                'name' => 'KABUPATEN KEPULAUAN YAPEN',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            490 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9409',
                'meta' => '{"lat":"-1.0381022","long":"135.9800848"}',
                'name' => 'KABUPATEN BIAK NUMFOR',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            491 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9410',
                'meta' => '{"lat":"-3.7876441","long":"136.3624686"}',
                'name' => 'KABUPATEN PANIAI',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            492 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9411',
                'meta' => '{"lat":"-3.4467891","long":"137.8427298"}',
                'name' => 'KABUPATEN PUNCAK JAYA',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            493 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9412',
                'meta' => '{"lat":"-4.4553223","long":"137.1362125"}',
                'name' => 'KABUPATEN MIMIKA',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            494 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9413',
                'meta' => '{"lat":"-5.7400018","long":"140.3481835"}',
                'name' => 'KABUPATEN BOVEN DIGOEL',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            495 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9414',
                'meta' => '{"lat":"-6.7606468","long":"139.6911374"}',
                'name' => 'KABUPATEN MAPPI',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            496 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9415',
                'meta' => '{"lat":"-5.0573958","long":"138.3988186"}',
                'name' => 'KABUPATEN ASMAT',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            497 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9416',
                'meta' => '{"lat":"-4.4939717","long":"139.5279996"}',
                'name' => 'KABUPATEN YAHUKIMO',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            498 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9417',
                'meta' => '{"lat":"-4.5589872","long":"140.5135589"}',
                'name' => 'KABUPATEN PEGUNUNGAN BINTANG',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            499 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9418',
                'meta' => '{"lat":"-3.481132","long":"138.4787258"}',
                'name' => 'KABUPATEN TOLIKARA',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
        ));
        \DB::table('indonesia_cities')->insert(array (
            0 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9419',
                'meta' => '{"lat":"-2.4678144","long":"139.2030851"}',
                'name' => 'KABUPATEN SARMI',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            1 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9420',
                'meta' => '{"lat":"-3.3449536","long":"140.7624493"}',
                'name' => 'KABUPATEN KEEROM',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            2 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9426',
                'meta' => '{"lat":"-2.8435717","long":"136.670534"}',
                'name' => 'KABUPATEN WAROPEN',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            3 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9427',
                'meta' => '{"lat":"-0.7295099","long":"135.6385125"}',
                'name' => 'KABUPATEN SUPIORI',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            4 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9428',
                'meta' => '{"lat":"-2.5331255","long":"137.7637565"}',
                'name' => 'KABUPATEN MAMBERAMO RAYA',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            5 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9429',
                'meta' => '{"lat":"-4.4069496","long":"138.2393528"}',
                'name' => 'KABUPATEN NDUGA',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            6 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9430',
                'meta' => '{"lat":"-3.971033","long":"138.3190276"}',
                'name' => 'KABUPATEN LANNY JAYA',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            7 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9431',
                'meta' => '{"lat":"-2.3745692","long":"138.3190276"}',
                'name' => 'KABUPATEN MAMBERAMO TENGAH',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            8 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9432',
                'meta' => '{"lat":"-3.7852847","long":"139.4466005"}',
                'name' => 'KABUPATEN YALIMO',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            9 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9433',
                'meta' => '{"lat":"-3.8649098","long":"137.6061625"}',
                'name' => 'KABUPATEN PUNCAK',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            10 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9434',
                'meta' => '{"lat":"-4.0454139","long":"135.6763443"}',
                'name' => 'KABUPATEN DOGIYAI',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            11 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9435',
                'meta' => '{"lat":"-3.5076422","long":"136.7478493"}',
                'name' => 'KABUPATEN INTAN JAYA',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            12 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9436',
                'meta' => '{"lat":"-4.0974893","long":"136.4393054"}',
                'name' => 'KABUPATEN DEIYAI',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
            13 => 
            array (
                'created_at' => '2023-08-14 01:24:10',
                'id' => '9471',
                'meta' => '{"lat":"-2.5916025","long":"140.6689995"}',
                'name' => 'KOTA JAYAPURA',
                'province_id' => '94',
                'updated_at' => '2023-08-14 01:24:10',
            ),
        ));
        
        
    }
}