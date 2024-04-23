<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Models\Penggunaan;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Session;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $snapToken=null;
        $id_pembayaran=null;
        $tagihan = DB::table('tagihans')
        ->select('tagihans.id','pelanggans.nama_pelanggan','penggunaans.bulan','penggunaans.tahun','tagihans.jumlah_penggunaan', 'tagihans.jumlah_bayar', 'tagihans.status')
        ->join('penggunaans', 'penggunaans.id', '=', 'tagihans.id_penggunaan')
        ->join('pelanggans', 'pelanggans.id', '=', 'penggunaans.id_pelanggan')
        ->join('users', 'users.nama', '=', 'pelanggans.nama_pelanggan')
        ->where('users.id',Session::get('id'))
        ->where('tagihans.status','0')
        ->get();

        $payment = DB::table('tagihans')
        ->select('tagihans.id','pelanggans.nama_pelanggan','penggunaans.bulan','penggunaans.tahun','tagihans.jumlah_penggunaan', 'tagihans.jumlah_bayar', 'tagihans.status')
        ->join('penggunaans', 'penggunaans.id', '=', 'tagihans.id_penggunaan')
        ->join('pelanggans', 'pelanggans.id', '=', 'penggunaans.id_pelanggan')
        ->join('users', 'users.nama', '=', 'pelanggans.nama_pelanggan')
        ->where('users.id',Session::get('id'))
        ->where('tagihans.status','0')
        ->get()->first();

        if($payment){
            $id_pembayaran = $payment->id;
                
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = config('midtrans.is_production');
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $payment->id,
                    'gross_amount' => $payment->jumlah_bayar,
                ),
                'customer_details' => array(
                    'first_name' => $payment->nama_pelanggan,
                    'last_name' => ''
                    // 'email' => 'budi.pra@example.com',
                    // 'phone' => '08111222333',
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
                    // dd($snapToken);

    }
        return view('pages.pelanggan.index', compact('tagihan', 'snapToken', 'id_pembayaran'));
    }

    public function Pemasangan()
    {
        $users = DB::table('users')->where('id', Session::get('id'))->get();
        $kategori = DB::table('kategori_pelanggan')->get();
        return view('pages.pelanggan.pemasangan', compact('users', 'kategori'));
    }
    public function Pemutusan()
    {
        $users = DB::table('users')
        ->join('pelanggans','users.nama', '=', 'pelanggans.nama_pelanggan')
        ->where('users.id', Session::get('id'))->get();
        return view('pages.pelanggan.pemutusan', compact('users'));
    }

    public function aboutUs()
    {
        return view('pages.pelanggan.about-us');
    }

    public function invoice($id)
    {
        Tagihan::where('id',$id)->update([
            'status' => '1',
        ]);
        $invoice = DB::table('tagihans')
        ->select('tagihans.id','users.nama','pelanggans.nomor_meter','penggunaans.tahun','tagihans.jumlah_penggunaan', 'tagihans.jumlah_bayar', 'tagihans.status', \DB::raw('SUBSTRING(tagihans.updated_at, 9, 2) as tanggal'), \DB::raw('SUBSTRING(tagihans.updated_at, 12, 5) as jam'),
        \DB::raw('case when
         penggunaans.bulan = "1" then "Januari"
         when penggunaans.bulan = "2" then "Februari"
         when penggunaans.bulan = "3" then "Maret"
         when penggunaans.bulan = "4" then "April"
         when penggunaans.bulan = "5" then "Mei"
         when penggunaans.bulan = "6" then "Juni"
         when penggunaans.bulan = "7" then "Juli"
         when penggunaans.bulan = "8" then "Agustus"
         when penggunaans.bulan = "9" then "September"
         when penggunaans.bulan = "10" then "Oktober"
         when penggunaans.bulan = "11" then "November"
         when penggunaans.bulan = "12" then "Desember"
         end as bulan'))
        ->join('penggunaans', 'penggunaans.id', '=', 'tagihans.id_penggunaan')
        ->join('pelanggans', 'pelanggans.id', '=', 'penggunaans.id_pelanggan')
        ->join('users', 'users.nama', '=', 'pelanggans.nama_pelanggan')
        ->where('tagihans.id',$id)
        ->get();
        return view('pages.pelanggan.invoice', compact('invoice'));
    }

    public function pembayaran(){
        $pembayaran = DB::table('tagihans')
        ->select('tagihans.id','users.nama','pelanggans.nomor_meter','penggunaans.tahun','tagihans.jumlah_penggunaan', 'tagihans.jumlah_bayar', 'tagihans.status', \DB::raw('SUBSTRING(tagihans.updated_at, 9, 2) as tanggal'), \DB::raw('SUBSTRING(tagihans.updated_at, 12, 5) as jam'),
        DB::raw('case when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."1 ".'then "Januari"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."2 ".'then "Februari"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."3 ".'then "Maret"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."4 ".'then "April"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."5 ".'then "Mei"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."6 ".'then "Juni"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."7 ".'then "Juli"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."8 ".'then "Agustus"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."9 ".'then "September"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."10 ".'then "Oktober"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."11 ".'then "November"'.
        'when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."12 ".'then "Desember"'.
        'end as bulan'))
        ->join('penggunaans', 'penggunaans.id', '=', 'tagihans.id_penggunaan')
        ->join('pelanggans', 'pelanggans.id', '=', 'penggunaans.id_pelanggan')
        ->join('users', 'users.nama', '=', 'pelanggans.nama_pelanggan')
        ->where('users.id',Session::get('id'))
        ->where('tagihans.status','1')
        ->orderBy('tagihans.updated_at')
        ->get();
        return view('pages.pelanggan.pembayaran', compact('pembayaran'));
    }


}