@php
    $produkList = [
        [
            'judul' => 'Flow of Thought – Abstract Stone Sculpture',
            'gambar' => 'images/artworks/abstract.jpeg',
            'rating' => 4.8,
            'artist' => 'Lian',
            'harga' => 'Rp 800.000',
        ],
        [
            'judul' => 'Kucing Perunggu',
            'gambar' => 'images/artworks/cat.jpeg',
            'rating' => 4.6,
            'artist' => 'Dewi Citra',
            'harga' => 'Rp 1.800.000',
        ],
        [
            'judul' => 'Dimensi Gelap',
            'gambar' => 'images/artworks/digital.jpeg',
            'rating' => 4.9,
            'artist' => 'Bayu Cahaya',
            'harga' => 'Rp 3.000.000',
        ],
    ];

    $categories = [
        [
            'title' => 'Lukisan',
            'count' => 1245,
            'pict' => 'Images/painting.svg',
        ],
        [
            'title' => 'Patung',
            'count' => 857,
            'pict' => 'Images/statue.svg',
        ],
        [
            'title' => 'Digital Art',
            'count' => 1532,
            'pict' => 'Images/digitalart.svg',
        ],
        [
            'title' => 'Fotografi',
            'count' => 968,
            'pict' => 'Images/photography.svg',
        ],
    ];

    $colors = ['#EFF6FF', '#FAF5FF', '#F0FDF4', '#FFFBEB'];

    $top_artists = [
        [
            'image' => 'images/lian.jpg',
            'name' => 'Lian',
            'category' => 'Digital Arts',
            'instagram' => 'https://www.instagram.com/lianttaril',
        ],
        [
            'image' => 'images/lian.jpg',
            'name' => 'Zidan',
            'category' => 'Painting Arts',
            'instagram' => 'https://www.instagram.com/lianttaril',
        ],
        [
            'image' => 'images/lian.jpg',
            'name' => 'Bintang',
            'category' => 'Sculpture Arts',
            'instagram' => 'https://www.instagram.com/lianttaril',
        ],
        [
            'image' => 'images/lian.jpg',
            'name' => 'Randi',
            'category' => 'Music',
            'instagram' => 'https://www.instagram.com/lianttaril',
        ],
    ];

@endphp



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite('resources/css/app.css')

    <title>Artzin</title>
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
                <a href="#" class="btn btn-purple px-4 py-2">Jelajahi Koleksi</a>
                <a href="#" class="btn btn-light px-4 py-2">Tentang Kami</a>
            </div>
        </div>
    </section>

    <section class="kategori-seni container py-5">
        <h2 class="section-title mb-5">Kategori Seni</h2>

        <div class="section-card row">
            @foreach ($categories as $index => $category)
                <div class="col-md-6 col-lg-3">
                    <div class="card category-card text-center"
                        style="background-color: {{ $colors[$index % count($colors)] }};">
                        <div class="card-body ">
                            <!-- Circle behind the image -->
                            <div class="position-relative d-flex justify-content-center mb-3">
                                <div class="rounded-circle bg-white d-flex align-items-center justify-content-center"
                                    style="width: 64px; height: 64px;">
                                    <img src="{{ asset($category['pict']) }}" alt="{{ $category['title'] }}"
                                        class="img-fluid" style="max-width: 60px; max-height: 60px;">
                                </div>
                            </div>
                            <h3 class="category-title">{{ $category['title'] }}</h3>
                            <p class="category-count">{{ $category['count'] }} karya</p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>

    <section class="karya-terbaru">
        <div class=" container py-5">
            <h2 class=" section-title">Karya Terbaru</h2>

            <div class="row">

                @foreach ($produkList as $produk)
                    <div class="col-md-4 mb-4">
                        <div class="card art-card overflow-hidden">
                            <!-- Clickable part (image + title) wrapped in <a> -->
                            <a href="{{ route('katalog') }}" class="text-decoration-none text-dark">
                                <img src="{{ asset($produk['gambar']) }}" class="art-image"
                                    alt="{{ $produk['judul'] }}">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h5 class="mb-0 fw-bold art-title">{{ $produk['judul'] }}</h5>
                                        <div class="rating d-flex">
                                            <i class="text-warning bi-star-fill"></i>
                                            <div class="art-rating">{{ $produk['rating'] }}</div>
                                        </div>
                                    </div>
                                    <p class="art-artist">Oleh {{ $produk['artist'] }}</p>
                                </div>
                            </a>

                            <!-- Non-clickable footer (price + buttons) -->
                            <div class="card-footer bg-transparent border-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="fw-bold art-price mb-0">{{ $produk['harga'] }}</p>
                                    <div>
                                        <button class="btn-like">
                                            <i class="bi bi-heart"></i>
                                        </button>
                                        <button class="btn-cart">
                                            <i class="bi bi-cart text-light"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
    </section>

    <section class="seniman-unggulan">
        <div class="container py-5">
            <h2 class="section-title mb-5">Seniman Unggulan</h2>

            <div class="section-card row">
                @foreach ($top_artists as $top)
                    <div class="col-md-6 col-lg-3">
                        <div class="card top-artist-card text-center">
                            <div class="card-body">
                                <div class="top-artist-pict">
                                    <img src="{{ asset($top['image']) }}" alt="Top Artist">
                                </div>
                                <h3 class="top-artist-name">{{ $top['name'] }}</h3>
                                <p class="top-artist-category">{{ $top['category'] }}</p>

                                <div class="top-artist-social">
                                    <a href="{{ $top['instagram'] }}" class="social-icon">
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
                @endforeach



            </div>
    </section>



    <section class="Trending-saat-ini">
        <div class=" container py-5">
            <h2 class=" section-title">Terending Saat Ini</h2>
            <div class="overflow-auto d-flex flex-row">
                @for ($i = 0; $i < 6; $i++)
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
                @endfor
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
