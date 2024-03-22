@extends('layouts.admin')

@section('title', 'Pemasangan')

@section('content')
<div class="container-fluid mb-3">

  <!--<div class="d-flex justify-content-between mb-4">
    <h3>Pelaporan Air</h3>
    <a href="{{route('admin.pln-customers.create')}}" class="btn btn-primary-custom">
      <i class="fas fa-plus"></i>
      Tambah
    </a>
  </div>-->
  <div class="card">
    <div class="card-body">
      @foreach ($pemasang as $item)
      <table class="table table-striped table-bordered w-100" id="customers">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Foto KTP</th>
            <th>Action</th>
          </tr>
        </thead>
        <td>{{$item->id}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->alamat}}</td>
        <td><img src="{{ asset('post-ktp/' . $item->gambar) }}" alt="ktp ni bro" style="max-height: 200px; overflow:hiden;"> </td>
        <td>
          <form action="/pemasangans/createpelanggan" method="POST" enctype="multipart/form-data">
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
            <div class="form-group" hidden>
              <label for="inputAlamat">Alamat</label>
              <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" placeholder="Masukkan alamat">{{$item->alamat}}</textarea>
              @error('alamat')
              <span class="invalid-feedback">{{$message}}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-success btn-sm">Submit</button> 
            <a href="/pemasangans/hapus/{{$item->id}}" onclick="return confirm('Apakah Data Pelanggan Ditolak?');" class="btn btn-danger btn-sm">Tolak</a>
          </form>
        </td>
      </table>
      @endforeach
    </div>
  </div>

</div>
@endsection

@push('addon-script')
<!--<script>
    let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons);
    let selectAllButton = {
      text: 'Select All',
      action: function () {
        table.rows().select();
      }
    }

    let deselectButton = {
      text: 'Deselect All',
      className: 'mx-md-2',
      action: function () {
        table.rows().deselect();
      }
    }

    let deleteButton = {
      text: 'Delete Selected',
      extend: 'selected',
      url: "{{ route('admin.pln-customers.massDestroy') }}",
      className: 'btn-danger',
      key: String.fromCharCode(46),
      action: function(e, dt, node, config){
        let ids = $.map(dt.rows({selected: true}).data(), function(entry) {
          return entry.id;
        })

        if(ids.length === 0) {
          Swal.fire({
            title: 'Tidak ada data yang dipilih!',
            icon: 'warning',
            confirmButtonColor: '#3085d6',
          })
          return;
        }

        Swal.fire({
          title: 'Apakah kamu yakin ingin menghapusnya?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'ya!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              headers: {"x-csrf-token": "{{ csrf_token() }}"},
              method: 'POST',
              url: config.url,
              data: {ids: ids, _method: 'DELETE'}
            }).done(function(){ location.reload() });
          }
        })

      }
    }

    dtButtons.push([selectAllButton, deselectButton, deleteButton ]);

    let table = $('#customers').DataTable({
        select: {
          style: 'multi',
          selector: 'td:first-child',
        },
        dom: 'Bfrtip',
        buttons: dtButtons,
        responsive: true,
        serverSide: true,
        ajax: "{{ route('admin.pln-customers.index') }}",
        columnDefs: [{
          orderable: false,
          className: 'select-checkbox',
          targets: 0,
          defaultContent: '',
        }],
        columns: [
            {data: null},
            {data: 'id'},
            {data: 'nama_pelanggan'},
            {data: 'nomor_meter'},
            {data: 'alamat',
              render: function ( data, type, row ) {
              return data.length > 30 ?
                data.substr( 0, 30 ) +'…' :
                data;
            }},
            {data: 'tariff.golongan_tarif',
              render: function(data, type, row) {
                return data + '/' + row.tariff.daya + ' VA'
              }
            },
            {data: 'action', searchable: false, orderable: false},
        ],
    });

    $("#customers").on("click.dt", ".btn-delete", function(e){
      /*cek apakah yang diklik adalah tombol delete, 
      jika true maka tampilkan alert konfirmasi*/
      e.preventDefault();
      Swal.fire({
        title: 'Apakah kamu yakin ingin menghapusnya?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ya!',
        cancelButtonText: 'Batal',
      }).then((result) => {
        if (result.isConfirmed) {
          $(e.target).parent().submit();
        }
      })
    });
  </script>-->
@endpush