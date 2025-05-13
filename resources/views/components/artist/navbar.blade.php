@php
    function activeMenu($routeName)
    {
        return request()->routeIs($routeName) ? 'purple fw-semibold' : 'text-muted';
    }
@endphp

<nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-2">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold logo" href="#">Artzin</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="nav-link {{ activeMenu('') }}" href="#">Dashboard</a>
                <a class="nav-link {{ activeMenu('my-katalog') }}" href="{{ route('my-katalog') }}">Katalog</a>
                <a class="nav-link {{ activeMenu('order') }}" href="{{ route('order') }}">Pesanan</a>
                <a class="nav-link {{ activeMenu('') }}" href="#">Pelanggan</a>
                <a class="nav-link {{ activeMenu('report') }}" href="{{ route('report') }}">Laporan</a>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <!-- Notification -->
                <div class="position-relative bg-dark ">
                    <i class="bi bi-bell fs-5"></i>
                    <span
                        class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </div>

                <!-- User Profile -->
                <div class="d-flex align-items-center">
                    <img src="{{ asset('Images/profie.jpg') }}" alt="Profile" class="rounded-circle me-2"
                        width="36" height="36">
                    <div>
                        <div class="fw-semibold small text-dark">Budi Santoso</div>
                        <div class="text-muted small">Seniman</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
