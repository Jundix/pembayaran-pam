<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Carbon\Carbon;
use App\Http\Requests\Admin\ReportRequest;
use App\Models\Tagihan;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class LaporanController extends BaseController
{
    public function index()
    {
        return view('pages.admin.reports');
    }

    public function printPaymentReports(Request $request)
    {
        //jika laporannya per tanggal
        if($request->action == 'print_per_date') {
            $rentangTanggal = [
                Carbon::parse($request->print_per_date['tanggal_awal']),
                Carbon::parse($request->print_per_date['tanggal_akhir'])
            ];
            $payments = DB::table('tagihans')
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
                    ->where('tagihans.status','1')
                    ->whereBetween('tagihans.updated_at', $rentangTanggal)
                    ->orderBy('tagihans.updated_at')
                    ->get();
            //Buat laporan pembayaran
            $pdf = PDF::loadView('pages.admin.report-payments', compact('payments', 'request'))->setPaper('a4', 'landscape');
            return $pdf->stream();
        } else if ($request->action == 'today_report') {
            $payments = DB::table('tagihans')
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
                    ->where('tagihans.status','1')
                    ->whereDate('tagihans.updated_at', now())
                    ->orderBy('tagihans.updated_at')
                    ->get();
            //Buat laporan pembayaran
            $pdf = PDF::loadView('pages.admin.report-payments', compact('payments', 'request'))->setPaper('a4', 'landscape');
            return $pdf->stream();
        } else if($request->action == 'this_month_report') {
            $payments = DB::table('tagihans')
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
                    ->where('tagihans.status','1')
                    ->whereMonth('tagihans.updated_at', now()->month)
                    ->orderBy('tagihans.updated_at')
                    ->get();
            //Buat laporan pembayaran
            $pdf = PDF::loadView('pages.admin.report-payments', compact('payments', 'request'))->setPaper('a4', 'landscape');
            return $pdf->stream();
        } else {
            $payments = DB::table('tagihans')
                    ->select('tagihans.id','users.nama','pelanggans.nomor_meter','penggunaans.tahun','tagihans.jumlah_penggunaan', 'tagihans.jumlah_bayar', 'tagihans.status', \DB::raw('SUBSTRING(tagihans.updated_at, 9, 2) as tanggal'), \DB::raw('SUBSTRING(tagihans.updated_at, 12, 5) as jam'),
                    \DB::raw('case when '.('SUBSTRING(tagihans.updated_at, 6, 2) ').'='."1 ".'then "Januari"'.
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
                    ->where('tagihans.status','1')
                    ->whereMonth('tagihans.updated_at', now()->subMonth()->month)
                    ->orderBy('tagihans.updated_at')
                    ->get();
            //Buat laporan pembayaran
            $pdf = PDF::loadView('pages.admin.report-payments', compact('payments', 'request'))->setPaper('a4', 'landscape');
            return $pdf->stream();
        }  
    }
}
