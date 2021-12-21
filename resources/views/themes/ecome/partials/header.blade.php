<header class="header clearfix">
    <div class="top-bar d-none d-sm-block">
        <div class="container">
            <div class="row">
                <div class="col-6 text-left">
                    <ul class="top-links contact-info">
                        <li><i class="fa fa-envelope-o"></i> <a href="mailto: pengawal20@gmail.com">pengawal20@gmail.com</a></li>
                        <li><i class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=081295187428">081295187428</a></li>
                    </ul>
                </div>
                <div class="col-6 text-right">
                    <ul class="top-links account-links">
                        @guest
							<li><i class="fa fa-user-circle-o"></i><a href="{{ url('login') }}">Login</a></li>
							<li><a href="{{ url('register') }}">Register</a></li>
						@else
							<li>Hello: <a href="{{ url('users/profile') }}">{{ Auth::user()->first_name }}</a></li>
							<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						@endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-12 col-sm-6">
                    <a class="navbar-brand mr-lg-5" href="{{ url('/') }}">
                        <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">APA YA?</span>
                    </a>
                </div>
                <div class="col-lg-7 col-12 col-sm-6">
                    <form action="{{ url('products') }}" method="GET" class="search">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" placeholder="Search" name="q" value="{{ isset($q) ? $q : null }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-12 col-sm-6">
                    <div class="right-icons pull-right d-none d-lg-block">
                        <div class="single-icon wishlist">
                            <a href="{{ url('favorites') }}"><i class="fa fa-heart-o fa-2x"></i></a>
                            <span class="shop-count-furniture green"></span>
                        </div>
                        @include('themes.ecome.partials.mini_cart')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-top border-bottom">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">Shop</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('products')}}">Products</a>
                            <a class="dropdown-item" href="{{ url('carts') }}">Cart</a>
                        </div>
                    </li>
                </ul>
            </div> <!-- collapse .// -->
        </div> <!-- container .// -->
    </nav>
</header>