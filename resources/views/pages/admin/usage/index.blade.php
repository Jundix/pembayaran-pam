@extends('layouts.admin')

@section('title', 'Penggunaan')

@section('content')
<div class="container-fluid mb-3">
  <!-- <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Fitur Penggunaan Air:</strong>
    <ol>
      <li>Meter awal <strong>otomatis mengambil dari meter terakhir pelanggan</strong></li>
      <li>Admin <strong>tidak bisa</strong> memasukkan data penggunaan pelanggan tertentu di bulan dan tahun yang sama <strong>2 kali</strong></li>
    </ol>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div> -->
  <div class="row mb-4">
    <h3 class="col-md-9 col-lg-10">Penggunaan Air</h3>
    <div class="col-md-3 col-lg-2 text-right">
      <a href="{{ route('penggunaan.create') }}" class="btn btn-primary-custom">
        <i class="fas fa-plus"></i>
        Tambah
      </a>
    </div>
  </div>
  <div class="card">
    <div class="card-body table-responsive">
      <table class="table table-striped table-bordered w-100" id="usages">
        <thead>
          <tr>
            <th>No</th>
            <th>Nomor Meter</th>
            <th>Nama Pelanggan</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Meter Awal</th>
            <th>Meter Akhir</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($penggunaan as $index =>$p)
          <tr>
            <td class="ps-4">
              <p class="text-l font-weight-bold mb-0">{{$index +1}}</p>
            </td>
            <td class="text-center">
              <p class="text-l font-weight-bold mb-0">{{ $p->nomor_meter }}</p>
            </td>
            <td class="text-center">
              <p class="text-l font-weight-bold mb-0">{{ $p->nama_pelanggan }}</p>
            </td>
            <td class="text-center">
              <p class="text-l font-weight-bold mb-0">{{ $p->bulan }}</p>
            </td>
            <td class="text-center">
              <p class="text-l font-weight-bold mb-0">{{ $p->tahun }}</p>
            </td>
            <td class="text-center">
              <p class="text-l font-weight-bold mb-0">{{ $p->meter_awal }}</p>
            </td>
            <td class="text-center">
              <p class="text-l font-weight-bold mb-0">{{ $p->meter_akhir }}</p>
            </td>
            <td class="text-center">
              <a href="/admin/penggunaan/edit-penggunaan/{{$p->id}}" class="btn btn-success btn-sm">Edit</a>
              <a href="/admin/penggunaan/delete-penggunaan/{{$p->id}}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection