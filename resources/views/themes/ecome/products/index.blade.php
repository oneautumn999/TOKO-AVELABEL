@extends('themes.ecome.layout')

@section('content')
<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </div>
</section>
<section class="products-grid pb-4 pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                @include('themes.ecome.products.sidebar')
            </div>
            <div class="col-lg-9 col-md-8 col-12" >
                <div class="row">
                    <div class="col-12">
                        <div class="products-top">
                            <div class="products-top-inner">
                                <div class="products-found">
                                    <p><span>{{ count($products) }}</span> Product Found of <span>{{ $products->total() }}</span></p>
                                </div>
                                <div class="products-sort">
                                    <span>Sort By : </span>
                                    {{ Form::select('sort', $sorts , $selectedSort ,array('onChange' => 'this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);')) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-product-content tab-content">                  
                    @include('themes.ecome.products.grid_view')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection