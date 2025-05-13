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

    <x-customer.navbar />
    <x-customer.chat-button />

    <section class="mt-4 py-5">
        <div class="cart-container justify-content-between p-4">

            <!-- Header -->
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('cart') }}" class="btn-kembali text-decoration-none  mb-3 d-inline-block"><i
                        class="bi-arrow-left"></i>
                    Kembali ke Keranjang</a>
                <h4>Checkout</h4>
            </div>

            <!-- Alamat Pengiriman -->
            <div class="card p-3 mb-4">
                <h6>Alamat Pengiriman</h6>
                <p><i class="bi bi-geo-alt-fill"></i> Nanang<br>
                    Sabana Fried Chicken (di depan padel tenis), KOTA BANDAR LAMPUNG KEDAMAIAN, LAMPUNG, ID 35122</p>
                <button class="btn btn-outline-primary">Ubah</button>
            </div>

            <!-- Produk Dipesan -->
            <div class="card p-3 mb-4">
                <h6>Produk Dipesan</h6>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                            <th>Subtotal Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Harmoni Warna</td>
                            <td>Rp 2.500.000</td>
                            <td>1</td>
                            <td>Rp 2.500.000</td>
                        </tr>
                        <tr>
                            <td>Spiderman FG</td>
                            <td>Rp 3.200.000</td>
                            <td>1</td>
                            <td>Rp 3.200.000</td>
                        </tr>
                        <tr>
                            <td>Elephant</td>
                            <td>Rp 5.800.000</td>
                            <td>2</td>
                            <td>Rp 11.600.000</td>
                        </tr>
                        <tr>
                            <td>Aesthetic picture</td>
                            <td>Rp 1.800.000</td>
                            <td>1</td>
                            <td>Rp 1.800.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Metode Pembayaran -->
            <div class="card p-3 mb-4">
                <h6>Metode Pembayaran</h6>
                <form>
                    <div class="form-check d-flex align-items-center mb-2">
                        <input class="form-check-input me-2 " type="radio" name="bankOption" id="bca" checked>
                        <label class="form-check-label  d-flex align-items-center" for="bca">
                            <img src="{{ asset('images/bank/bca_logo.svg') }}" alt="BCA" width="40"
                                class=" me-2">
                            Bank BCA
                        </label>
                    </div>
                    <div class="form-check d-flex align-items-center mb-2">
                        <input class="form-check-input me-2" type="radio" name="bankOption" id="mandiri">
                        <label class="form-check-label d-flex align-items-center" for="mandiri">
                            <img src="{{ asset('images/bank/mandiri_logo.svg') }}" alt="Mandiri" width="40"
                                class="me-2">
                            Bank Mandiri
                        </label>
                    </div>
                    <div class="form-check d-flex align-items-center mb-2">
                        <input class="form-check-input me-2" type="radio" name="bankOption" id="mandiri">
                        <label class="form-check-label d-flex align-items-center" for="mandiri">
                            <img src="{{ asset('images/bank/bri_logo.svg') }}" alt="Mandiri" width="40"
                                class="me-2">
                            Bank Rakyat Indonesia
                        </label>
                    </div>
                    <div class="form-check d-flex align-items-center mb-2">
                        <input class="form-check-input me-2" type="radio" name="bankOption" id="mandiri">
                        <label class="form-check-label d-flex align-items-center" for="mandiri">
                            <img src="{{ asset('images/bank/bni_logo.svg') }}" alt="Mandiri" width="40"
                                class="me-2">
                            Bank Negara Indonesia
                        </label>
                    </div>
                    <!-- Tambah bank lain sesuai kebutuhan -->

                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="codRadio">
                        <label class="form-check-label" for="codRadio">Cash On Delivery</label>
                    </div>
                </form>
            </div>

            <!-- Ringkasan Pembelian -->
            <div class="card p-3 mb-4">
                <h6>Ringkasan Pembelian</h6>
                <table class="table table-borderless">
                    <tr>
                        <td>Subtotal (4 item)</td>
                        <td class="text-end">Rp 19.100.000</td>
                    </tr>
                    <tr>
                        <td>Biaya Pengiriman</td>
                        <td class="text-end">Rp 150.000</td>
                    </tr>
                    <tr>
                        <td>Asuransi Pengiriman</td>
                        <td class="text-end">Rp 100.000</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td class="text-end"><strong>Rp 19.350.000</strong></td>
                    </tr>
                </table>
            </div>

            <!-- Action Buttons -->
            <div class="d-flex justify-content-between">
                <button class="btn btn-purple">Bayar Sekarang</button>
                <button class="btn btn-outline-secondary">Lanjutkan Belanja</button>
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
