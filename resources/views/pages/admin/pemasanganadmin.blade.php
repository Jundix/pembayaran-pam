@extends('layouts.admin')

@section('title', 'Pemasangan')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" />

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
<div class="container-fluid mb-3">
<h3 class="mb-4">Pemasangan</h3>
  <div class="card">
    <div class="card-body">
    <table class="table table-striped table-bordered w-100" id="example">
        <thead>

            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Foto KTP</th>
            <th>Action</th>

        </thead>
        <tbody>
      @foreach ($pemasang as $item)
        <td>{{$item->id}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->alamat}}</td>
        <td><img src="{{ asset('post-ktp/' . $item->gambar) }}" alt="ktp ni bro" style="max-height: 200px; overflow:hiden;"> </td>
        <td>
          <form action="/admin/pemasangan/createpelanggan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row" hidden>
              <div class="form-group col-md-12">
                <label for="inputNama">Nama Pelanggan <span class="text-danger">*</span></label>
                <input type="text" name="id" class="form-control @error('nama') is-invalid @enderror" id="inputNama" value="{{$item->id}}" placeholder="Masukkan nama">
                @error('nama')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="form-row" hidden>
              <div class="form-group col-md-12">
                <label for="inputNama">Nama Pelanggan <span class="text-danger">*</span></label>
                <input type="text" name="nama_pelanggan" class="form-control @error('nama') is-invalid @enderror" id="inputNama" value="{{$item->nama}}" placeholder="Masukkan nama">
                @error('nama')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="form-row" hidden>
              <div class="form-group col-md-12">
                <label for="inputNama">Nama Pelanggan <span class="text-danger">*</span></label>
                <input type="text" name="kategori" class="form-control @error('nama') is-invalid @enderror" id="inputNama" value="{{$item->id_kategori}}" placeholder="Masukkan nama">
                @error('nama')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="form-group" hidden>
              <label for="inputAlamat">Alamat</label>
              <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" placeholder="Masukkan alamat">{{$item->alamat}}</textarea>
              @error('alamat')
              <span class="invalid-feedback">{{$message}}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-success btn-sm">Terima</button>
            <a href="/admin/pemasangan/hapus/{{$item->id}}" onclick="return confirm('Apakah Data Pelanggan Ditolak?');" class="btn btn-danger btn-sm">Tolak</a>
          </form>
        </td>
        @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>
<script>$(document).ready( function () {
    $('#example').DataTable();
} );</script>
@endsection
