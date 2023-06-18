<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">Skripsi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <div class="container">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button ">{{ Auth()->user()->namalengkap }}</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/dashboard/test" class="dropdown-item">
                                    <i class="bi bi-check2-circle"></i> Uji
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::signedRoute('edit', ['user'=>Auth()->user()->slug_coverimage]) }}" class="dropdown-item"><i class="bi bi-pencil-square"></i> Edit</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                    {{-- <a class="dropdown-item" href="#">Separated link</a> --}}
                                </form>
                            </li>
                        </ul>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>
