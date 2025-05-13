<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css'])

    <title>report</title>
</head>

<body>

    <x-artist.navbar />
    <div class="container py-5 mt-5">
        <h4 class="fw-bold mb-3">Data Pelanggan</h4>
        <p>Kelola data pelanggan dan riwayat transaksi</p>

        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Total Pelanggan Aktif</small>
                            <h5 class="mb-1 fw-bold">1,248</h5>
                            <p class="text-success mb-0 small">↑ 16.5% vs bulan lalu</p>
                        </div>
                        <div
                            class="total-pelanggan-logo rounded-circle d-flex justify-content-center align-items-center">
                            <i class="bi bi-person text-purple fs-5"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small>Pelanggan Baru</small>
                            <h5 class="mb-0 fw-bold">42</h5>
                            <p class="text-danger mb-0 small">↓ 8.3% vs bulan lalu</p>
                        </div>
                        <div
                            class="pelanggan-baru-logo rounded-circle d-flex justify-content-center align-items-center">
                            <i class="bi bi-person-plus fs-5"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small>Rata-rata Transaksi</small>
                            <h5 class="mb-0 fw-bold">Rp 2.058.333</h5>
                            <p class="text-success mb-0 small">↑ 2.1% vs bulan lalu</p>
                        </div>
                        <div
                            class="rata-transaksi-logo rounded-circle d-flex justify-content-center align-items-center">
                            <i class="bi bi-currency-dollar fs-5"></i>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small>Total Transaksi</small>
                            <h5 class="mb-0 fw-bold">86</h5>
                            <p class="text-success mb-0 small">↑ 12.5% vs bulan lalu</p>
                        </div>
                        <div class="total-trans-logo rounded-circle d-flex justify-content-center align-items-center">
                            <i class="bi bi-bag fs-5"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Pelanggan</h5>
                <input type="search" class="form-control w-auto" placeholder="Cari pelanggan...">
            </div>
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Pelanggan</th>
                            <th>Email/Telepon</th>
                            <th>Total Transaksi</th>
                            <th>Total Pembelian</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-avatar">
                                <img src="{{ asset('Images/profie.jpg') }}" alt="avatar">
                                <div>
                                    <strong>Anindita Pratiwesti</strong><br>
                                    <small>Bergabung 12 Mei 2024</small>
                                </div>
                            </td>
                            <td>anindita@gmail.com<br><small>+62 812-3456-7890</small></td>
                            <td>6</td>
                            <td>Rp 8.750.000</td>
                            <td class="status-aktif">Aktif</td>
                            <td>
                                <i class="bi bi-eye-fill me-2 fs-5"></i>
                                <i class="bi bi-pencil-square text-muted fs-5"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-avatar">
                                <img src="{{ asset('Images/profie.jpg') }}" alt="avatar">
                                <div>
                                    <strong>Putu Wijaya</strong><br>
                                    <small>Bergabung 3 Jan 2023</small>
                                </div>
                            </td>
                            <td>putu.wijaya@yahoo.com<br><small>+62 878-5432-1098</small></td>
                            <td>8</td>
                            <td>Rp 12.500.000</td>
                            <td class="status-aktif">Aktif</td>
                            <td>
                                <i class="bi bi-eye-fill me-2 fs-5"></i>
                                <i class="bi bi-pencil-square text-muted fs-5"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-avatar">
                                <img src="{{ asset('Images/profie.jpg') }}" alt="avatar">
                                <div>
                                    <strong>Reza Firmansyah</strong><br>
                                    <small>Bergabung 18 Mar 2024</small>
                                </div>
                            </td>
                            <td>reza.f@gmail.com<br><small>+62 856-7890-1234</small></td>
                            <td>12</td>
                            <td>Rp 3.200.000</td>
                            <td class="status-aktif">Aktif</td>
                            <td>
                                <i class="bi bi-eye-fill me-2 fs-5"></i>
                                <i class="bi bi-pencil-square text-muted fs-5"></i>
                            </td>

                        </tr>
                        <tr>
                            <td class="table-avatar">
                                <img src="{{ asset('Images/profie.jpg') }}" alt="avatar">
                                <div>
                                    <strong>Sri Wahyuni</strong><br>
                                    <small>Bergabung 5 Feb 2024</small>
                                </div>
                            </td>
                            <td>sri.w@outlook.com<br><small>+62 821-0987-6543</small></td>
                            <td>5</td>
                            <td>Rp 6.800.000</td>
                            <td class="status-tidak-aktif">Tidak Aktif</td>
                            <td>
                                <i class="bi bi-eye-fill me-2 fs-5"></i>
                                <i class="bi bi-pencil-square text-muted fs-5"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-avatar">
                                <img src="{{ asset('Images/profie.jpg') }}" alt="avatar">
                                <div>
                                    <strong>Agus Setiawan</strong><br>
                                    <small>Bergabung 27 Nov 2023</small>
                                </div>
                            </td>
                            <td>agus.setiawan@gmail.com<br><small>+62 813-2345-6789</small></td>
                            <td>7</td>
                            <td>Rp 4.500.000</td>
                            <td class="status-tunda">Tertunda</td>
                            <td>
                                <i class="bi bi-eye-fill me-2 fs-5"></i>
                                <i class="bi bi-pencil-square text-muted fs-5"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <x-customer.footer />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
