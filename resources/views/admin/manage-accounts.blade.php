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
    <section class="container py-5 mt-4">
        <!-- Judul dan Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="">
                        <a class="text-decoration-none text-muted" href="#">Beranda</a>
                    </li>
                    <li>
                        <i class="bi-chevron-right text-muted"></i>
                        <a class="text-decoration-none text-muted" href="#">Mengelola Akun</a>
                    </li>
                    <li aria-current="page text-purple">
                        <i class="bi-chevron-right text-muted"></i>
                        <span class="text-purple">Akun Pelanggan</span>
                    </li>
                </ol>
            </nav>
            <h4 class="fw-bold">Mengelola Akun</h4>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="#">Akun Pelanggan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Akun Seniman</a>
            </li>
        </ul>

        <!-- Search & Actions -->
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
            <div class="d-flex gap-2 flex-wrap">
                <div class="input-group">
                    <span class="input-group-text bg-white"><i class="bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Cari nama atau email...">
                </div>
                <select class="form-select">
                    <option>Semua Status</option>
                    <option>Aktif</option>
                    <option>Nonaktif</option>
                    <option>Ditangguhkan</option>
                </select>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary"><i class="bi-filter"></i> Filter Lanjutan</button>
                <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Aksi Massal</button>
            </div>
        </div>

        <!-- Tabel -->
        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>ID Akun</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Status</th>
                        <th>Tanggal Registrasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh Baris -->
                    @for ($i = 0; $i < 8; $i++)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>P-10025</td>
                            <td><span class="badge bg-purple-subtle text-purple rounded-circle me-2">BS</span> Budi
                                Santoso</td>
                            <td>budi.santoso@gmail.com</td>
                            <td>+62 812-3456-7890</td>
                            <td><span class="badge bg-success-subtle text-success">Aktif</span></td>
                            <td>12 Mei 2025</td>
                            <td>
                                <a href="#" class="text-secondary me-2"><i class="bi-pencil"></i></a>
                                <div class="form-check form-switch d-inline">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                                <a href="#" class="text-danger ms-2"><i class="bi-trash"></i></a>
                            </td>

                        <tr>
                            <td><input type="checkbox"></td>
                            <td>P-10025</td>
                            <td><span class="badge bg-purple-subtle text-purple rounded-circle me-2">BS</span> Budi
                                Santoso</td>
                            <td>budi.santoso@gmail.com</td>
                            <td>+62 812-3456-7890</td>
                            <td><span class="badge status-ditangguhkan">Ditangguhkan</span></td>
                            <td>12 Mei 2025</td>
                            <td>
                                <a href="#" class="text-secondary me-2"><i class="bi-pencil"></i></a>
                                <div class="form-check form-switch d-inline">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                                <a href="#" class="text-danger ms-2"><i class="bi-trash"></i></a>
                            </td>
                        </tr>
                        </tr>
                    @endfor
                    <!-- Tambahkan baris lain sesuai data -->
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-between mt-3">
            <small class="text-muted">Menampilkan 1 sampai 5 dari 24 hasil</small>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link">‹</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">›</a></li>
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
