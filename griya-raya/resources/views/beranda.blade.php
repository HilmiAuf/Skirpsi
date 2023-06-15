@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div data-aos="fade-up" data-aos-duration="3000" class="beranda  justify-content-center text-center">
    <img class="mb-3" src="/source/img/beranda-fix.png" alt="">
</div>
<div class="container about mt-5 mb-3">
    <div class="row justify-content-center midcontent align-items-center">
        <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
            class="col-sm-12 col-md-6 col-lg-3  text-center  overflow-x-hidden">
            <p class="fs-1">Tentang Kami </p>
        </div>
        <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
            class="col-sm-12 col-md-6 col-lg-4 isi align-self-center overflow-x-hidden">
            <p class="fs-5">Kami adalah tim yang berdedikasi untuk membantu Anda merencanakan dan mengatur pernikahan yang sempurna. Kami memahami betapa pentingnya momen spesial ini bagi Anda, dan kami berkomitmen untuk membuat pengalaman pernikahan Anda tak terlupakan.</p>
            <a href="/about"><button class=" btn mt-4 btn-lg"> Baca Selengkapnya </button></a>
        </div>
    </div>
</div>
<div data-aos="fade-up" data-aos-duration="3000" class="last justify-content-center text-center mt-4">
    <img class="mb-3 mt-5 " src="/source/img/mid.png" alt="">
</div>
<div class="container mt-5 mb-3">
    <div class="row justify-content-center midcontent align-items-center mid1 ">
        <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
            class="col-sm-12 col-md-12 col-lg-6  text-center overflow-x-hidden">
            <img src="/source/img/Fotoberanda-mid.png" alt="">
        </div>
        <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
            class="col-sm-12 col-md-12 col-lg-5 isi mt-3 overflow-x-hidden">
            <p class=" mid-tittle fs-1">Mengapa Memilih Kami?</p>
            <p class="fs-5" style="text-align: justify;">Pilih wedding organizer kami dan nikmati perjalanan menuju pernikahan impian Anda. Kami akan mendengarkan keinginan dan visi Anda, serta memberikan ide-ide kreatif yang akan membawa pernikahan Anda ke tingkat berikutnya.</p>
            <ul>
                <li>10+ Tahun Pengalaman</li>
                <li>Harga Terjangkau</li>
                <li>100+ Acara</li>
                <li>Konsultasi 24 Jam</li>
                <li>Solusi Sempurna</li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center midcontent align-items-center galeri mt-5 mb-3">
        <div class="col ">
            <p class="fs-1 text-center ">Galeri</p>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="swiper mySwiper col-12 mb-3">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery9.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;"src="/source/img/galery10.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery11.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery3.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery4.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery5.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery6.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery7.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery8.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery1.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery.png" />
            </div>
            <div class="swiper-slide">
                <img style="border-radius:10px;" src="/source/img/galery2.png" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="row justify-content-center mt-5 mb-3">
        <div class="col-3 selamatdatang">
            <P class="fs-1 text-center ">Kontak</p>
        </div>
    </div>
    <div class="row mb-3 kontak " data-aos="zoom-in-down">
        <div class="col-sm-12 col-md-12 col-lg-6 ">
            <img style="border-radius:10px;" src="/source/img/callcenter1.png" alt="">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6  " style="margin-top:auto; margin-bottom:auto;" data-aos="zoom-in-down">
            <p class="fs-4">Konsultasi</p>
            <p class="isi fs-6" style="font-weight: normal"> Konsultasi sebelum hari pernikahan untuk kelancaran acara. Hubungi Kami di bawah ini!
        </div>
    </div>
    <div class="row ">
        <div class="col-sm-12 col-md-12 col-lg-6 order-2 order-sm-1 order-md-2 order-lg-1 "
            style="margin-top:auto; margin-bottom:auto;" data-aos="zoom-in-down">
            <p class="fs-4">Kontak Kami</p>
            <ul class="list-unstyled list-inline">
                <li>Alamat : Jl. Cideng Raya Blok Pecilon Kidul Gg. Syeh
                    Hambari</li>
                <li>Email : rayatiyati00@gmail.com </li>
                <li>Nomor Telphone : 085222160047 </li>
                <li>WhatsApp : 089664970144 </li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 order-1 order-md-1 order-lg-2 order-sm-2 kontak" data-aos="zoom-in-down">
            <img style="border-radius:10px;" src="/source/img/menghubungi.png" alt="" >
        </div>
    </div>
</div>
@endsection
