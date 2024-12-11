@extends('layouts.user')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src={{asset('frontend/assets/img/Honda.jpg')}} alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Logistics</span> Solution</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid width:200px height:150" src={{asset('frontend/assets/img/ahm2.jpg')}} alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Transport</span> Solution</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        @php $tentang = App\Models\Tentang::first(); @endphp
        @if ($tentang)
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src={{asset('/storage/tentangs/' . $tentang->image)}} style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">{{ $tentang->judul }}</h6>
                    <p class="mb-5">{{ $tentang->deskripsi }}</p>
                    {{-- <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            <h5>Global Coverage</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            <h5>On Time Delivery</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.</p>
                        </div>
                    </div> --}}
                    {{-- <a href="" class="btn btn-primary py-3 px-5">Explore More</a> --}}
                </div>
            </div>
        </div> @endif
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


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Service</h6>
                <h1 class="mb-5">Explore our services</h1>
            </div>
            <div class="row g-4">
                @php $servis = App\Models\Servis::orderBy('id', 'asc')->get(); @endphp
                @foreach ($servis as $data)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{ asset('/storage/servises/' . $data->image) }}" alt="">
                        </div>
                        <h5 class="mb-0">{{ $data->nama }}</h5>
                        <p>{{ $data->deskripsi }}</p>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
    <!-- Service End -->


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
                        <img class="position-absolute img-fluid w-100 h-100" src={{asset('frontend/assets/img/background.jpeg')}} style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Pricing Start -->

    <!-- Pricing End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                    <h1 class="mb-5">Request A Free Qoute!</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Freight</option>
                                        <option value="1">Freight 1</option>
                                        <option value="2">Freight 2</option>
                                        <option value="3">Freight 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Team</h6>
                <h1 class="mb-5">Expert Team Members</h1>
            </div>
            <div class="row g-4">
                @php $organigram = App\Models\Organigram::orderBy('id', 'asc')->get(); @endphp
                @foreach ($organigram as $data)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{ asset('/storage/organigrams/' . $data->image) }}" alt="">
                        </div>
                        <h5 class="mb-0">{{ $data->nama }}</h5>
                        <p>{{ $data->jabatan }}</p>
                    </div>
                </div>
                @endforeach
            </div>

    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src={{ asset('frontend/assets/img/testimonial-1.jpg') }}
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Famel Alista</h5>
                        </div>
                    </div>
                    <p class="mb-0">Pelayanan Baik,Ganteng" lagi.hihi Harga servis Standar
                        Tempat nyaman buat Nunggu walau agak lama,ada buat CarGer Hp,Kipas,Kopi Gratis,Air minum
                        Gratis,(Hanya Gk ada makan Gratis😆(Canda😇.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src={{ asset('frontend/assets/img/testimonial-2.jpg') }}
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Muhammad Fahri</h5>
                        </div>
                    </div>
                    <p class="mb-0">Pelayanan nya top deh mulai dari yang mengerjakan motor sampai kasir ramah semua 👍.
                    </p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src={{ asset('frontend/assets/img/testimonial-1.jpg') }}
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Arsela Lestari</h5>
                        </div>
                    </div>
                    <p class="mb-0">Ramah banget, bisa transfer, terjangkau dan diberi solusi setiap perbaikan.
                        Ada lemari charger hape, tv, air mineral dan kopi gratis.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src={{ asset('frontend/assets/img/testimonial-4.jpg') }}
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Kania Putri</h5>
                        </div>
                    </div>
                    <p class="mb-0"><span class="message-preview" onclick="toggleMessage(this)"
                            data-full-message="Keren banget!! Aku berkali2 service ke sini gak mau pindah atau coba di tempat lain karena pelayanannya SUPERRR BAIKK!!
                    Selalu dikasih tauu dengan baik, even aku ditarikin kursi ketika baru nyampe dan dipersilakan duduk,
                    kayaknya gak semua pelayanan di tempat lain bisa kaya gini deh.
                    Terus tiap ada masalah pasti konfirmasi dulu ke aku, kalo mau ada yg diservice dan perlu biaya tambahan selalu tanya dulu gak tiba2 harus bayar tanpa kita acc.">
                            {{ \Illuminate\Support\Str::limit(
                                'Keren banget!! Aku berkali2 service ke sini gak mau pindah atau coba di tempat lain karena pelayanannya SUPERRR BAIKK!!
                                                                            Selalu dikasih tauu dengan baik, even aku ditarikin kursi ketika baru nyampe dan dipersilakan duduk,
                                                                            kayaknya gak semua pelayanan di tempat lain bisa kaya gini deh.
                                                                            Terus tiap ada masalah pasti konfirmasi dulu ke aku, kalo mau ada yg diservice dan perlu biaya tambahan selalu tanya dulu gak tiba2 harus bayar tanpa kita acc.',
                                150,
                                '...',
                            ) }}
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection

