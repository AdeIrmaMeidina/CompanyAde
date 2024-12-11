@extends('layouts.user')
@section('content')
 <!-- About Start -->
 <div class="container-fluid overflow-hidden py-5 px-lg-0">
    @php $tentang = App\Models\Tentang::first(); @endphp
    @if ($tentang)
    <div class="container about py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src={{ asset('/storage/tentangs/' . $tentang->image) }} style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="text-secondary text-uppercase mb-3">{{ $tentang->judul }}</h6>
                <p class="mb-12">{{ $tentang->deskripsi }}</p>
            </div>
        </div>
    </div>   @endif
</div>
<!-- About End -->


<!-- Fact Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                {{-- <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6> --}}
                <h1 class="mb-5">VISI</h1>
                <p class="mb-5">menjadi jaringan bengkel sepeda motor terpercaya yang memberikan
                    kenyamanan, kepuasan, dan pelayanan terbaik kepada seluruh konsumen Honda.</p>
            </div>
            <div class="col-lg-6">

                      <h1 class="mb-5">MISI</h1>
                <p class="mb-2">Meningkatkan Kualitas Layanan dan Profesionalisme.</p>
                <p class="mb-2">Memberikan Kenyamanan kepada Pelanggan.</p>
                <p class="mb-2">Menyediakan Suku Cadang dan Aksesori Berkualitas.</p>
                <p class="mb-2">Membangun Kepercayaan Pelanggan.</p>

        </div>
    </div>
</div>
<!-- Fact End -->


<!-- Feature Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                <h1 class="mb-5">We Are Trusted Logistics Company Since 1990</h1>
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Worldwide Service</h5>
                        <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo justo magna erat amet</p>
                    </div>
                </div>
                <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>On Time Delivery</h5>
                        <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo justo magna erat amet</p>
                    </div>
                </div>
                <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>24/7 Telephone Support</h5>
                        <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo justo magna erat amet</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Team Start -->

<!-- Team End -->

@endsection
