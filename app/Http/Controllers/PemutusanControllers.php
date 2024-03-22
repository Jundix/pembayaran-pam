<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemutusan;
use App\Models\PlnCustomer;

class PemutusanControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemutus = Pemutusan::all();

        return view('pages.admin.pemutusanadmin')->with('pemutus', $pemutus);
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
            'id_pelanggan' => 'required',
            'nama' => 'required',
            'alamat' => 'required'
        ]);


        Pemutusan::create($request->all());
        return redirect('/')->withSuccess("Ajuan Pemutusan Berhasil Dikirimkan!");
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
    public function destroy($id)
    {
        //
    }

    public function pemutusanCustomer(Request $request)
    {
        Pemutusan::where('id', $request->input('id'))->delete();
        PlnCustomer::where('nomor_meter',$request->id_pelanggan)->update([
            'status' => '0',
        ]);
        return redirect('/pemutusans')->withSuccess("Pemutusan telah disetujui!");
    }
}
