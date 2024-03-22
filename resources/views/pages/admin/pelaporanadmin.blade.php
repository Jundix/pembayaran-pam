@extends('layouts.admin')

@section('title', 'Pelaporan')

@section('content')
<div class="container-fluid mb-3">
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Fitur Pelaporan:</strong>
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
    @foreach ($pelapor as $item)
      <table class="table table-striped table-bordered w-100" id="customers">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor Meter</th>
            <th>Alamat</th>
            <th>Keluhan</th>
            <th>Action</th>
          </tr>
        </thead>
            <td>{{$item->id}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->nomor_meter}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->keluhan}}</td>
            <td>Action</td>
        
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
        ajax: "{{ route('pelaporans.index') }}",
        columnDefs: [{
          orderable: false,
          className: 'select-checkbox',
          targets: 0,
          defaultContent: '',
        }],
        columns: [
            {data: null},
            {data: 'id'},
            {data: 'nama'},
            {data: 'nomor_meter'},
            {data: 'alamat'},
            {data: 'keluhan'},
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