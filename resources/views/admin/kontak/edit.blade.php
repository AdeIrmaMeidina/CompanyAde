
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Update') }}
                    </div>
                    <div class="float-end">
                        <a href="{{route('kontak.index')}}" class="btn btn-sm btn-primary">
                            Back
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('kontak.update', $kontak->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Telepon</label>
                            <input type="number" class="form-control @error('telepon') is-invalid @enderror" name="telepon"
                                value="{{ old('kontak', $kontak->telepon) }}" placeholder="Telepon" required>
                            @error('telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <textarea name="email" cols="20" rows="5" class="form-control @error('email') is-invalid @enderror"
                                id="inputUserstatus" placeholder="Email">{{ old('email', $kontak->email) }}</textarea>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <textarea name="lokasi" cols="20" rows="5" class="form-control @error('lokasi') is-invalid @enderror"
                                id="inputUserstatus" placeholder="Lokasi">{{ old('email', $kontak->lokasi) }}</textarea>
                            @error('lokasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                        <button type="submit" class="btn btn-sm btn-primary">Send</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection