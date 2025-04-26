<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css'])

    <title>Katalog</title>
</head>

<body>

    <x-customer.navbar />
    <section class="mt-5 py-5">
        <h2 class="ps-4">Keranjang Belanja</h2>
        <div class="cart-container d-flex justify-content-between p-4">

            <!-- Produk -->
            <div class="cart-items w-70">
                <!-- Item -->
                <div class="cart-item d-flex p-3 mb-3 bg-white rounded shadow-sm">
                    <img src="{{ asset('images/Github.png') }}" class="rounded" width="100" height="100"
                        alt="Produk">
                    <div class="ms-3 d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="fw-bold">Padang</h5>
                            <p class="text-muted small">Oleh Budi Santoso</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-light">-</button>
                            <input type="text" value="1" class="form-control text-center mx-2"
                                style="width: 50px;">
                            <button class="btn btn-light">+</button>
                        </div>
                    </div>
                    <div class="ms-auto text-end">
                        <p class="fw-bold">Rp 2.500.000</p>
                        <p class="text-primary">Subtotal: Rp 2.500.000</p>
                        <button class="btn btn-link text-danger small">Hapus</button>
                    </div>
                </div>
                <!-- Tambahkan item lainnya -->
            </div>

            <!-- Ringkasan -->
            <div class="cart-summary w-30 p-4 bg-white rounded shadow-sm">
                <h5>Ringkasan Pembelian</h5>
                <div class="d-flex justify-content-between mt-3">
                    <span>Subtotal (4 item)</span>
                    <span>Rp 19.100.000</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Biaya Pengiriman</span>
                    <span>Rp 150.000</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Asuransi Pengiriman</span>
                    <span>Rp 100.000</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between fw-bold">
                    <span>Total</span>
                    <span class="text-primary">Rp 19.350.000</span>
                </div>
                <input type="text" placeholder="Masukkan kode promo" class="form-control mt-3">
                <button class="btn btn-primary w-100 mt-3">Proses Checkout</button>
                <button class="btn btn-outline-secondary w-100 mt-2">Lanjutkan Belanja</button>
            </div>

        </div>
    </section>
    <x-customer.footer />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
