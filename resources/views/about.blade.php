@extends('layouts.public.main')
@section('title', 'About | MHS Soft Web')
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid"
                            src="{{ asset('assets/public/') }}/images/tampak-depan-smk-multistudi-high-school.jpg"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top"><span>SMK Multistudi Highshool</span></h2>
                    <p>"Sebuah institusi pendidikan vokasi yang didirikan pada tahun 2007 dengan fokus inovasi, prestasi dan
                        akhlak mulia. Melalui inovasi, SMK MHS menerapkan dan meramu sistem pendidikan vokasi yang paling
                        sesuai dengan kebutuhan dunia kerja saat ini yang menuntut siswa untuk proaktif dan menjadi pionir
                        untuk perkembangan dirinya".</p>
                    <p>"juga menitikberatkan proses pembelajaran pada pembentukan mental dan spiritual siswa-siswinya agar
                        memiliki akhlak dan prilaku mulia. Dengan visi menjadi sekolah modern berkepribadian dan berwawasan
                        global yang didukung oleh Sumber Daya Manusia serta infrastruktur yang lengkap, MHS siap melahirkan
                        generasi yang handal dan mampu menyongsong masa depan yang lebih baik".</p>
                    <a class="btn hvr-hover" href="#">Read More</a>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Kami Terpercaya</h3>
                        <p>Kami sudah memiliki pengalaman lebih dari 1 Tahun dalam pengembangan dunia web.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Kami Profesional</h3>
                        <p>Kami sangat pro</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Kami Ahli</h3>
                        <p>Dan ahli juga</p>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Meet Our Team</h2>
                </div>
                @foreach ($teams as $team)
                    <div class="col-sm-6 col-lg-3">
                        <div class="hover-team">
                            <div class="our-team"> <img src="{{ asset('storage/' . $team->photo) }}"
                                    alt="{{ $team->photo }}" />
                                <div class="team-content">
                                    <h3 class="title">{{ $team->nama }}</h3> <span
                                        class="post">{{ $team->title }}</span>
                                </div>
                                @if ($team->link_yt || $team->link_ig || $team->link_twitter)
                                    <ul class="social">
                                        @if ($team->link_ig)
                                            <li>
                                                <a href="{{ $team->link_ig }}" class="fab fa-instagram"></a>
                                            </li>
                                        @endif
                                        @if ($team->link_twitter)
                                            <li>
                                                <a href="{{ $team->link_twitter }}" class="fab fa-twitter"></a>
                                            </li>
                                        @endif
                                        @if ($team->link_yt)
                                            <li>
                                                <a href="{{ $team->link_yt }}" class="fab fa-youtube"></a>
                                            </li>
                                        @endif
                                    </ul>
                                @endif
                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                                <p>{{ $team->deskripsi }}</p>
                            </div>
                            <hr class="my-0">
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End About Page -->
@endsection
