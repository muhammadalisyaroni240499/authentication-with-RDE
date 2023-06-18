@extends('layouts')

@section('container')

{{-- Pesan ketika link terkirim atau tidak --}}
@if (session()->has('sendlink_message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top: 20px">
    {{ session('sendlink_message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>    
@endif

<div class="row justify-content-center align-middle">
    <div class="col-lg-7">
        <div class="cont-custom">
            <main class="form-registration">
                <h1 class="h3 fw-normal text-center">Update Cover Image</h1>
                
                <form action="/sendLink" method="POST">
                    @csrf
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
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Selanjutnya</button>
                </form>
                <small class="d-block text-center mt-3">sudah punya stego image <a href="/login">Masuk</a></small>
            </main>
        </div>
    </div>
</div>
@endsection