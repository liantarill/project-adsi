<nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-2 border-bottom">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand text-purple fw-bold" href="#">
            <span class="logo">Artzin</span>
        </a>

        <!-- Navigasi Tengah -->
        <div class="d-flex align-items-center gap-4">
            <a href="{{ route('admin.reports') }}"
                class="text-decoration-none {{ request()->routeIs('admin.reports') ? 'text-purple fw-semibold' : 'text-muted' }}">
                <i class="bi-file-earmark-text me-1"></i> Meninjau Laporan
            </a>

            <a href="{{ route('admin.manage-accounts') }}"
                class="text-decoration-none {{ request()->routeIs('admin.manage-accounts') ? 'text-purple fw-semibold' : 'text-muted' }}">
                <i class="bi-person-circle me-1"></i> Mengelola Akun
            </a>
        </div>

        <!-- User Info Kanan -->
        <div class="ms-auto d-flex align-items-center">
            <div class="text-end me-3">
                <div class="text-dark fw-semibold">Admin Utama</div>
                <small class="text-muted">admin@example.com</small>
            </div>
            <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                style="width: 40px; height: 40px;">
                <i class="bi-person fs-5 text-purple"></i>
            </div>
        </div>
    </div>
</nav>
