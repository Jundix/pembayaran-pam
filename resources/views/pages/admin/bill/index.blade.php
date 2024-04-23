@extends('layouts.admin')

@section('title', 'Tagihan')

@section('content')
<div class="container-fluid mb-3">
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Fitur Tagihan Air:</strong>
    <ol>
      <li>Data tagihan <strong>otomatis dibuat</strong> apabila Admin sudah memasukkan data penggunaan</li>
      <li>Status tagihan otomatis berubah menjadi <strong>LUNAS</strong> apabila pembayaran sukses</li>
    </ol>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <h3 class="mb-4">Tagihan Air</h3>
  <div class="card">
    <div class="card-body table-responsive">
    <table class="table table-striped table-bordered w-100" id="example">
            <th>ID</th>
            <th>Nama</th>
            <th>Bulan</th>
            <th>Penggunaan</th>
            <th>Jumlah yang Dibayarkan</th>
            <th>Status</th>
          
        @foreach ($tagihan as $item)
        <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nama_pelanggan}}</td>
        <td>{{$item->bulan}} {{$item->tahun}}</td>
        <td>{{$item->jumlah_penggunaan}}</td>
        <td>{{$item->jumlah_bayar}}</td>
        <td>
          @if($item->status == 0)
          Belum Dibayarkan
          @else
          Lunas
          @endif
        </td>
        </tr>
            @endforeach
      </table>
    </div>
  </div>
</div>
@endsection