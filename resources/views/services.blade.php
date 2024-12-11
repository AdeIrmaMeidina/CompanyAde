@extends('layouts.user')
@section('content')
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
