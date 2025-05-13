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

    <x-artist.navbar />

    <div class="px-4 py-5 mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Daftar Pesanan</h2>
            <button class="btn btn-purple"><i class="bi-file-earmark-arrow-down"></i> Ekspor Data</button>
        </div>

        <div class="card p-4">
            <div class="row mb-3">
                <div class="col-md-8">
                    <input type="text" class="form-control"
                        placeholder="Cari pesanan berdasarkan ID, nama pelanggan, atau karya seni...">
                </div>
                <div class="col-md-2">
                    <select class="form-select">
                        <option>Status Pesanan</option>
                        <option>Lunas</option>
                        <option>Menunggu</option>
                        <option>Dibatalkan</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="date" class="form-control">
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light thead-order">
                        <tr>
                            <th scope="col"><input type="checkbox"></th>
                            <th scope="col">ID PESANAN <i class="bi-arrow-down-up"></i> </th>
                            <th scope="col">TANGGAL <i class="bi-arrow-down-up"></i></th>
                            <th scope="col">PELANGGAN <i class="bi-arrow-down-up"></i></th>
                            <th scope="col">KARYA SENI <i class="bi-arrow-down-up"></i></th>
                            <th scope="col">TOTAL <i class="bi-arrow-down-up"></i></th>
                            <th scope="col">STATUS PEMBAYARAN</th>
                            <th scope="col">STATUS PENGIRIMAN</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td class="order-id">#ORD-9385</td>
                            <td>
                                <div class="order-date">23 Apr 2025</div>
                                <small class="text-muted order-time">14:32 WIB</small>
                            </td>
                            <td>
                                <div class="cust-username">Ratna Dewi</div>
                                <small class="text-muted cust-gmail">ratna@email.com</small>
                            </td>
                            <td>
                                <div class="art-name">Harmoni Bali</div>
                                <small class="text-muted art-type">Lukisan</small>
                            </td>
                            <td class="fw-bold order-total">Rp 12.500.000</td>
                            <td><span class="badge  payment-status">Lunas</span></td>
                            <td><span class="badge shipping-status">Dikirim</span></td>
                            <td>
                                <button class="btn btn-sm btn-light"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-sm btn-light"><i class="bi bi-pencil"></i></button>
                            </td>
                        </tr>


                        <!-- Tambahkan baris lainnya jika mau -->
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <small>Menampilkan 1-6 dari 24 pesanan</small>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                    </ul>
                </nav>
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
