@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="container text-center halaman-about">
    <img src="/source/img/Top-layanan1.png" alt="">
    <div class="row align-items-start justify-content-center mb-3">
        <div class="col-lg-8 col-sm-12 col-md-12 " data-aos="fade-up" data-aos-duration="3000">
            <p class="fs-1">About Us</p>
            <p class="fs-6">At Griya Raya, we are a trusted partner in creating extraordinary and inspiring wedding
                experiences. With professional and personalized wedding planning services, we strive to realize each
                couple's unique vision, ensuring flawless execution and lasting memories.
                As a leading wedding organizer, we have established strong relationships with the best vendors in the
                industry, ensuring the highest quality and curated perfection in every detail. We stay up-to-date with
                the latest trends and innovations in the wedding industry, integrating them seamlessly into every event
                we organize.
                With a commitment to sustainability, we offer socially and environmentally responsible options, helping
                couples plan beautiful and eco-friendly weddings.</p>
        </div>
    </div>
    <div class="row align-items-start justify-content-center visi-misi mb-3 mt-3">
        <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-sm-12 col-md-12 col-lg-6 align-self-center mb-3 mt-3 "  >
            <img src="/source/img/visi.png" alt="">
        </div>
        <div data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-sm-12 col-md-12 col-lg-6 align-self-center mb-3 mt-3">
            <p class="fs-1">VISION</p>
            <p class="fs-6">
                To be a trusted partner in creating extraordinary wedding experiences and inspiring couples to build
                lasting memories.
            </p>
        </div>
    </div>
    <div class="row align-items-start justify-content-center visi-misi mb-3 mt-3">
        <div data-aos="fade-up-up" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-sm-12 col-md-12 col-lg-6 order-2 order-sm-1 order-md-2 order-lg-1 align-self-center mb-3 mt-3">
            <p class="fs-1">MISSION</p>
            <p class="fs-6 "><ul>
                <li class="fs-6">Providing professional, creative, and personalized wedding planning services to ensure that every special moment is perfectly realized.</li>
                <li class="fs-6">Providing a dedicated, experienced, and knowledgeable team within the wedding industry to help couples plan, coordinate and manage every aspect of their wedding.</li>
                <li class="fs-6">Build strong and trusting relationships with clients, by listening and understanding their desires and providing solutions that suit their individual styles and preferences.</li>
                <li class="fs-6">Establish solid partnerships with the best vendors in the wedding industry to provide high-quality services and ensure every wedding detail is carefully curated.</li>
                <li class="fs-6">Prioritizing customer satisfaction by providing friendly, responsive, and professional services, and exceeding their expectations in terms of beauty, quality, and overall satisfaction.</li>
                <li class="fs-6">Integrate the latest innovations and trends in the wedding industry to deliver a unique and mesmerizing experience to couples and their guests.</li>
                <li class="fs-6">Helping couples plan sustainable and eco-friendly weddings by providing socially and environmentally responsible options.
                </li>
                <li class="fs-6">Committed to continuous learning, developing expertise, and improving our service standards to remain a leader in the wedding organizer industry.</li>
            </ul>
            </p>
        </div>
        <div data-aos="fade-up-down" data-aos-offset="300" data-aos-easing="ease-in-sine"class="col-sm-12 col-md-12 col-lg-6 order-1 order-md-1 order-lg-2 order-sm-2 align-self-center mb-3 mt-3">
            <img src="/source/img/misi.png" alt="">
        </div>
    </div>
    <img src="/source/img/Top-layanan2.png" alt="">
</div>

@endsection
