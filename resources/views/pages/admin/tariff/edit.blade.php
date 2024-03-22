@extends('layouts.admin')

@section('title', 'Edit Tarif')

@section('content')
  <div class="container">
    <h3 class="mb-4">Edit Tarif</h3>
    <div class="card">
      <div class="card-body">
      <form action="{{route('admin.tariffs.update', $tariff->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
          <label for="inputTarifPerKwh">Tarif</label>
          <input type="number" step="any" name="tarif_per_kwh" class="form-control @error('tarif_per_kwh') is-invalid @enderror" id="inputTarifPerKwh" value="{{$tariff->tarif_per_kwh}}" placeholder="Masukkan tarif">
          @error('tarif_per_kwh')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <a href="{{route('admin.tariffs.index')}}" class="btn btn-danger mr-1">Batal</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
@endsection