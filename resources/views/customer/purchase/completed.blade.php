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


    <section class="profile-header py-5 mt-5">
        <div class="px-4 my-4">
            <x-customer.purchase-nav />


            <!-- Pesanan Card -->
            <div class="card mb-4 border-2 border-light shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center bg-white">
                    <div>
                        <span class="badge bg-light text-dark border">Artist | ORI</span>
                        <strong class="ms-2">Alam Indah</strong>
                    </div>
                    <span class="text-success fw-semibold">Pesanan Selesai</span>
                </div>
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <img src="Images/python.png" height="80" width="80" class="me-3 rounded" alt="produk">
                        <div>
                            <h6 class="mb-1">Alam Indah</h6>
                            <p class="text-muted mb-1">Variasi: Lukisan | 40x40</p>
                            <p class="text-decoration-line-through text-muted mb-0">Rp250.000</p>
                            <p class="fw-bold text-purple" style="color:#6f42c1;">Rp137.500</p>
                        </div>
                    </div>
                    <div class="text-end fw-bold">Total Pesanan: Rp124.762</div>
                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <button class="btn btn-outline-secondary btn-sm">Ajukan Pengembalian</button>
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle">Lainnya</button>
                        {{-- <button class="btn btn-sm text-white" style="background-color: #6f42c1;">Nilai</button> --}}
                        <!-- Tombol untuk memicu popup -->
                        <button type="button" class="btn btn-sm text-white" style="background-color: #6f42c1;"
                            data-bs-toggle="modal" data-bs-target="#ratingModal">
                            Nilai
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content border-0">
                                    <div class="modal-header bg-light">
                                        <h5 class="modal-title" id="ratingModalLabel">Nilai Produk</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Tutup"></button>
                                    </div>
                                    <div class="modal-body">
                                        <x-customer.rating />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Tambah kartu pesanan lain di sini jika perlu -->

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
