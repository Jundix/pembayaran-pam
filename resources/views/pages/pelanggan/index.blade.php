@extends('layouts.app')

@section('title', 'PAMSIMAS - Semua serba bisa')

@section('content')

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-lg-6 left-side d-md-inline-block d-none">
        <img src="{{ asset('assets/img/ilustrasi/mobile-payment-illustration@2x.png') }}" class="ilustrasi-mobile-payment" alt="Mobile Payment Illustration" width="300px">
      </div>
      <div class="col-md-7 col-lg-6 right-side d-md-inline-block d-none">
        <h1 class="jumbotron-header">Penuhi Kebutuhan Air Kamu</h1>
        <p class="lead">
          Kini cek dan bayar tagihan air tidak perlu keluar <br>
          rumah. Kamu bisa melakukan itu dengan mudah di <br>
          website PAMSIMAS.
        </p>
        <!--<img src="{{ asset('assets/img/icopln.png') }}" alt="ICON PLN" width="43" height="63">-->
      </div>
    </div>
  </div>
</div>
<!-- End of Jumbotron -->

<!-- Main Content -->
<main class="container">
  <!-- Input ID Pelanggan -->
  <div class="d-flex justify-content-md-center">
    <div class="card card-input-no-meteran p-2">
      <div class="card-body">
        <label for="#inputIDPelanggan" class="mb-3">Cek Tagihan Air</label>
        <table class="table table-striped table-bordered w-100" id="example">
            <th>ID</th>
            <th>Nama</th>
            <th>Bulan</th>
            <th>Penggunaan</th>
            <th>Jumlah yang Dibayarkan</th>
            <th>Opsi</th>

        @foreach ($tagihan as $item)
        <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nama_pelanggan}}</td>
        <td>{{$item->bulan}} {{$item->tahun}}</td>
        <td>{{$item->jumlah_penggunaan}}</td>
        <td>{{$item->jumlah_bayar}}</td>
        <td><button id="pay-button" class="btn btn-success">Bayar</button></td>
        </tr>
            @endforeach
      </table>
      </div>
    </div>
  </div>
  <!-- End of Input ID Pelanggan -->

  <!-- <section class="postpaid-instruction">
    <h3 class="title text-center">Bagaimana Cara Bayar Tagihan Air di PAMSIMAS</h3>
    <div id="carousel" class="carousel slide d-flex" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item step step-one active">
          <div class="row">
            <div class="col col-8">
              <p class="step-one-text">
                1. Siapkan Nomor Meter atau <br>
                ID Pelanggan Anda.
              </p>
            </div>
            <div class="col col-4">
              <img src="{{ asset('assets/img/ilustrasi/ilustrasi-meteran-listrik@2x.png') }}" class="d-block ilustrasi-meteran-listrik text-right" alt="Ilustrasi Meteran Listrik">
            </div>
          </div>
        </div>
        <div class="carousel-item step step-two">
          <div class="row">
            <div class="col col-8">
              <p class="step-one-text">
                2. Buka website PAMSIMAS <br>
                melalui desktop atau mobile.
              </p>
            </div>
            <div class="col col-4">
              <img src="{{ asset('assets/img/ilustrasi/search-illustration@2x.png') }}" class="d-block search-illustration text-right" alt="Ilustrasi Mencari Website">
            </div>
          </div>
        </div>
        <div class="carousel-item step step-three">
          <div class="row">
            <div class="col col-8">
              <p class="step-one-text">
                3. Kemudian masukkan nomor meter <br>
                atau ID Pelanggan.
              </p>
            </div>
            <div class="col col-4">
              <img src="{{ asset('assets/img/ilustrasi/ilustrasi-input-id-pelanggan@2x.png') }}" class="d-block ilustrasi-input-id-pelanggan text-right" alt="Ilustrasi Memasukkan ID Pelanggan">
            </div>
          </div>
        </div>
        <div class="carousel-item step step-four">
          <div class="row">
            <div class="col col-8">
              <p class="step-one-text">
                4. Klik tombol <strong>Bayar</strong>.
              </p>
            </div>
            <div class="col col-4">
              <img src="{{ asset('assets/img/ilustrasi/ilustrasi-klik-tombol-cek-tagihan@2x.png') }}" class="d-block ilustrasi-klik-tombol-cek-tagihan text-right" alt="Ilustrasi Memasukkan ID Pelanggan">
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon p-4"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon p-4"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section> -->
  <section class="megamendung-benefit mt-5">

    <div class="row px-5">
      <div class="col col-4 benefit-item first-benefit text-center"><a href="{{route('request_pasang')}}">
          <img src="{{asset('assets/img/mm-icon/auto-payment-icon@2x.png')}}" alt="Auto Payment Icon" class="mx-auto" width="63" height="63">
          <p class="desc">
            Ajukan <br>
            Pemasangan Air
          </p>
        </a>
      </div>
      <div class="col col-4 benefit-item second-benefit text-center"><a href="{{route('request_pemutusan')}}">
          <img src="{{asset('assets/img/mm-icon/water.png')}}" alt="Money Icon" class="mx-auto" width="80" height="60">
          <p class="desc">
            Ajukan <br>
            Pemutusan Air
          </p>
        </a>
      </div>
      <div class="col col-4 benefit-item third-benefit text-center"> <a href="https://wa.link/2ph1fq" target="__blank">
          <img src="{{asset('assets/img/mm-icon/warningwater.png')}}" alt="Wallet Icon" class="mx-auto" width="61" height="60">
          <p class="desc">
            Lapor <br>
            Keluhan
          </p>
        </a>
      </div>
    </div>
  </section>
</main>
<script type="text/javascript" src="{{config('midtrans.snap_url')}}" data-client-key="{{config('midtrans.client_key')}}"></script>
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{$snapToken}}', {
        onSuccess: function(result) {

          /* You may add your own implementation here */
          // alert("payment success!"); console.log(result);
          window.location.href = '/invoice/{{$id_pembayaran}}'
        },
        onPending: function(result) {
          /* You may add your own implementation here */
          alert("wating your payment!");
          console.log(result);
        },
        onError: function(result) {
          /* You may add your own implementation here */
          alert("payment failed!");
          console.log(result);
        },
        onClose: function() {
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
  </script>
<!-- End of Main Content -->
@endsection
