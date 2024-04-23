<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Models\Pemasangan;
use Illuminate\Routing\Controller as BaseController;
Use Validator;

class PemasanganController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasang = Pemasangan::all();

        return view('pages.admin.pemasanganadmin')->with('pemasang', $pemasang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'kategori' => 'required',
            'gambar' => 'required|image|file|max:3072'
        ];

        $validator = Validator::make($request->all(), $rules);

        $nama1 = null;

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $nama1 = time()."_".$file->getClientOriginalName();
            $folder = 'post-ktp';
            $file->move($folder, $nama1);
        }

        Pemasangan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gambar' => $nama1,
            'id_kategori' => $request->kategori
        ]);
        return redirect('/')->withSuccess("Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pemasang = Pemasangan::where('id',$request->id)->delete();

        return response()->json(['success' => true]);
    }
    public function hapuspemasangan($id)
    {
        $pemasang = Pemasangan::where('id', $id)
                  ->delete();

        return redirect()->route('admin_pemasangan')->withSuccess("Pemasangan berhasil Ditolak!");
    }

    public function pelanggan(Request $request)
    {
        $customer = new Pelanggan();
        $customer->nama_pelanggan = $request->input('nama_pelanggan');

        $customer->alamat = $request->input('alamat');
        $customer->id_kategori = $request->input('kategori');
        $customer->status = '1';
        do {
            $number = random_int(100000000000, 999999999999);
        } while (Pelanggan::where("nomor_meter", "=", $number)->first());
        $customer->nomor_meter = $number;
        $customer->save();

        Pemasangan::where('id', $request->input('id'))->delete();

        return redirect()->route("admin_pemasangan")->withSuccess("Pengajuan pemasangan berhasil!");
    }


}
