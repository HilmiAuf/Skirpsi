@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div data-aos="fade-up" data-aos-duration="3000" class="beranda  justify-content-center text-center">
    <img class="mb-3" src="/source/img/beranda-fix.png" alt="">
</div>
<div class="container about mt-5 mb-3">
    <div class="row justify-content-center midcontent align-items-center">
        <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
            class="col-sm-12 col-md-6 col-lg-3  text-center  overflow-x-hidden">
            <p class="fs-1">ABOUT ORGANIZER </p>
        </div>
        <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
            class="col-sm-12 col-md-6 col-lg-4 isi align-self-center overflow-x-hidden">
            <p class="fs-5">We are a dedicated team to help you plan and organize the perfect wedding. We understand how
                important this special moment is to you, and we are committed to making your wedding experience
                unforgettable.</p>
            <a href="/about"><button class=" btn mt-4 btn-lg"> READ MORE </button></a>
        </div>
    </div>
</div>
<div data-aos="fade-zoom-in"data-aos-easing="ease-in-back"data-aos-delay="300"data-aos-offset="0" class="last justify-content-center text-center mt-4">
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
            <p class=" mid-tittle fs-1">Why Choose Us ?</p>
            <p class="fs-5">Choose our wedding organizer and enjoy the journey to your dream wedding. We will listen to
                your desires and vision, as well as provide creative ideas that will take your marriage to the next
                level.</p>
            <ul>
                <li>10+ Years Experience</li>
                <li>Affordable Price</li>
                <li>100+ Events</li>
                <li>24 Hour Consultation</li>
                <li>Impeccable Solutions</li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center midcontent align-items-center galeri mt-5 mb-3">
        <div class="col ">
            <p class="fs-1 text-center ">Galery </p>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="swiper mySwiper col-12 mb-3">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/source/img/galery9.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery10.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery11.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery3.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery4.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery5.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery6.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery7.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery8.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery1.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery.png" />
            </div>
            <div class="swiper-slide">
                <img src="/source/img/galery2.png" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="row justify-content-center mt-5 mb-3">
        <div class="col-3 selamatdatang">
            <P class="fs-1 text-center ">Contact</p>
        </div>
    </div>
    <div class="row mb-3 kontak " data-aos="zoom-in-down">
        <div class="col-sm-12 col-md-12 col-lg-6 ">
            <img src="/source/img/callcenter1.png" alt="">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6  " style="margin-top:auto; margin-bottom:auto;" data-aos="zoom-in-down">
            <p class="fs-4">Consultation</p>
            <p class="isi fs-6" style="font-weight: normal"> Consultation before the wedding day for the smooth running
                of the event. Contact Us below!
        </div>
    </div>
    <div class="row ">
        <div class="col-sm-12 col-md-12 col-lg-6 order-2 order-sm-1 order-md-2 order-lg-1 "
            style="margin-top:auto; margin-bottom:auto;" data-aos="zoom-in-down">
            <p class="fs-4">Contact Us</p>
            <ul class="list-unstyled list-inline">
                <li>Address : Jl. Cideng Raya Blok Pecilon Kidul Gg. Syeh
                    Hambari</li>
                <li>Email : rayatiyati00@gmail.com </li>
                <li>Phone Number : 085222160047 </li>
                <li>WhatsApp : 089664970144 </li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 order-1 order-md-1 order-lg-2 order-sm-2 kontak" data-aos="zoom-in-down">
            <img src="/source/img/menghubungi.png" alt="" >
        </div>
    </div>
</div>
@endsection
