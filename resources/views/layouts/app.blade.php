<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-Dwr6Hx8XJpCN6Ml1"></script> 
  </head>
  <body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
    
    @stack('prepend-script')
    @include('includes.script')
    @include('sweetalert::alert')
    @stack('addon-script')
    <!--Start of Tawk.to Script-->
      
    <!--End of Tawk.to Script-->
  </body>
</html>
