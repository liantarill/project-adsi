<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mengelola Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .status-aktif {
            background-color: #d1f7c4;
            color: #28a745;
            padding: 4px 8px;
            border-radius: 10px;
            font-size: 0.75rem;
        }

        .status-nonaktif {
            background-color: #f8d7da;
            color: #dc3545;
            padding: 4px 8px;
            border-radius: 10px;
            font-size: 0.75rem;
        }

        .status-ditangguhkan {
            background-color: #fff3cd;
            color: #856404;
            padding: 4px 8px;
            border-radius: 10px;
            font-size: 0.75rem;
        }

        .avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #dee2e6;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-2 border-bottom">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand text-primary fw-bold" href="#">
                <span style="font-family: cursive;">logo</span>
            </a>

            <!-- Navigasi Tengah -->
            <div class="d-flex align-items-center gap-4">
                <a href="#" class="text-muted text-decoration-none">
                    <i class="bi-file-earmark-text me-1"></i> Meninjau Laporan
                </a>

                <div class="dropdown">
                    <a class="dropdown-toggle text-primary fw-semibold text-decoration-none" href="#"
                        role="button" data-bs-toggle="dropdown">
                        <i class="bi-person-circle me-1"></i> Mengelola Akun
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Akun Pelanggan</a></li>
                        <li><a class="dropdown-item" href="#">Akun Seniman</a></li>
                    </ul>
                </div>
            </div>

            <!-- User Info Kanan -->
            <div class="ms-auto d-flex align-items-center">
                <div class="text-end me-3">
                    <div class="fw-semibold">Admin Utama</div>
                    <small class="text-muted">admin@example.com</small>
                </div>
                <div class="bg-light rounded-circle p-2">
                    <i class="bi-person fs-5"></i>
                </div>
            </div>
        </div>
    </nav>
    <section class="container mt-4">
        <!-- Judul dan Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Mengelola Akun</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Akun Pelanggan</li>
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
                    @for ($i = 0; $i < 15; $i++)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>P-10025</td>
                            <td><span class="badge bg-primary-subtle text-primary rounded-circle me-2">BS</span> Budi
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
