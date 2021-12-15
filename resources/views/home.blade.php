@extends('layouts.public.main')
@section('title', 'MHS Soft Web | Home')
@section('content')
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="{{ asset('assets/public') }}/images/mhs1.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20">Selamat datang di <strong>MHS Soft.Web</strong></h1>
                            <p class="m-b-40"> bisnis web developer, yang kami beri nama MultiSoft.web meliputi
                                jasa pembuatan web tracer alumni,
                                absensi guru, absensi siswa, perpustakaan, laundry dan reservasi hotel.</p>
                            <p><a class="btn hvr-hover" href="#daftarProduk">Lihat Produk</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{ asset('assets/public') }}/images/mhs2.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20">Selamat datang di <strong>MHS Soft.Web</strong></h1>
                            <p class="m-b-40"> bisnis web developer, yang kami beri nama MultiSoft.web meliputi
                                jasa pembuatan web tracer alumni,
                                absensi guru, absensi siswa, perpustakaan, laundry dan reservasi hotel.</p>
                            <p><a class="btn hvr-hover" href="#daftarProduk">Lihat Produk</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{ asset('assets/public') }}/images/mhs3.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20">Selamat datang di <strong>MHS Soft.Web</strong></h1>
                            <p class="m-b-40"> bisnis web developer, yang kami beri nama MultiSoft.web meliputi
                                jasa pembuatan web tracer alumni,
                                absensi guru, absensi siswa, perpustakaan, laundry dan reservasi hotel.</p>
                            <p><a class="btn hvr-hover" href="#daftarProduk">Lihat Produk</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fas fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fas fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1 id="daftarProduk">Daftar Produk</h1>
                        <p>Daftar Produk yang kami jual</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Paling Disukai</button>
                            <button data-filter=".best-seller">Paling Laku</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                @foreach ($products as $product)
                    @if ($product->status_produk == 'paling_disukai')
                        <div class="col-lg-3 col-md-6 special-grid top-featured">
                        @elseif($product->status_produk == 'paling_laku')
                            <div class="col-lg-3 col-md-6 special-grid best-seller">
                            @else
                                <div class="col-lg-3 col-md-6 special-grid">
                    @endif
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                {!! $product->status_masa == 'baru' ? '<p class="new">New</p>' : '' !!}
                            </div>
                            @if ($product->product_banner)
                                <img src="{{ asset('storage/' . $product->product_banner) }}" class="img-fluid"
                                    alt="{{ $product->product_banner }}">
                            @endif
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="{{ route('shop_detail', $product->id) }}" data-toggle="tooltip"
                                            data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{ $product->product_name }}</h4>
                        </div>
                    </div>
            </div>

            @endforeach
        </div>
    </div>
    </div>
    <!-- End Products  -->
@endsection
