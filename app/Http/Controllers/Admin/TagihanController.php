<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MassDestroyUsageRequest;
use App\Models\KategoriPelanggan;
use App\Models\Pelanggan;
use App\Models\Penggunaan;
use Carbon\Carbon;
use App\Models\Tagihan;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

/**
 * Resource Controller untuk model Usage
 */

class TagihanController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tagihan = DB::table('tagihans')
        ->select('tagihans.id','pelanggans.nama_pelanggan','penggunaans.bulan','penggunaans.tahun','tagihans.jumlah_penggunaan', 'tagihans.jumlah_bayar', 'tagihans.status')
        ->join('penggunaans', 'penggunaans.id', '=', 'tagihans.id_penggunaan')
        ->join('pelanggans', 'pelanggans.id', '=', 'penggunaans.id_pelanggan')
        ->get();
        return view("pages.admin.bill.index", compact('tagihan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $customers = Pelanggan::get();
        return view("pages.admin.usage.create", compact("customers"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\UsageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penggunaan = DB::table('penggunaans')->insertGetId([
            'id_pelanggan' => $request->input('id_pelanggan'),
            'bulan' => $request->input('bulan'),
            'tahun' => $request->input('tahun'),
            'meter_awal' => $request->input('meter_awal'),
            'meter_akhir' => $request->input('meter_akhir'),
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        $jml_penggunaan = $request->input('meter_akhir') - $request->input('meter_awal');
        $beban_tetap = 10000;

        $rt1_10 = 3500;
        $rt1_20 = 5300;
        $rt1_30 = 7000;
        $rt1_40 = 10500;

        $rt2_10 = 4400;
        $rt2_20 = 6100;
        $rt2_30 = 7900;
        $rt2_40 = 11400;

        $rt3_10 = 5300;
        $rt3_20 = 7000;
        $rt3_30 = 8800;
        $rt3_40 = 12300;

        $sk_10 = 2800;
        $sk_20 = 3500;
        $sk_30 = 5300;
        $sk_40 = 7000;

        $id_pelanggan = Penggunaan::where('id_pelanggan', $request->input('id_pelanggan'))->first();
        $id_kategori = Pelanggan::where('id', $id_pelanggan->id_pelanggan)->first();
        $kategori = KategoriPelanggan::where('id', $id_kategori->id_kategori)->first();

        if($kategori->id == 6){
            if($jml_penggunaan <= 10){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt2_10*10)+$beban_tetap;
                $tagihan->save();
                }
            elseif($jml_penggunaan > 10 and $jml_penggunaan <=20){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt2_10*10) + (($jml_penggunaan-10)*$rt2_20) + $beban_tetap;
                $tagihan->save();
                }  
            elseif($jml_penggunaan > 20 and $jml_penggunaan <=30){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt2_10*10) + ($rt2_20*10) + (($jml_penggunaan-20)*$rt2_30) + $beban_tetap;
                $tagihan->save();
                }
            else{
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt2_10*10) + ($rt2_20*10) + ($rt2_30*10) + (($jml_penggunaan-30)*$rt2_40) + $beban_tetap;
                $tagihan->save();
            }

        }elseif($kategori->id == 5){
            if($jml_penggunaan <= 10){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt1_10*10)+$beban_tetap;
                $tagihan->save();
                }
            elseif($jml_penggunaan > 10 and $jml_penggunaan <=20){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt1_10*10) + (($jml_penggunaan-10)*$rt1_20) + $beban_tetap;
                $tagihan->save();
                }  
            elseif($jml_penggunaan > 20 and $jml_penggunaan <=30){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt1_10*10) + ($rt1_20*10) + (($jml_penggunaan-20)*$rt1_30) + $beban_tetap;
                $tagihan->save();
                }
            else{
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt1_10*10) + ($rt1_20*10) + ($rt1_30*10) + (($jml_penggunaan-30)*$rt1_40) + $beban_tetap;
                $tagihan->save();
            }

        }elseif($kategori->id == 7){
            if($jml_penggunaan <= 10){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt3_10*10)+$beban_tetap;
                $tagihan->save();
                }
            elseif($jml_penggunaan > 10 and $jml_penggunaan <=20){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt3_10*10) + (($jml_penggunaan-10)*$rt3_20) + $beban_tetap;
                $tagihan->save();
                }  
            elseif($jml_penggunaan > 20 and $jml_penggunaan <=30){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt3_10*10) + ($rt3_20*10) + (($jml_penggunaan-20)*$rt3_30) + $beban_tetap;
                $tagihan->save();
                }
            else{
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($rt3_10*10) + ($rt3_20*10) + ($rt3_30*10) + (($jml_penggunaan-30)*$rt3_40) + $beban_tetap;
                $tagihan->save();
            }    
        }else{
            if($jml_penggunaan <= 10){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($sk_10*10)+$beban_tetap;
                $tagihan->save();
                }
            elseif($jml_penggunaan > 10 and $jml_penggunaan <=20){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($sk_10*10) + (($jml_penggunaan-10)*$sk_20) + $beban_tetap;
                $tagihan->save();
                }  
            elseif($jml_penggunaan > 20 and $jml_penggunaan <=30){
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($sk_10*10) + ($sk_20*10) + (($jml_penggunaan-20)*$sk_30) + $beban_tetap;
                $tagihan->save();
                }
            else{
                $tagihan = new Tagihan();
                $tagihan->id_penggunaan = $penggunaan;
                $tagihan->jumlah_penggunaan = $jml_penggunaan;
                $tagihan->jumlah_bayar = ($sk_10*10) + ($sk_20*10) + ($sk_30*10) + (($jml_penggunaan-30)*$sk_40) + $beban_tetap;
                $tagihan->save();
            }
        }
        return redirect()->route("penggunaan.index")->withSuccess("Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    public function show(Usage $usage)
    {
        abort_if(Gate::denies("usage_show"), Response::HTTP_FORBIDDEN, "Forbidden");
        return view("pages.admin.electricity-usage.show", compact("usage"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    public function edit(Usage $usage)
    {
        abort_if(Gate::denies("usage_edit"), Response::HTTP_FORBIDDEN, "Forbidden");
        $customers = PlnCustomer::get();
        return view("pages.admin.electricity-usage.edit", compact("usage", "customers"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\UsageRequest  $request
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    public function update(UsageRequest $request, Usage $usage)
    {
        abort_if(Gate::denies("usage_update"), Response::HTTP_FORBIDDEN, "Forbidden");
        $usage->update($request->all());
        return redirect()->route("admin.usages.index")->withSuccess("Data penggunaan berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usage  $usage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usage $usage)
    {
        abort_if(Gate::denies("usage_delete"), Response::HTTP_FORBIDDEN, "Forbidden");

        /**
         * jika penggunaan ini memiliki relasi dengan tagihan,
         * maka soft deletes.
         */
        if($usage->bill_count > 0 && $usage->bill->status == "LUNAS"){
            alert('Data tidak dapat dihapus', 'Penggunaan memiliki relasi dengan tagihan yang telah terbayar', 'error');
            return redirect()->back();
        }
        $usage->bill->delete();
        $usage->delete();
        return redirect()->route('admin.usages.index')->withSuccess('Data penggunaan berhasil dihapus!');
    }

    public function massDestroy(MassDestroyUsageRequest $request)
    {
        abort_if(Gate::denies("usage_delete"), Response::HTTP_FORBIDDEN, "Forbidden");
        $usages = Usage::whereIn('id', request('ids'))->get();
        foreach ($usages as $usage) {
            if($usage->bill_count > 0 && $usage->bill->status == "LUNAS"){
                alert()->error('Data tidak dapat dihapus', 'Penggunaan memiliki relasi dengan tagihan yang telah terbayar');
                return;
            }
            
            $usage->bill->delete();
            $usage->delete();
        }

        return redirect()->back()->withSuccess('Data usage(s) berhasil dihapus!');
    }

    function getPayment($usage){

    }
}
