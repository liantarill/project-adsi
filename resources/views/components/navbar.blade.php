<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-2">
    <a class="logo navbar-brand fw-bold " href="#">Artzin</a>

    <ul class="navbar-nav me-auto ms-4">
        <li class="nav-item">
            <a class="nav-link text-black" href="{{ route('home') }}"><i class="bi bi-house"></i> Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="#"><i class="bi bi-compass"></i> Jelajahi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="#"><i class="bi bi-cart"></i> Keranjang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="{{ route('profile') }}"><i class="bi bi-person"></i> Profil</a>
        </li>
    </ul>

    <form class="d-flex me-3" style="flex: 1; max-width: 400px;">
        <div class="input-group">
            <span class="input-group-text bg-light border-0"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control border-0 bg-light" placeholder="Cari karya seni...">
            <button class="btn btn-light border-0" type="button"><i class="bi bi-sliders"></i></button>
        </div>
    </form>

    <a href="#" class="btn btn-jual me-3"><i class="bi bi-plus"></i> Jual Karya</a>
    {{-- <img src="Images/profie.jpg" class="rounded-circle" width="36" height="36" alt="Profil"> --}}
    <a href="{{ route('profile') }}" class="d-flex align-items-center">
        <img src="{{ asset('Images/profie.jpg') }}" class="rounded-circle" width="36" height="36" alt="Profil">
    </a>
</nav>