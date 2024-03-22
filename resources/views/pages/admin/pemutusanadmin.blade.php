@extends('layouts.admin')

@section('title', 'Pemutusan')

@section('content')
<div class="container-fluid mb-3">
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Fitur Pemutusan:</strong>
    <ol>
      <li>Tersedia pilihan kota lengkap se-Indonesia</li>
      <li>Golongan tarif sudah disesuaikan dengan tariff </li>
    </ol>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <!--<div class="d-flex justify-content-between mb-4">
    <h3>Pelaporan Air</h3>
    <a href="{{route('admin.pln-customers.create')}}" class="btn btn-primary-custom">
      <i class="fas fa-plus"></i>
      Tambah
    </a>
  </div>-->
  <div class="card">
    <div class="card-body">
      @foreach ($pemutus as $item)
      <table class="table table-striped table-bordered w-100" id="customers">
        <thead>
          <tr>
            <th>No.</th>
            <th>ID Pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Action</th>
          </tr>
        </thead>
        <td>{{$item->id}}</td>
        <td>{{$item->id_pelanggan}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->alamat}}</td>
        <td>
          <form action="pemutusans/customer" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row" hidden>
              <div class="form-group col-md-12">
                <label for="inputNama">Nama Pelanggan <span class="text-danger">*</span></label>
                <input type="text" name="id_pelanggan" class="form-control @error('nama') is-invalid @enderror" id="inputNama" value="{{$item->id_pelanggan}}" placeholder="Masukkan nama">
                @error('nama')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="form-group" hidden>
              <label for="inputAlamat">Alamat</label>
              <textarea name="id" class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" placeholder="Masukkan alamat">{{$item->id}}</textarea>
              @error('alamat')
              <span class="invalid-feedback">{{$message}}</span>
              @enderror
            </div>
            <a href="{{ route('home') }}" class="btn btn-danger">Batal</a>
            <button type="submit" class="btn btn-primary">Submit</button>
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