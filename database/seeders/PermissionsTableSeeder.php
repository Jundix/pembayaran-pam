<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 1,
                'title' => 'user_management_access',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => 2,
                'title' => 'user_access',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 3,
                'title' => 'user_create',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => 4,
                'title' => 'user_update',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'id' => 5,
                'title' => 'user_delete',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'id' => 6,
                'title' => 'user_edit',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'id' => 7,
                'title' => 'user_show',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'id' => 8,
                'title' => 'usage_access',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'id' => 9,
                'title' => 'usage_create',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'id' => 10,
                'title' => 'usage_update',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'created_at' => NULL,
                'id' => 11,
                'title' => 'usage_delete',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'created_at' => NULL,
                'id' => 12,
                'title' => 'usage_edit',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'created_at' => NULL,
                'id' => 13,
                'title' => 'usage_show',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'created_at' => NULL,
                'id' => 14,
                'title' => 'payment_access',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'created_at' => NULL,
                'id' => 15,
                'title' => 'payment_update',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'created_at' => NULL,
                'id' => 16,
                'title' => 'payment_edit',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'created_at' => NULL,
                'id' => 17,
                'title' => 'payment_show',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'created_at' => NULL,
                'id' => 18,
                'title' => 'bill_access',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'created_at' => NULL,
                'id' => 19,
                'title' => 'pln_customer_access',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'created_at' => NULL,
                'id' => 20,
                'title' => 'pln_customer_create',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'created_at' => NULL,
                'id' => 21,
                'title' => 'pln_customer_update',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'created_at' => NULL,
                'id' => 22,
                'title' => 'pln_customer_delete',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'created_at' => NULL,
                'id' => 23,
                'title' => 'pln_customer_edit',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'created_at' => NULL,
                'id' => 24,
                'title' => 'pln_customer_show',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'created_at' => NULL,
                'id' => 25,
                'title' => 'level_access',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'created_at' => NULL,
                'id' => 26,
                'title' => 'level_create',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'created_at' => NULL,
                'id' => 27,
                'title' => 'level_update',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'created_at' => NULL,
                'id' => 28,
                'title' => 'level_delete',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'created_at' => NULL,
                'id' => 29,
                'title' => 'level_edit',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'created_at' => NULL,
                'id' => 30,
                'title' => 'tariff_access',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'created_at' => NULL,
                'id' => 31,
                'title' => 'tariff_create',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'created_at' => NULL,
                'id' => 32,
                'title' => 'tariff_update',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'created_at' => NULL,
                'id' => 33,
                'title' => 'tariff_delete',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'created_at' => NULL,
                'id' => 34,
                'title' => 'tariff_edit',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'created_at' => NULL,
                'id' => 35,
                'title' => 'permission_access',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'created_at' => NULL,
                'id' => 36,
                'title' => 'permission_create',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'created_at' => NULL,
                'id' => 37,
                'title' => 'permission_update',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'created_at' => NULL,
                'id' => 38,
                'title' => 'permission_delete',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'created_at' => NULL,
                'id' => 39,
                'title' => 'permission_edit',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'created_at' => NULL,
                'id' => 40,
                'title' => 'level_permission_access',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'created_at' => NULL,
                'id' => 41,
                'title' => 'level_permission_create',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'created_at' => NULL,
                'id' => 42,
                'title' => 'level_permission_update',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'created_at' => NULL,
                'id' => 43,
                'title' => 'level_permission_delete',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'created_at' => NULL,
                'id' => 44,
                'title' => 'level_permission_edit',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'created_at' => NULL,
                'id' => 45,
                'title' => 'activity_log_access',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'created_at' => NULL,
                'id' => 46,
                'title' => 'report_create',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'created_at' => NULL,
                'id' => 47,
                'title' => 'transaction_access',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'created_at' => NULL,
                'id' => 48,
                'title' => 'payment_method_access',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'created_at' => NULL,
                'id' => 49,
                'title' => 'payment_method_create',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'created_at' => NULL,
                'id' => 50,
                'title' => 'payment_method_update',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'created_at' => NULL,
                'id' => 51,
                'title' => 'payment_method_delete',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'created_at' => NULL,
                'id' => 52,
                'title' => 'payment_method_edit',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'created_at' => NULL,
                'id' => 53,
                'title' => 'payment_method_show',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'created_at' => NULL,
                'id' => 54,
                'title' => 'tax_access',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'created_at' => NULL,
                'id' => 55,
                'title' => 'tax_type_access',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'created_at' => NULL,
                'id' => 56,
                'title' => 'tax_type_create',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'created_at' => NULL,
                'id' => 57,
                'title' => 'tax_type_update',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'created_at' => NULL,
                'id' => 58,
                'title' => 'tax_type_delete',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'created_at' => NULL,
                'id' => 59,
                'title' => 'tax_type_edit',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'created_at' => NULL,
                'id' => 60,
                'title' => 'tax_rate_access',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'created_at' => NULL,
                'id' => 61,
                'title' => 'tax_rate_create',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'created_at' => NULL,
                'id' => 62,
                'title' => 'tax_rate_update',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'created_at' => NULL,
                'id' => 63,
                'title' => 'tax_rate_delete',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'created_at' => NULL,
                'id' => 64,
                'title' => 'tax_rate_edit',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}