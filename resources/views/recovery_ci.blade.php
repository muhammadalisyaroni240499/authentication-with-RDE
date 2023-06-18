<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
    
    {{-- font awesome --}}
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/themes/prism.min.css">
    <link rel="stylesheet" href="/css/bootstrap-image-checkbox.css">
    
    <title>{{ $tittle_page }}</title>
    
    <style>
        html,body{
            background-image: linear-gradient(#7209b7, #16007a);
            font-family: 'poppins';
            height: 100%;
        }
        .header{
            background-color: white;
            color: #212529;
            padding-bottom: 2vh;
            padding-top: 2vh;
        }
        .header .salam{
            font-weight: bolder;
        }
        .list-coverdata{
            background-image: linear-gradient(#45007a, #16007a);
            padding: 5vh;
        }
        .list-coverdata a{
            text-decoration: none;
            color: grey;
        }
        .hasil-PSNR{
            
        }




        .form-registration {
            background-color: rgba(255, 255, 255, 0.7);
            margin: 0;
            padding: 6%;
            height: 100%;
            border-radius: 10px;
        }
        
        .form-signin {
            background-color: rgba(255, 255, 255, 0.7);
            margin: 0;
            padding: 4%;
            height: 100%;
            border-radius: 10px;
        }
        
        
        .cont-custom {
            margin-top: 10vh;
            height: 100%;
        }
        
        .full-height {
            height: 100vh;
        }
        
        .form-signin .form-floating:focus-within {
            z-index: 2;
        }
        
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        
        .form-registration input {
            border-radius: 0;
            margin-bottom: 3px;
        }
        
    </style>
</head>
<body>
    @yield('container')
    <div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="cont-custom">
            <main class="form-registration">
                <h1 class="h3 fw-normal text-center">Pemulihan Stego Image</h1>
                <form action="{{ route('user.update', $user->slug_coverimage) }}" method="POST">
                    @method("PUT")
                    @csrf
                    <input type="hidden" name="url_name" value="{{ Route::currentRouteName() }}">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('namalengkap') is-invalid @enderror" name="namalengkap" id="namalengkap" placeholder="Name" value="{{ old('namalengkap', $user->namalengkap) }}" required>
                        <label for="namalengkap">Nama lengkap</label>
                        {{-- menangkap pesan error validate di controller --}}
                        @error('namalengkap')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email', $user->email) }}" required>
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
                                <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" id="tanggallahir" placeholder="Tanggal Lahir" value="{{ old('tanggallahir', $user->tanggallahir) }}" required>
                                <label for="tanggallahir">Tanggal Lahir</label>
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
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Simpan</button>
                </form>
            </main>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
