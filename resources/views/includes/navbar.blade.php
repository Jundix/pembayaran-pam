<!-- Navbar -->
<header class="bg-white {{Route::is(['about_us', 'transaction-history']) ? 'border-bottom' : ''}}">
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<a class="navbar-brand" href="{{route('home')}}">
			<!-- <img src="{{asset('assets/img/megamendung-logo.png')}}" width="120" height="63" class="d-inline-block align-top" alt="Mega Mendung Logo"> -->
			<h1>PAMSIMAS</h1>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ">
					<a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item {{Route::is('aboutus') ? 'active' : ''}}">
					<a class="nav-link" href="{{route('aboutus')}}">Tentang Kami</a>
				</li>
				@auth
				<li class="nav-item {{Route::is('pembayaran') ? 'active' : ''}}">
					<a class="nav-link" href="{{route('pembayaran')}}">pembayaran</a>
				</li>
				<li class="nav-item my-2 my-md-0">
                    <a href="{{ route('logout') }}" class="nav-link btn btn-primary-custom">Logout</a>
				</li>
				@endauth
			</ul>
		</div>
	</nav>
</header>
<!-- End of Navbar -->
