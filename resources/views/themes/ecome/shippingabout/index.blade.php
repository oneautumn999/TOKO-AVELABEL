@extends('themes.ecome.layout')

@section('content')
	<section class="breadcrumb-area breadcrumb-section pb-3 pt-3">
		<div class="container">
			<h2>About Shipping</h2>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
				<li class="breadcrumb-item active" aria-current="page">About</li>
			</ol>
		</div>
	</section>
    <header class="header-bg text-center">
        <h1>ABOUT Shipping Avelabel</h1>
        <p class="text-p mt-3">
            Tersedia Banyak Pilihan Layanan Pengiriman : <br />
            TIKI,JNE,JNT,POS
            <br/>
            Since 7 July 2021, Jakarta
        </p>
    </header>
@endsection