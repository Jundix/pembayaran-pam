@extends('layouts.app')

@section('title', 'Invoice')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>invoice</title>
</head>
<body>
    @foreach($invoice as $i)
    <div class="container col-lg-5">
        <div class="card">
            <div class="card-body"></div>
            <div class="container">
                <h1 class="card-title">Invoice</h1>
                    <h5>ID Order : {{$i->id}}</h3>
                    <h5>Nama : {{$i->nama}}</h3>
                    <h5>Bulan : {{$i->bulan}}</h3>
                    <h5>Total : Rp.{{$i->nominal}}</h3>
                    <h5>Status Pembayaran : {{$i->status_pembayaran}}</h3>
                </div>
        </div>
    </div>
    </div>
    @endforeach
</body>
</html>
@endsection
