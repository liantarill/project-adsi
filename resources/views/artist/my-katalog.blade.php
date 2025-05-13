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
    <section class="py-4 mt-5">
        <div class="container ">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h4 class="fw-bold">Karya Saya</h4>
                    <p class="text-muted mb-0">Kelola semua karya seni yang telah Anda upload</p>
                </div>
                <a href="#" class="btn btn-purple">+ Tambah Karya Baru</a>
            </div>

            <div class="row g-4">
                <div class="col-md-4 mb-4">
                    <div class="card art-card overflow-hidden h-100 ">
                        <div class="position-relative">
                            <img src="Images/programming.png" class="art-image card-img-top object-fit-cover"
                                alt="Harmoni Warna" style="height: 200px;">
                            <a href="/detail-karya" class="stretched-link"></a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-success">Tersedia</span>
                                <span class="badge bg-purple">Lukisan</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0 fw-bold art-title">Harmoni Warna</h5>
                                <div class="rating d-flex">
                                    <i class="text-warning bi-star-fill"></i>
                                    <div class="art-rating">4.8</div>
                                </div>
                            </div>
                            <p class="art-artist">Oleh Lian Ganteng</p>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold art-price mb-0">Rp 2.500.000</p>
                                <p class="text-muted small mb-2">Stok: 8</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-outline-secondary btn-sm">Detail</a>
                                <div class="dropdown">
                                    <button class="btn btn-light btn-sm" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            {{-- <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-outline-secondary btn-sm">Detail</a>
                <div class="dropdown">
                    <button class="btn btn-light btn-sm" data-bs-toggle="dropdown">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
                    </ul>
                </div>
            </div> --}}


            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <small class="text-muted">Menampilkan 1–6 dari 42 karya</small>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link">&laquo;</a></li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </nav>
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
