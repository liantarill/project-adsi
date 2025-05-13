<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css'])

    <title>Artzin</title>
</head>

<body>

    <x-admin.navbar />
    <section class="container py-5 my-5">
        <h4 class="fw-semibold">Tinjauan Laporan Pelanggan</h4>

        <!-- Tabs -->
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link active" href="#">Akun Pelanggan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="#">Akun Seniman</a>
            </li>
        </ul>

        <!-- Search & Actions -->
        <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-2">
            <div class="d-flex gap-2">
                <div class="input-group w-auto">
                    <span class="input-group-text bg-white"><i class="bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Cari nama atau email...">
                </div>
                <button class="dropdownn btn btn-outline-secondary">
                    <div class="dropdown-toggle  text-decoration-none" href="#" role="button"
                        data-bs-toggle="dropdown">
                        Semua Status
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Semua Status</a></li>
                        <li><a class="dropdown-item" href="#">Menunggu Resoon</a></li>
                        <li><a class="dropdown-item" href="#">Sedang Ditangani</a></li>
                        <li><a class="dropdown-item" href="#">Selesai</a></li>
                        <li><a class="dropdown-item" href="#">Ditolak</a></li>
                    </ul>
                </button>
                <button class="btn btn-outline-secondary"><i class="bi-funnel"></i> Filter Laporan</button>
                <button class="btn btn-outline-secondary"><i class="bi-three-dots"></i> Aksi Massal</button>
            </div>
            <div class="d-flex gap-2 flex-wrap">

                <button class="btn btn-outline-secondary"><i class="bi-arrow-clockwise"></i> Refresh</button>
                <button class="btn btn-outline-secondary"><i class="bi-download"></i> Export</button>
                <button class="btn btn-primary"><i class="bi-plus"></i> Tambah Akun</button>
            </div>
        </div>

        <!-- Table -->
        <div class="table-responsive mt-4">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>ID Tiket</th>
                        <th>Pelapor</th>
                        <th>Deskripsi Masalah</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Tanggal Laporan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>LP-10035</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center"
                                    style="width: 32px; height: 32px; font-size: 0.8rem;">RW</div>
                                <div>
                                    <div>Rudi Wijaya</div>
                                    <div class="text-muted small">rudi.wijaya@gmail.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Aplikasi tidak dapat memproses pembayaran saat checkout</td>
                        <td>Pembayaran</td>
                        <td><span class="badge bg-warning text-dark">Sedang Ditangani</span></td>
                        <td>13 Mei 2025, 14:35</td>
                        <td><i class="bi-eye"></i></td>
                    </tr>
                    <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-between align-items-center mt-3">
            <div class="text-muted small">Menampilkan 5 dari 24 hasil</div>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                </ul>
            </nav>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
