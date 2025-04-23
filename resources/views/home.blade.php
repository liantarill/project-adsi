<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- <link rel="stylesheet" href="styles.css"> --}}
    @vite(['resources/css/home.css'])

    <title>UTP</title>
</head>

<body>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-2">
        <a class="logo navbar-brand fw-bold text-primary" href="#">Artzin</a>

        <ul class="navbar-nav me-auto ms-4">
            <li class="nav-item">
                <a class="nav-link text-black" href="#"><i class="bi bi-house"></i> Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="#"><i class="bi bi-compass"></i> Jelajahi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="#"><i class="bi bi-cart"></i> Keranjang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="#"><i class="bi bi-person"></i> Profil</a>
            </li>
        </ul>

        <form class="d-flex me-3" style="flex: 1; max-width: 400px;">
            <div class="input-group">
                <span class="input-group-text bg-light border-0"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control border-0 bg-light" placeholder="Cari karya seni...">
                <button class="btn btn-light border-0" type="button"><i class="bi bi-sliders"></i></button>
            </div>
        </form>

        <a href="#" class="btn btn-primary me-3"><i class="bi bi-plus"></i> Jual Karya</a>
        <img src="Images/profie.jpg" class="rounded-circle" width="36" height="36" alt="Profil">
    </nav>

    <section class="hero-section text-start px-5">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="fw-bold display-5">Temukan Karya Seni Terbaik dari Seniman Indonesia</h1>
            <p class="lead mt-3">
                Koleksi eksklusif dari seniman berbakat dengan berbagai gaya dan medium seni yang unik.
            </p>
            <div class="mt-4 d-flex flex-wrap gap-3">
                <a href="#" class="btn btn-primary px-4 py-2">Jelajahi Koleksi</a>
                <a href="#" class="btn btn-light px-4 py-2">Tentang Kami</a>
            </div>
        </div>
    </section>

    <section class="kategori-seni container py-5">
        <h2 class="section-title mb-5">Kategori Seni</h2>

        <div class="section-card row">
            <div class="col-md-6 col-lg-3 ">
                <div class="card category-card text-center p-4">
                    <div class="card-body">
                        <img src="Images/cplusplus.png" alt="C++" class="img-fluid mb-2" style="height: 48px;">
                        <h3 class="category-title">Lukisan</h3>
                        <p class="category-count">1245 karya</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card category-card text-center p-4">
                    <div class="card-body">
                        <img src="Images/cplusplus.png" alt="C++" class="img-fluid mb-2" style="height: 48px;">
                        <h3 class="category-title">Patung</h3>
                        <p class="category-count">857 karya</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card category-card text-center p-4">
                    <div class="card-body">
                        <img src="Images/cplusplus.png" alt="C++" class="img-fluid mb-2" style="height: 48px;">
                        <h3 class="category-title">Digital Art</h3>
                        <p class="category-count">1532 karya</p>
                    </div>
                </div>
            </div>

            <!-- Fotografi -->
            <div class="col-md-6 col-lg-3">
                <div class="card category-card text-center p-4">
                    <div class="card-body">
                        <img src="Images/cplusplus.png" alt="C++" class="img-fluid mb-2" style="height: 48px;">

                        <h3 class="category-title">Fotografi</h3>
                        <p class="category-count">968 karya</p>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="karya-terbaru">
        <div class=" container py-5">
            <h2 class=" section-title">Karya Terbaru</h2>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card art-card overflow-hidden">
                        <img src=" Images/programming.png" class="art-image" alt="Harmoni Warna">
                        <div class="card-body">
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

                                <div>
                                    <button class="btn-like">
                                        <i class="bi bi-heart"></i>
                                    </button>

                                    <button class="btn-cart">
                                        <i class="f bi bi-cart text-light"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-4">
                    <div class="card art-card overflow-hidden">
                        <img src=" Images/programming.png" class="art-image" alt="Harmoni Warna">
                        <div class="card-body">
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

                                <div>
                                    <button class="btn-like">
                                        <i class="bi bi-heart"></i>
                                    </button>

                                    <button class="btn-cart">
                                        <i class="f bi bi-cart text-light"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-md-4 mb-4">
                    <div class="card art-card overflow-hidden">
                        <img src=" Images/programming.png" class="art-image" alt="Harmoni Warna">
                        <div class="card-body">
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

                                <div>
                                    <button class="btn-like">
                                        <i class="bi bi-heart"></i>
                                    </button>

                                    <button class="btn-cart">
                                        <i class="f bi bi-cart text-light"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-4">
                    <div class="card art-card overflow-hidden">
                        <img src=" Images/programming.png" class="art-image" alt="Harmoni Warna">
                        <div class="card-body">
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

                                <div>
                                    <button class="btn-like">
                                        <i class="bi bi-heart"></i>
                                    </button>

                                    <button class="btn-cart">
                                        <i class="f bi bi-cart text-light"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-md-4 mb-4">
                    <div class="card art-card overflow-hidden">
                        <img src=" Images/programming.png" class="art-image" alt="Harmoni Warna">
                        <div class="card-body">
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

                                <div>
                                    <button class="btn-like">
                                        <i class="bi bi-heart"></i>
                                    </button>

                                    <button class="btn-cart">
                                        <i class="f bi bi-cart text-light"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seniman-unggulan">
        <div class="container py-5">
            <h2 class="section-title mb-5">Seniman Unggulan</h2>

            <div class="section-card row">
                <div class="col-md-6 col-lg-3">
                    <div class="card top-artist-card text-center">
                        <div class="card-body">
                            <div class="top-artist-pict">
                                <img src="Images/profie.jpg" alt="C++">
                            </div>
                            <h3 class="top-artist-name">Ratna Dewi</h3>
                            <p class="top-artist-category">Lukisan Abstrak</p>

                            <div class="top-artist-social">
                                <a href="#" class="social-icon">
                                    <i class=" bi-instagram"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class=" bi-facebook"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class=" bi-globe"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card top-artist-card text-center">
                        <div class="card-body">
                            <div class="top-artist-pict">
                                <img src="Images/profie.jpg" alt="C++">
                            </div>
                            <h3 class="top-artist-name">Ratna Dewi</h3>
                            <p class="top-artist-category">Lukisan Abstrak</p>

                            <div class="top-artist-social">
                                <a href="#" class="social-icon">
                                    <i class=" bi-instagram"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class=" bi-facebook"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class=" bi-globe"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card top-artist-card text-center">
                        <div class="card-body">
                            <div class="top-artist-pict">
                                <img src="Images/profie.jpg" alt="C++">
                            </div>
                            <h3 class="top-artist-name">Ratna Dewi</h3>
                            <p class="top-artist-category">Lukisan Abstrak</p>

                            <div class="top-artist-social">
                                <a href="#" class="social-icon">
                                    <i class=" bi-instagram"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class=" bi-facebook"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class=" bi-globe"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card top-artist-card text-center">
                        <div class="card-body">
                            <div class="top-artist-pict">
                                <img src="Images/profie.jpg" alt="C++">
                            </div>
                            <h3 class="top-artist-name">Ratna Dewi</h3>
                            <p class="top-artist-category">Lukisan Abstrak</p>

                            <div class="top-artist-social">
                                <a href="#" class="social-icon">
                                    <i class=" bi-instagram"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class=" bi-facebook"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class=" bi-globe"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
    </section>



    <section class="Trending-saat-ini">
        <div class=" container py-5">
            <h2 class=" section-title">Terending Saat Ini</h2>

            <div class="overflow-scroll d-flex">
                <div class="trend-art mb-4">
                    <div class="card art-card overflow-hidden">
                        <img src=" Images/programming.png" class="art-image" alt="Harmoni Warna">
                        <div class="card-body">
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

                                <div>
                                    <button class="btn-like">
                                        <i class="bi bi-heart"></i>
                                    </button>

                                    <button class="btn-cart">
                                        <i class="f bi bi-cart text-light"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





                <div class="trend-art mb-4">
                    <div class="card art-card overflow-hidden">
                        <img src=" Images/programming.png" class="art-image" alt="Harmoni Warna">
                        <div class="card-body">
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

                                <div>
                                    <button class="btn-like">
                                        <i class="bi bi-heart"></i>
                                    </button>

                                    <button class="btn-cart">
                                        <i class="f bi bi-cart text-light"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





                <div class="trend-art mb-4">
                    <div class="card art-card overflow-hidden">
                        <img src=" Images/programming.png" class="art-image" alt="Harmoni Warna">
                        <div class="card-body">
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

                                <div>
                                    <button class="btn-like">
                                        <i class="bi bi-heart"></i>
                                    </button>

                                    <button class="btn-cart">
                                        <i class="f bi bi-cart text-light"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





                <div class="trend-art mb-4">
                    <div class="card art-card overflow-hidden">
                        <img src=" Images/programming.png" class="art-image" alt="Harmoni Warna">
                        <div class="card-body">
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

                                <div>
                                    <button class="btn-like">
                                        <i class="bi bi-heart"></i>
                                    </button>

                                    <button class="btn-cart">
                                        <i class="f bi bi-cart text-light"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>











            </div>
        </div>
    </section>


    <footer class=" text-light pt-5 pb-3">
        <div class="container">
            <div class="row">
                <!-- Logo & Deskripsi -->
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3 logo">Artzin</h5>
                    <p>Platform penjualan seni terdepan di Indonesia yang menghubungkan seniman berbakat dengan pecinta
                        seni dari seluruh dunia.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn social-footer btn-sm rounded-circle"><i class=" bi-instagram"></i></a>
                        <a href="#" class="btn social-footer btn-sm rounded-circle"><i class=" bi-facebook"></i></a>
                        <a href="#" class="btn social-footer btn-sm rounded-circle"><i class=" bi-twitter-x"></i></a>
                        <a href="#" class="btn social-footer btn-sm rounded-circle"><i class=" bi-youtube"></i></a>
                    </div>
                </div>

                <!-- Kategori -->
                <div class="col-md-2 mb-4">
                    <h5 class="mb-3">Kategori</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class=" text-decoration-none">Lukisan</a></li>
                        <li><a href="#" class=" text-decoration-none">Patung</a></li>
                        <li><a href="#" class=" text-decoration-none">Digital Art</a></li>
                        <li><a href="#" class=" text-decoration-none">Fotografi</a></li>
                        <li><a href="#" class=" text-decoration-none">Seni Grafis</a></li>
                        <li><a href="#" class=" text-decoration-none">Kerajinan</a></li>
                    </ul>
                </div>

                <!-- Tautan -->
                <div class="col-md-2 mb-4">
                    <h5 class="mb-3">Tautan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class=" text-decoration-none">Tentang Kami</a></li>
                        <li><a href="#" class=" text-decoration-none">Cara Kerja</a></li>
                        <li><a href="#" class=" text-decoration-none">Seniman</a></li>
                        <li><a href="#" class=" text-decoration-none">Pameran</a></li>
                        <li><a href="#" class=" text-decoration-none">Blog</a></li>
                        <li><a href="#" class=" text-decoration-none">Kontak</a></li>
                    </ul>
                </div>

                <!-- Berlangganan -->
                <div class="col-md-5 mb-4">
                    <h5 class="mb-3">Berlangganan</h5>
                    <p>Dapatkan info terbaru tentang pameran dan karya seni baru.</p>
                    <form class="d-flex mb-3">
                        <input type="email" class="form-control me-2" placeholder="Email Anda">
                        <button class="btn btn-primary" type="submit">Langganan</button>
                    </form>
                    <div class="d-flex gap-3">
                        <i class="bi bi-credit-card"></i>
                        <i class="bi bi-paypal"></i>
                        <i class="bi bi-cash-stack"></i>
                    </div>
                </div>
            </div>

            <hr class="bg-light">

            <div class="d-md-flex justify-content-between text-center">
                <p class="mb-0">&copy; 2025 Artzin. Hak Cipta Dilindungi.</p>
                <div>
                    <a href="#" class="text-light text-decoration-none me-3">Syarat & Ketentuan</a>
                    <a href="#" class="text-light text-decoration-none me-3">Kebijakan Privasi</a>
                    <a href="#" class="text-light text-decoration-none">Kebijakan Pengembalian</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>