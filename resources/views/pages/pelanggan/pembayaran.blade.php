@extends('layouts.app')

@section('title', 'Pembayaran')

@section('content')
<div class="container">
    <h3 class="mb-4">Pembayaran</h3>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Pelanggan</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Tagihan</th>
                        <th scope="col">Pemeliharaan</th>
                        <th scope="col">Total Bayar</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($pembayaran as $index => $p)
                        <td>{{$index +1}}</td>
                        <td>{{$p->id_pelanggan}}</td>
                        <td>{{$p->bulan}}</td>
                        <td>Rp. {{$p->tagihan}}</td>
                        <td>Rp. {{$p->pemeliharaan}}</td>
                        <td>Rp. {{$p->total_bayar}}</td>
                        <td>
                            <form action="/pembayaran/continue" method="POST">
                                @csrf
                                <div class="form-row" hidden>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="id_pelanggan" class="form-control @error('nama_pelanggan') is-invalid @enderror" id="inputNama" value="{{$p->id_pelanggan}}" placeholder="Masukkan nama">
                                    </div>
                                </div>
                                <div class="form-row" hidden>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="id_order" class="form-control @error('id_order') is-invalid @enderror" id="inputNama" value="{{$p->id}}" placeholder="Masukkan nama">
                                    </div>
                                </div>
                                <div class="form-row" hidden>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="nama" class="form-control @error('nama_pelanggan') is-invalid @enderror" id="inputNama" value="{{$p->nama_pelanggan}}" placeholder="Masukkan nama">
                                    </div>
                                </div>
                                <div class="form-row" hidden>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="total_bayar" class="form-control @error('total_bayar') is-invalid @enderror" id="inputNama" value="{{$p->total_bayar}}" placeholder="Masukkan nama">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm">Lanjutkan pembayaran</button>
                            </form>
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
