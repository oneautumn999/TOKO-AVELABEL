@extends('themes.ecome.layout')

@section('content')
	<section class="breadcrumb-area breadcrumb-section pb-3 pt-3">
		<div class="container">
			<h2>About Return</h2>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
				<li class="breadcrumb-item active" aria-current="page">About</li>
			</ol>
		</div>
	</section>
    <header class="header-bg text-center">
        <h1>ABOUT Return Avelabel</h1>
        <p class="text-p mt-3">
            Barang Tidak Sesuai Atau Cacat Siap diganti S&K : <br />
            Mengirim Vidio Barang Ketika Dibuka<br/>
            Mengirim Kembali Barang Ke Kita Ongkos Ditanggung Penjual<br/> 
            <br/>
            Since 7 July 2021, Jakarta
        </p>
    </header>
@endsection