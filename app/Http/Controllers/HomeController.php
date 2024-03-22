<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Jenssegers\Agent\Facades\Agent;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Untuk menampilkan halaman home
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }


    public function index()
    {
        if(Agent::isMobile()){
            return view('pages.pelanggan.index-mobile');
        }
        // print_r(session()->all());
        return view('pages.pelanggan.index');
    }

    /**
     * Untuk menampilkan halaman about us
     *
     */
    public function aboutUs()
    {
        return view('pages.pelanggan.about-us');
    }

    public function profile()
    {
        return view('pages.pelanggan.profile');
    }

    /**
     * Halaman Frequently Ask Question
     */
    public function faq()
    {
        return view('pages.pelanggan.faq');
    }

    /**
     * Halaman How To Pay
     */
    public function howToPay()
    {
        return view('pages.pelanggan.how-to-pay');
    }

    public function Pemasangan()
    {
        $users = DB::table('users')->where('id', Session::get('id'))->get();
        return view('pages.pelanggan.pemasangan', compact('users'));
    }

    public function Pemutusan()
    {
        $users = DB::table('users')
        ->join('pln_customers','users.nama', '=', 'pln_customers.nama_pelanggan')
        ->where('users.id', Session::get('id'))->get();
        return view('pages.pelanggan.pemutusan', compact('users'));
    }

    public function Pelaporan()
    {
        return view('pages.pelanggan.pelaporan');
    }

    public function Pembayaran()
    {
        $pembayaran = DB::table(\DB::raw('(SELECT usages.id, pln_customers.nama_pelanggan, usages.bulan, pln_customers.nomor_meter as id_pelanggan,
        (usages.meter_akhir - usages.meter_awal)*tariffs.tarif_per_kwh as tagihan, 7000 as pemeliharaan
        FROM `usages` inner join pln_customers on usages.id_pelanggan_pln = pln_customers.id INNER JOIN tariffs on pln_customers.id_tarif = tariffs.id) as pembayaran'))
        ->select('id','id_pelanggan', 'nama_pelanggan', \DB::raw('round(tagihan) as tagihan'), 'pemeliharaan', \DB::raw('round(tagihan + (tagihan*0.11)) as total_bayar'),
         \DB::raw('case when
         bulan = "1" then "Januari"
         when bulan = "2" then "Februari"
         when bulan = "3" then "Maret"
         when bulan = "4" then "April"
         when bulan = "5" then "Mei"
         when bulan = "6" then "Juni"
         when bulan = "7" then "Juli"
         when bulan = "8" then "Agustus"
         when bulan = "9" then "September"
         when bulan = "10" then "Oktober"
         when bulan = "11" then "November"
         when bulan = "12" then "Desember"
         end as bulan'))
        ->get();

        return view('pages.pelanggan.pembayaran', compact('pembayaran'));

    }

    public function invoice()
    {

        $invoice = invoice::all();
        return view('pages.pelanggan.invoice', compact('invoice'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' or $request->transaction_status == 'settlement') {
                invoice::create($request->all());
            }
        }
    }

    // public function invoice($id)
    // {
    //     $pembayaran = DB::table('karya')
    //         ->select('')
    //         ->join('')
    //         ->join('')
    //         ->where('')
    //         ->get();
    //     return view('');
    // }

    public function lanjutBayar(Request $request){
        // $data = $request->input('nama')." - ".$request->input('id_pelanggan')." - ".$request->input('total_bayar');
        // print_r($data);

        $nama = $request->input('nama');
        $total = $request->input('total_bayar');
        $orderid = $request->input('id_order');

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => 102, //sementara pake data dummy bukan dari order id
                'gross_amount' => $total,
            ),
            'customer_details' => array(
                'first_name' => $nama,
                'last_name' => ''
                // 'email' => 'budi.pra@example.com',
                // 'phone' => '08111222333',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        return view('pages.pelanggan.lanjut_pembayaran', compact('snapToken'));

    }

}
