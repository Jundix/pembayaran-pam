@extends('layouts.admin')

@section('title', 'Pelanggan PAMSIMAS')

@section('content')
<div class="container-fluid mb-3">
  <div class="d-flex justify-content-between mb-4">
    <h3>Pelanggan PAMSIMAS</h3>
  </div>
  <div class="card">
    <div class="card-body">
      <table class="table table-striped table-bordered w-100" id="example">
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor Meter</th>
            <th>Alamat</th>
            <th>Kategori</th>
            <th>Action</th>
          
        @foreach ($customers as $item)
        <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nama_pelanggan}}</td>
        <td>{{$item->nomor_meter}}</td>
        <td>{{$item->alamat}}</td>
        <td>{{$item->kategori}}</td>
        <td><a href="/admin/pelanggan/delete-pelanggan/{{$item->id}}" class="btn btn-danger btn-sm">Hapus</a></td>
        </tr>
            @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
