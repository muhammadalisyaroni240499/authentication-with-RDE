@extends('layouts')
@section('container')

@if (session()->has('login_error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top: 20px">
    {{ session('login_error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>    
@endif

    {{-- <div class="row justify-content-center" style="background-color: blanchedalmond">
        <div class="col-md-6">
                <main class="form-signin">
                    <form action="/login" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Masuk</h1>
                        <div class="mb-3">
                            <label for="coverimage" class="form-label">Gambar cover</label>
                            <img class="image_preview col-md-7 mb-3" >
                            <input class="form-control" type="file" id="coverimage" name="coverimage">
                            @error('coverimage')
                            <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                    </form>
                    <small class="d-block text-center mt-4">Belum daftar?
                        <a href="/register">
                            <span class="badge bg-info text-dark">Daftar sekarang!</span>
                            </a>
                        </small>
                        <br>
                    <small class="d-block text-center mt-0">Cover image hilang atau rusak?
                        <a href="/updatecoverimage">
                            <span class="badge bg-warning text-dark">Perbaharui cover image</span>
                        </a>
                    </small>
                </main>
        </div>
    </div> --}}

<div class="row align-items-center justify-content-md-center" style="height: 100vh">
    <div class="col-md-5 text-center">
        <main class="form-signin">
            <form action="/login" method="POST" enctype="multipart/form-data">
                @csrf
                <p class="h4 fw-bold text-center">Masuk</p>
                <div class="mb-3 text-md-start">
                    <label for="coverimage" class="form-label">Gambar cover</label>
                    <input class="form-control" type="file" id="coverimage" name="coverimage">
                    @error('coverimage')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
            </form>
                    
            <small class="d-block text-center mt-4">Belum daftar?
                <a href="/register">
                    <h6><span class="badge bg-info text-dark">Daftar sekarang!</span></h6>
                </a>
            </small>
            <br>
            <small class="d-block text-center mt-0">Cover image hilang atau rusak?
                <a href="/updatecoverimage">
                    <h6><span class="badge bg-warning text-dark">Perbaharui cover image</span></a></h6>
                </small>
            </main>
        </div>
    </div>
</div>

<script>
    function func_preview(){
        const image = document.querySelector('#coverimage');
        const preview_img = document.querySelector('.image_preview');

        preview_img.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent){
            preview_img.src = oFREvent.target.result;
        }
    }
</script>
@endsection