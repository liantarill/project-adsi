@php
    $produkList = [
        [
            'judul' => 'Patung Abstrak',
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
@endphp

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

    <div class="container py-5 mt-5">

        <a href="{{ route('home') }}" class="btn-kembali text-decoration-none  mb-3 d-inline-block"><i
                class="bi-arrow-left"></i>
            Kembali ke Beranda</a>

        <!-- Product detail -->
        <div class="row align-items-start gy-4">
            <!-- Image -->
            <div class="col-md-6">
                <img src="{{ asset('images/artworks/abstract.jpeg') }}" alt="Elephant"
                    class="img-fluid rounded shadow-sm">
            </div>

            <!-- Info -->
            <div class="col-md-6">
                <h4>Flow of Thought – Abstract Stone Sculpture</h4>
                <div class="mb-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                    <small class="text-muted">(150 Reviews)</small>
                    <span class="text-success ms-2">| In Stock</span>
                </div>
                <h5 class="fw-bold">Rp 5.800.000</h5>
                <p class="text-muted">
                    Immerse your space in modern elegance with this handcrafted abstract sculpture.<br>

                    "Flow of Thought" captures the essence of movement and emotion through fluid, asymmetrical lines and
                    organic texture. Sculpted from premium materials and finished with care, it serves as a striking
                    centerpiece for contemporary interiors. Ideal for art collectors, designers, or anyone looking to
                    elevate their decor with a meaningful, thought-provoking piece.<br><br>

                    📐 Approx. size: 30cm (H) x 15cm (W) <br>
                    🖐️ Handcrafted with love <br>
                    🏡 Perfect for living rooms, offices, or galleries <br>
                </p>

                <!-- Quantity & Buy -->
                <div class="d-flex align-items-center gap-2 mb-3">
                    <div class="d-flex border rounded-3 border-secondary overflow-hidden">
                        <button class="btn btn-outline-secondary rounded-0 border-0 minus">−</button>
                        <input type="text" class="form-control border-0 text-center" value="1"
                            style="width: 60px;">
                        <button class="btn btn-outline-secondary rounded-0 border-0 plus">+</button>
                    </div>
                    <button class="btn btn-purple flex-grow-1">Buy Now</button>
                    <button class="btn btn-purple flex-grow-1" data-bs-toggle="modal" data-bs-target="#offerModal">Offer
                        Now</button>


                    <!-- Modal -->
                    <div class="modal fade" id="offerModal" tabindex="-1" aria-labelledby="offerModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl  modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header bg-light">
                                    <h5 class="modal-title" id="offerModalLabel">Nilai Produk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body">
                                    <x-customer.offer />
                                </div>
                            </div>
                        </div>
                    </div>

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

        <section class="Rekomendasi">
            <div class=" container py-5">
                <h2 class=" section-title">Rekomendasi Untuk Anda</h2>

                <div class="row">

                    @foreach ($produkList as $produk)
                        <div class="col-md-3 mb-4">
                            <div class="card art-card overflow-hidden">
                                <!-- Clickable part (image + title) wrapped in <a> -->
                                <a href="{{ route('katalog') }}" class="text-decoration-none text-dark">

                                    <img src="{{ asset($produk['gambar']) }}" class="art-image"
                                        alt="{{ $produk['judul'] }}">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h5 class="mb-0 art-title">{{ $produk['judul'] }}</h5>
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
