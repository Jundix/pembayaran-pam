<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlnCustomerRequest;
use App\Http\Requests\Admin\MassDestroyPlnCustomerRequest;
use App\Models\Pelanggan;
use App\Models\PlnCustomer;
use App\Models\Tariff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class PelangganController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customers = DB::table('pelanggans')
        ->select('pelanggans.*', 'kategori_pelanggan.kategori')
        ->join('kategori_pelanggan', 'kategori_pelanggan.id', '=', 'pelanggans.id_kategori')
        ->where('pelanggans.status', '1')
        ->get();
        return view("pages.admin.pelanggan.index", compact('customers'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies("pln_customer_create"), Response::HTTP_FORBIDDEN, "Forbidden");
        $tariffs = Tariff::get();
        return view("pages.admin.pln-customer.create", compact("tariffs"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\PlnCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlnCustomerRequest $request)
    {
        $customer = new PlnCustomer();
        $customer->nama_pelanggan = $request->input('nama_pelanggan');
        
        $customer->alamat = $request->input('alamat');
        $customer->id_kategori = 1;
        do {
            $number = random_int(100000000000, 999999999999);
        } while (PlnCustomer::where("nomor_meter", "=", $number)->first());
        $customer->nomor_meter = $number;
        $customer->save();

        return redirect()->route("admin.pln-customers.index")->withSuccess("Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlnCustomer  $plnCustomer
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $customer = DB::table('pln_customers')->where('status','1')->get();
        return view("pages.admin.pln-customer.show", compact("customer"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\PlnCustomer  $plnCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(PlnCustomer $plnCustomer)
    {
        abort_if(Gate::denies("pln_customer_edit"), Response::HTTP_FORBIDDEN, "Forbidden");
        $tariffs = Tariff::get();
        return view("pages.admin.pln-customer.edit", compact("plnCustomer", "tariffs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\PlnCustomerRequest  $request
     * @param  \App\Models\PlnCustomer  $plnCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlnCustomer $plnCustomer)
    {
        $this->validate($request,[
            'nomor_meter' => 'max:12'
        ]);
        
        abort_if(Gate::denies("pln_customer_update"), Response::HTTP_FORBIDDEN, "Forbidden");
        $plnCustomer->update($request->all());
        return redirect()->route('admin.pln-customers.index')->withSuccess("Data Pelanggan Berhasil Diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlnCustomer  $plnCustomer
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Pelanggan::where('id', $id)
                  ->delete();
        return back()->withSuccess("Pelanggan Berhasil Dihapus!");
    }

    public function massDestroy(MassDestroyPlnCustomerRequest $request)
    {
        abort_if(Gate::denies("pln_customer_delete"), Response::HTTP_FORBIDDEN, "Forbidden");
        $customers = PlnCustomer::whereIn('id', request('ids'))->get();
        foreach($customers as $customer){
            if($customer->usages()->count() > 0){
                alert()->error("Pelanggan tidak bisa dihapus, karena mempunyai relasi dengan data penggunaan");
                return back();
            }
            $customer->delete();
        }

        return redirect()->route('admin.pln-customers.index')->withSuccess('Data pelanggan PLN berhasil dihapus!');
    }

    public function nomor_meter()
    {
    do {
        $number = random_int(1000000000, 9999999999);
    } while (PlnCustomer::where("nomor_meter", "=", $number)->first());

    return $number;
}
}
