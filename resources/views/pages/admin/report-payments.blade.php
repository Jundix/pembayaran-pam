<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Pembayaran</title>
  <link rel="stylesheet" href="{{ public_path('css/app.css') }}">
  <style>
    .page-break {
        page-break-after: always;
    }
    .title{
      margin-top: -100px;
    }
  </style>
</head>
<body class="bg-white">
  <nav class="navbar navbar-light">
    <span class="navbar-brand">
      {{-- <img src="{{ public_path('assets/img/megamendung-logo.png') }}" height="80px" alt="" srcset=""> --}}
    </span>
    <ul class="navbar-nav text-center"><br>
      <li class="nav-item">
        <br>
        <br>
        Dukuh Ringin <br>
        Telp :
      </li>
    </ul>
  </nav>
  <h1 class="text-center mb-3 title">Laporan Pembayaran PAMSIMAS</h1><br>
  <p class="mb-0">
    @if ($request->action == 'print_per_date')
      Periode : {{ $request->print_per_date['tanggal_awal'] . ' sampai ' . $request->print_per_date['tanggal_akhir'] }}
    @elseif($request->action == 'today_report')
      Periode : {{ now()->format('d-m-Y') }}
    @elseif($request->action == 'this_month_report')
      Periode : {{ now()->locale('id')->monthName . ' ' . now()->year }}
    @elseif($request->action == 'last_month_report')
      Periode : {{ now()->subMonth()->locale('id')->monthName . ' ' . now()->year }}
    @endif
  </p>
  <table class="w-100 mb-3">
    <tr>
      <td>Dibuat Pada : {{ now()->format('d-m-Y') }}</td>
      <td class="text-right">Total Transaksi : {{ $payments->count() }}</td>
    </tr>
  </table>

  <table class="table table-bordered table-striped text-center">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Pelanggan</th>
        <th>Tanggal Bayar</th>
        <th>Total Bayar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($payments as $payment)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $payment->nama }}</td>
          <td>{{ $payment->tanggal }}, {{ $payment->bulan }} {{ $payment->tahun }}</td>
          <td>Rp.{{$payment->jumlah_bayar}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
