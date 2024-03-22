<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Konfigurasi Midtrans
    |--------------------------------------------------------------------------
    |
    | Konfigurasi ini dipakai setiap kali ingin berinteraksi dengan Midtrans
    */

    // 'serverKey' => env('SB-Mid-server-EVpH_mRLq06mKaNa5ObqgNRw', null),
    // 'isProduction' => env('MIDTRANS_IS_PRODUCTION', false),
    // 'isSanitized' => env('MIDTRANS_IS_SANITIZED', true),
    // 'is3ds' => env('MIDTRANS_IS_3DS', true),


    'merchant_id' => env('MIDTRANS_MERCHANT_ID'),
    'client_key' => env('MIDTRANS_CLIENT_KEY'),
    'server_key' => env('MIDTRANS_SERVER_KEY'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION'),
    'snap_url' => env('MIDTRANS_SNAP_URL'),
];
