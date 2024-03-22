@extends('layouts.app')

@section('title', 'Pelaporan')

@section('content')
<div class="container">
    <h3 class="mb-4">Buat Laporan</h3>
    <div class="card">
      <div class="card-body">
      <form action="{{ route('pelaporans.store') }}" method="POST">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNama">Nama Pelanggan <span class="text-danger">*</span></label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="inputNama" value="{{ old('nama') }}" placeholder="Masukkan nama">

            @error('nama_pelanggan')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputNoMeter">No. Meter / ID Pelanggan <span class="text-danger">*</span></label>
            <input type="text" name="nomor_meter" class="form-control @error('nomor_meter') is-invalid @enderror" id="inputNoMeter" value="{{ old('nomor_meter') }}" placeholder="Contoh: 537320018426">

            @error('nomor_meter')
              <span class="invalid-feedback">{{$message}}</span>   
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="inputAlamat">Alamat</label>
          <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" placeholder="Masukkan alamat">{{ old('alamat') }}</textarea>

          @error('alamat')
            <span class="invalid-feedback">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="inputKeluhan">Keluhan</label>
          <textarea name="keluhan" class="form-control @error('keluhan') is-invalid @enderror" id="inputKeluhan" placeholder="Masukan keluhan">{{ old('keluhan') }}</textarea>

          @error('keluhan')
            <span class="invalid-feedback">{{$message}}</span>
          @enderror
        </div>
        
        <a href="{{ route('home') }}" class="btn btn-danger">Batal</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
@endsection


