@extends('layouts.admin')

@section('title', 'Tambah Penggunaan')

@section('content')
  <div class="container">
    <h3 class="mb-4">Tambah Penggunaan</h3>
    <div class="card">
      <div class="card-body">
        <form action="{{ route('penggunaan.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="selectPlnCustomer">ID Pelanggan <span class="text-danger">*</span></label>
            <select
                    name="id_pelanggan"
                    class="form-control selectpicker @error('id_pelanggan_pln') is-invalid @enderror" data-live-search="true"
                    id="selectPlnCustomer"
            >
              <option selected disabled>Pilih Pelanggan </option>
              @foreach($customers as $customer)
                <option value="{{ $customer->id }}" {{ old('id_pelanggan_pln') === $customer->id ? 'selected' : '' }}>
                  {{ $customer->id . '. ' . $customer->nama_pelanggan }}
                </option>
              @endforeach
            </select>

            @error('id_pelanggan_pln')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="inputMeterAwal">Meter Awal <span class="text-danger">*</span></label>
            <input
                  type="text"
                  name="meter_awal"
                  class="form-control @error('meter_awal') is-invalid @enderror"
                  id="inputMeterAwal"
                  value="{{ old('meter_awal') }}"
                  placeholder="Masukkan meter awal"
            >

            @error('meter_awal')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="inputMeterAkhir">Meter Akhir <span class="text-danger">*</span></label>
            <input
                  type="text"
                  name="meter_akhir"
                  class="form-control @error('meter_akhir') is-invalid @enderror"
                  id="inputMeterAkhir"
                  value="{{ old('meter_akhir') }}"
                  placeholder="Masukkan meter akhir"
            >
            @error('meter_akhir')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="selectBulan">Bulan <span class="text-danger">*</span></label>
            <select name="bulan" class="form-control selectpicker @error('bulan') is-invalid @enderror" id="selectBulan" data-live-search="true">
              <option disabled>Pilih Bulan</option>
              @foreach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12] as $month)
                  <option value="{{ $month }}" {{ $month === old('month') || $month === now()->month ? 'selected' : '' }}>
                    {{\Carbon\Carbon::create(0, $month)->monthName}}
                  </option>
              @endforeach
            </select>

            @error('bulan')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="inputTahun">Tahun <span class="text-danger">*</span></label>
            <input
                  type="text"
                  name="tahun"
                  class="form-control @error('tahun') is-invalid @enderror"
                  id="inputTahun"
                  value="{{ now()->year }}"
            >
            @error('tahun')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <a href="{{ route('penggunaan.index') }}" class="btn btn-danger mr-1">Batal</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('addon-script')
<!-- Datepicker Bahasa Indonesia -->
<script src="{{ asset('assets/plugin/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js') }}"></script>
<script>
  $('#inputTahun').datepicker({
    language: "id",
    format: "yyyy",
    startView: 2,
    minViewMode: 2,
    maxViewMode: 2
  });

  $("#selectPlnCustomer").on("change", function(){
    let idPelanggan = $(this).val();
    $.ajax({
      url: "",
      data: {id_pelanggan: idPelanggan},
      dataType: "json",
      success: function(data){
        $("#inputMeterAwal").val(data);
      },
      error: function(xhr){
        console.log(xhr.responseJSON);
      }
    });
  });
</script>
@endpush
