@extends('layouts')

@section('container')    
<div class="row justify-content-center align-middle">
    <div class="col-lg-7">
        <div class="cont-custom">
            <main class="form-registration">
                <h1 class="h3 fw-normal text-center">Form Pendaftaran</h1>
                
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('namalengkap') is-invalid @enderror" name="namalengkap" id="namalengkap" placeholder="Name" value="{{ old('namalengkap') }}" required>
                        <label for="namalengkap">Nama lengkap</label>
                        {{-- menangkap pesan error validate di controller --}}
                        @error('namalengkap')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                        <label for="emai">Alamat email</label>
                        {{-- menangkap pesan error validate di controller --}}
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" id="tanggallahir" placeholder="Tanggal Lahir" value="{{ old('tanggallahir') }}" required>
                                <label for="emai">Tanggal Lahir</label>
                                {{-- menangkap pesan error validate di controller --}}
                                @error('tanggallahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="jeniskelamin" name="jeniskelamin">
                                    <option value="1">Laki laki</option>
                                    <option value="0">Perempuan</option>
                                </select>
                                <label for="jeniskelamin">Jenis Kelamin</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="password" placeholder="Kata Sandi" required>
                        <label for="password">Kata Sandi</label>
                        {{-- menangkap pesan error validate di controller --}}
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Pilih Cover Image
                        </button>
                        @error('coverimage')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pilih coverimage</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        @foreach ($coverimage as $cover)
                                        <div class="col-sm-4">
                                            <div class="card mb-3" style="width: 14rem;">
                                                <div class="custom-control custom-radio image-checkbox">
                                                    <input type="radio" class="custom-control-input" id="coverimage{{ $cover->id }}" name="coverimage" value="{{ $cover->id }}">
                                                    <label class="custom-control-label" for="coverimage{{ $cover->id }}">
                                                        <img src="{{ asset('storage/'.$cover->url_lokal) }}" alt="#" class="img-fluid">
                                                    </label>
                                                    
                                                    {{-- <input type="hidden" name="slug_coverimage" id="slug_coverimage" value="{{ uniqid($cover->slug, true) }}"> --}}
                                                </div>
                                                <div class="card-body text-center">
                                                    <h5 class="card-title mb-0">{{ $cover->namagambar }}</h5>
                                                    <p class="text-muted mt-0 fs-6">by {{ $cover->pencipta }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Daftar</button>
                </form>
                <small class="d-block text-center mt-3">Sudah daftar?
                    <a href="/login">
                        <span class="badge bg-info text-dark">Masuk</span>
                    </a>
                </small>
            </main>
        </div>
    </div>
</div>
@endsection