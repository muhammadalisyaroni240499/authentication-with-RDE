@extends('dashboard.layout')
@section('container')

@if (session()->has('register_success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('register_success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>    
@endif

<div class="header">
    <div class="container">
        <div class="text-center d-lg-none">
            @php
            use App\Models\CoverImage;
            @endphp
            <img class="mx-auto" src="/img/bg.jpg" alt="Gembok" width="55%">
        </div>
        <div class="vw-90 mx-auto text-break d-flex flex-row">
            <div class="vw-100 mt-5">
                <h1 class="fw-bold mb-1 ">SELAMAT DATANG</h1>
                <p>di Sistem Otentikasi Menggunakan RDE</p>
                {{-- <p>{{ $click }}</p> --}}
                @if ($download == true)
                <p><small>Silahkan download coverimage dibawah, untuk digunakan di aktivitas otentikasi kedepannya</small></p>
                <form method="POST" action="/dashboard/download">
                    @csrf
                    <input type="hidden" name="url_coverimage" value="{{ Auth()->user()->email }}\{{ Auth()->user()->email }}RDE.png">
                    {{-- <input type="hidden" name="url_folder" value="{{ Auth()->user()->email }}"> --}}
                    <button type="submit" class="btn btn-outline-primary" onclick="refresh();">download</button>
                </form>
                @else
                <p><small>Pengunduhan stego image telah melewati batas waktu</small></p>
                    <button type="submit" class="btn btn-outline-primary" disabled>download</button>
                @endif
            </div>
            <div class="vw-100 d-flex justify-content-center d-none d-lg-block">
                <img class="mx-auto" src="/img/bg.jpg" alt="Gembok" width="50%">
            </div>
        </div>
    </div>
</div>

<div class="list-coverdata">
    <h4 class="text-center" style="color: white">LIST COVER IMAGE</h4>
    
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @php
            $coverdata = CoverImage::all();
            @endphp
            
            @foreach ($coverdata as $cD)
            <div class="col">
                <div class="card h-20">
                    <img src="/storage/{{ $cD->url_lokal }}" class="card-img-top" alt="{{ $cD->url_lokal }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cD->namagambar }}</h5>
                        <small class="card-text">{{ $cD->namagambar }} merupakan sebuah gambar vektor karya {{ $cD->pencipta }}. {{ $cD->namagambar }} diterapkan dapat menampung pesan rahasia sebanyak {{ $cD->cap_payload_RDE }} karakter ASCII.</small>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted text-center d-block"><a href="{{ $cD->url_global }}" target="_blank"><i class="bi bi-link-45deg"></i> Link {{ $cD->namagambar }} original</a></small>
                    </div>
                </div>
            </div> 
            @endforeach
            
        </div>
    </div>
</div>

<script>
    function refresh(){
        setTimeout(() => {
            location.reload();
        }, 500);
    }
</script>
@endsection