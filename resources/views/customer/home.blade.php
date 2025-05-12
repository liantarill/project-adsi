<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite('resources/css/app.css')

    <title>Home</title>
</head>

<body>

    <x-customer.navbar />
    <x-customer.chat-button />


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

                <a href="{{ route('katalog') }}" class="text-decoration-none col-md-4 mb-4">
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
                </a>



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


    <x-customer.footer />



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
