
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="{{url('/')}}">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @guest
                @else
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="{{route('organigram.index')}}">Organigram</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="{{route('berita.index')}}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="{{route('tentang.index')}}">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="{{route('kontak.index')}}">Kontak</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="{{route('servis.index')}}">Servis</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="{{route('sparepart.index')}}">Sparepart</a>
                </li>

                @endguest

            </ul>
            @guest
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{url('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{url('register')}}">Register</a>
                    </li>
                </ul>
            </div>
            @else
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-disabled="true">{{Auth::user()->name}}</a>
                    </li>
                </ul>
                <button class="btn btn-sm btn-outline-warning" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Logout
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            @endguest

        </div>
    </div>
</nav>
