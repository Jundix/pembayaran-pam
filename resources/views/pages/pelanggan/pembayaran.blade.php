@extends('layouts.app')

@section('title', 'Pembayaran')

@section('content')
<div class="container">
    <h3 class="mb-4">Pembayaran</h3>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
            <th>ID</th>
            <th>Bulan</th>
            <th>Penggunaan</th>
            <th>Jumlah yang Dibayarkan</th>
          
        @foreach($pembayaran as $index => $item)
        <tr>
        <td>{{$index +1}}</td>
        <td>{{$item->bulan}} {{$item->tahun}}</td>
        <td>{{$item->jumlah_penggunaan}}</td>
        <td>{{$item->jumlah_bayar}}</td>
        </tr>
            @endforeach
                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
