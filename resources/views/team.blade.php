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
@endsection
