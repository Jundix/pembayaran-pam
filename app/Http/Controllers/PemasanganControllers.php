<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasangan;
use App\Models\Pemasangan1;
use App\Models\PlnCustomer;

class PemasanganControllers extends Controller
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
        

        $this->validate($request,[
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'gambar' => 'required|image|file|max:3072'
        ]);
        

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
            'gambar' => $nama1
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
    public function hapuspemasangan(Request $request, $id)
    {
        $pemasang = Pemasangan::where('id', $request->id)
                  ->delete();
    
        return redirect()->route('pemasangans.index')->withSuccess("Data berhasil Dikonfirmasi!");
    }

    public function pelanggan(Request $request)
    {
        $customer = new PlnCustomer();
        $customer->nama_pelanggan = $request->input('nama_pelanggan');
        
        $customer->alamat = $request->input('alamat');
        $customer->id_tarif = 1;
        $customer->status = '1';
        do {
            $number = random_int(100000000000, 999999999999);
        } while (PlnCustomer::where("nomor_meter", "=", $number)->first());
        $customer->nomor_meter = $number;
        $customer->save();

        Pemasangan::where('id', $request->input('id'))->delete();

        return redirect()->route("admin.pln-customers.index")->withSuccess("Pengajuan pemasangan berhasil!");
    }


}
