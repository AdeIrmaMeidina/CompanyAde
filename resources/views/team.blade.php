@extends('layouts.user')
@section('content')
 <!-- Team Start -->
 <div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Our Team</h6>
            <h1 class="mb-5">Expert Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src={{asset('frontend/assets/img/team-1.jpg')}} alt="">
                    </div>
                    <h5 class="mb-0">Yudi Guntara</h5>
                    <p>Kepala Bengkel</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src={{asset('frontend/assets/img/team-2.jpg')}} alt="">
                    </div>
                    <h5 class="mb-0">Rahmat Hidayat</h5>
                    <p>Service Advisor</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src={{asset('frontend/assets/img/team-3.jpg')}} alt="">
                    </div>
                    <h5 class="mb-0">Fredi Widyanto</h5>
                    <p>Kepala Bengkel</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src={{asset('frontend/assets/img/team-4.jpg')}} alt="">
                    </div>
                    <h5 class="mb-0">Irawan</h5>
                    <p>Mekanik</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src={{asset('frontend/assets/img/team-2.jpg')}} alt="">
                    </div>
                    <h5 class="mb-0">Dadan</h5>
                    <p>Mekanik</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src={{asset('frontend/assets/img/team-3.jpg')}} alt="">
                    </div>
                    <h5 class="mb-0">Iwan Gunawan</h5>
                    <p>Mekanik</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src={{asset('frontend/assets/img/team-4.jpg')}} alt="">
                    </div>
                    <h5 class="mb-0">Akmal Firdaus Hendra</h5>
                    <p>Mekanik</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src={{asset('frontend/assets/img/team-1.jpg')}} alt="">
                    </div>
                    <h5 class="mb-0">Rias</h5>
                    <p>Mekanik</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection
