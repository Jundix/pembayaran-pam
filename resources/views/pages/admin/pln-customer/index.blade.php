@extends('layouts.admin')

@section('title', 'Pelanggan PAMSIMAS')

@section('content')
<div class="container-fluid mb-3">
  <div class="d-flex justify-content-between mb-4">
    <h3>Pelanggan PAMSIMAS</h3>
    <a href="{{route('admin.pln-customers.create')}}" class="btn btn-primary-custom">
      <i class="fas fa-plus"></i>
      Tambah
    </a>
  </div>
  <div class="card">
    <div class="card-body">
      <table class="table table-striped table-bordered w-100" id="customers">
        <thead>
          <tr>
            <th></th>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor Meter</th>
            <th>Alamat</th>
            <th>Tarif</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
  <script>
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
            {data: 'tariff.tarif_per_kwh',
              render: function(data, type, row) {
                return data 
              }
            },
            {data: 'action', searchable: false, orderable: false},
        ]
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
  </script>
@endpush