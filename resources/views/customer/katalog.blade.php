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
    <x-customer.chat-button />

    <div class="container py-5 mt-5">

        <a href="{{ route('home') }}" class="btn-kembali text-decoration-none  mb-3 d-inline-block"><i
                class="bi-arrow-left"></i>
            Kembali ke Beranda</a>

        <!-- Product detail -->
        <div class="row align-items-start gy-4">
            <!-- Image -->
            <div class="col-md-6">
                <img src="{{ asset('images/javascript.png') }}" alt="Elephant" class="img-fluid rounded shadow-sm">
            </div>

            <!-- Info -->
            <div class="col-md-6">
                <h4>Elephant</h4>
                <div class="mb-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                    <small class="text-muted">(150 Reviews)</small>
                    <span class="text-success ms-2">| In Stock</span>
                </div>
                <h5 class="fw-bold">Rp 5.800.000</h5>
                <p class="text-muted">Elephant sculpture High quality</p>

                <!-- Quantity & Buy -->
                <div class="d-flex align-items-center gap-2 mb-3">
                    <button class="btn btn-outline-secondary">−</button>
                    <input type="text" class="form-control text-center" value="1" style="width: 60px;">
                    <button class="btn btn-outline-secondary">+</button>
                    <button class="btn btn-danger flex-grow-1">Buy Now</button>
                    <button class="btn btn-outline-secondary">
                        <i class="bi bi-cart"></i>
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="bi bi-chat"></i>
                    </button>
                </div>

                <!-- Delivery Info -->
                <div class="border p-3 rounded">
                    <p class="mb-1 fw-bold">Free Delivery</p>
                    <p class="mb-2"><a href="#">Enter your postal code</a> for Delivery Availability</p>
                    <p class="mb-1 fw-bold">Return Delivery</p>
                    <p>Free 30 Days Delivery Returns. <a href="#">Details</a></p>
                </div>
            </div>
        </div>

        <!-- Rekomendasi -->
        <div class="mt-5">
            <h5 class="mb-3">Rekomendasi untuk Anda</h5>
            <div class="row g-3">
                <!-- Card -->
                <div class="col-6 col-md-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/javascript.png') }}" class="card-img-top" alt="Lisa Big L">
                        <div class="card-body">
                            <h6 class="card-title mb-0">Lisa Big L</h6>
                            <small class="text-muted">Oleh Sri Mulyani</small>
                            <div class="d-flex justify-content-between mt-2">
                                <span class="text-warning small">&#9733; 4.9</span>
                                <span class="fw-semibold">Rp 3.800.000</span>
                            </div>
                        </div>
                        <div class="card-footer text-end bg-white border-0">
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tambah 3 card lainnya dengan struktur yang sama -->
                <div class="col-6 col-md-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/javascript.png') }}" class="card-img-top" alt="Lisa Big L">
                        <div class="card-body">
                            <h6 class="card-title mb-0">Lisa Big L</h6>
                            <small class="text-muted">Oleh Sri Mulyani</small>
                            <div class="d-flex justify-content-between mt-2">
                                <span class="text-warning small">&#9733; 4.9</span>
                                <span class="fw-semibold">Rp 3.800.000</span>
                            </div>
                        </div>
                        <div class="card-footer text-end bg-white border-0">
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- ... -->
            </div>
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
