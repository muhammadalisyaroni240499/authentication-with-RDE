@extends('dashboard.layout')
@section('container')
<div class="container mt-4 border p-3">
    <nav style="color: black">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Fidelity</button>
            {{-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Robustness</button> --}}
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Capacity</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="container">
                <form action="/dashboard/test/fidelity" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-4">
                        <label for="formFile" class="form-label">Cover image</label>
                        <input class="form-control" type="file" id="formFile" name="coverimage">
                    </div>
                    @php
                    use App\Models\CoverImage;
                    @endphp
                    <input type="hidden" value="{{ CoverImage::find(Auth()->user()->coverimage)->url_lokal }}" name="originalImage">
                    <button type="submit" class="btn btn-primary">Uji PSNR</button>
                </form>
                
                @if (session()->has('hasil_psnr'))    
                <div class="hasil-PSNR mt-4">
                    <h6>Hasil Uji PSNR adalah {{ session('hasil_psnr') }} dB</h6>
                </div>
                @endif
            </div>
        </div>
        {{-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Robustness</div> --}}
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 m-2">
                    @php
                    $coverdata = CoverImage::all();
                    @endphp
                    
                    @foreach ($coverdata as $cD)
                    <div class="col-4">
                        <div class="card h-10">
                            <img src="/storage/{{ $cD->url_lokal }}" class="card-img-top" alt="{{ $cD->url_lokal }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $cD->namagambar }}</h5>
                                <small>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">RDE</th>
                                                <th scope="col">DE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Kapasitas Total</th>
                                                <td>{{ $cD->cap_all_RDE }} bit</td>
                                                <td>{{ $cD->cap_all_DE }} bit</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kapasitas Location Map</th>
                                                <td>{{ $cD->cap_locmap_RDE }} bit</td>
                                                <td>{{ $cD->cap_locmap_DE }} bit</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kapasitas Payload</th>
                                                <td>{{ $cD->cap_payload_RDE }} karakter</td>
                                                <td>{{ $cD->cap_payload_DE }} karakter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </small>
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
    </div>
</div>

@endsection