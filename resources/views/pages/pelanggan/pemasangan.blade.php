@extends('layouts.app')

@section('title', 'Pemasangan')

@section('content')
    <div class="container">
    <h3 class="mb-4">Pemasangan</h3>
    <div class="card">
      <div class="card-body">
      <form action="{{ route('pemasangans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @foreach($users as $u)
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputNama">Nama Pelanggan <span class="text-danger">*</span></label>
            <input type="text" name="" class="form-control @error('nama') is-invalid @enderror" id="inputNama" value="{{$u->nama}}" placeholder="Masukkan nama" disabled>
            @error('nama')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div> 
        </div>
        <div class="form-group">
          <label for="inputAlamat">Alamat</label>
          <textarea name="" class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" placeholder="Masukkan alamat" disabled>{{ $u->alamat }} </textarea>
          @error('alamat')
            <span class="invalid-feedback">{{$message}}</span>
          @enderror
        </div>
        <div class="form-row" hidden>
          <div class="form-group col-md-12">
            <label for="inputNama">Nama Pelanggan <span class="text-danger">*</span></label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="inputNama" value="{{$u->nama}}" placeholder="Masukkan nama">
            @error('nama')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div> 
        </div>
        <div class="form-group" hidden>
          <label for="inputAlamat">Alamat</label>
          <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" placeholder="Masukkan alamat">{{$u->alamat}}</textarea>
          @error('alamat')
            <span class="invalid-feedback">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
              <label for="formFile" class="form-label">Upload ktp</label>
              <input name="gambar" class="form-control @error('gambar') is-invalid @enderror" type="file" id="formFile">
          @error('gambar')
            <span class="invalid-feedback">{{$message}}</span>
          @enderror('gambar')
        </div>
        @endforeach
        <a href="{{ route('home') }}" class="btn btn-danger">Batal</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
@endsection