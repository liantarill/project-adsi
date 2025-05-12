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




    <section class="chat-container px-4 py-5 mt-5">
        <div class="row">
            <!-- Sidebar (List Chat) -->
            <div class="col-md-3 border-end pe-0" style="height: 80vh; overflow-y: auto;">
                <div class="list-group list-group-flush">
                    <!-- Repeatable item for each chat -->
                    @for ($i = 0; $i < 15; $i++)
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex align-items-center border-0">
                            <img src="{{ asset('Images/profie.jpg') }}" alt="Profile" class="rounded-circle me-2"
                                width="40" height="40">
                            <div>
                                <div class="fw-bold">Zidan Ocid</div>
                                <small class="text-muted">Zidan: Tentu saja.... • 1h</small>
                            </div>
                        </a>
                    @endfor

                    <!-- Tambah item lain jika perlu -->
                </div>
            </div>


            <!-- Chat Window -->
            <div class="col-md-9 ps-0">
                <div class="card h-100">
                    <div class="card-header bg-white">
                        <strong>Zidan Rosyid</strong> <span class="text-success">• Online</span>
                        <div><strong>Elephant</strong> - <span class="text-primary">Rp 5.800.000</span></div>
                        <span class="badge bg-success">Stok</span>
                    </div>

                    <div class="card-body overflow-auto" style="max-height: 65vh;">
                        <!-- Chat bubbles seperti sebelumnya -->
                        {{-- salin chat bubble HTML kamu di sini --}}
                        <div class="card-body d-flex flex-column" style="gap: 10px;">

                            <div class="d-flex flex-column align-items-end">
                                <div class="chat-bubble chat-right">Halo, saya tertarik dengan patung gajah ini. Apakah
                                    bahannya
                                    terbuat dari keramik?</div>
                                <div class="message-time">10:32 • Dibaca</div>
                            </div>


                            <div class="d-flex flex-column align-items-start">
                                <div class="chat-bubble chat-left">Benar, patung ini terbuat dari keramik berkualitas
                                    tinggi.
                                    Proses pembuatannya handmade oleh seniman kami.</div>
                                <div class="message-time">10:35 • Dibaca</div>
                            </div>

                            <div class="d-flex flex-column align-items-start">
                                <div class="chat-bubble chat-left">Ukurannya 25 cm x 15 cm x 30 cm. Sangat cocok untuk
                                    dekorasi
                                    rumah atau kantor.</div>
                                <div class="message-time">10:36 • Dibaca</div>
                            </div>


                            <div class="d-flex flex-column align-items-end">
                                <div class="chat-bubble chat-right">Apakah ada diskon untuk produk ini? Dan berapa lama
                                    pengirimannya?</div>
                                <div class="message-time">10:40 • Dibaca</div>
                            </div>


                            <div class="d-flex flex-column align-items-start">
                                <div class="chat-bubble chat-left">Saat ini kami sedang tidak ada kak, estimasi 3–5 hari
                                    kerja
                                    setelah pembayaran dikonfirmasi.</div>
                                <div class="message-time">10:42 • Dibaca</div>
                            </div>


                            <div class="d-flex flex-column align-items-end">
                                <div class="chat-bubble chat-right">Baik, saya tertarik untuk membelinya. Apakah bisa
                                    dikirim ke
                                    Bandung?</div>
                                <div class="message-time">09:15 • Dibaca</div>
                            </div>


                            <div class="d-flex flex-column align-items-start">
                                <div class="chat-bubble chat-left">Tentu saja bisa dikirim ke Bandung. Kami menggunakan
                                    jasa
                                    ekspedisi terpercaya dengan packing yang aman untuk memastikan patung sampai dalam
                                    kondisi
                                    sempurna.</div>
                                <div class="message-time">09:18 • Dibaca</div>
                            </div>
                        </div>
                    </div>

                    <div class="px-4 py-3">
                        <div class="d-flex align-items-center w-100">
                            <button class="btn btn-link px-2 me-2">
                                <i class="bi chat-icon bi-image "></i>
                            </button>

                            <button class="btn btn-link px-2 me-2">
                                <i class="bi chat-icon bi-paperclip "></i>
                            </button>

                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center border rounded-pill px-3"
                                    style="background-color: #f8f9fa;">
                                    <input type="text" class="form-control border-0 bg-transparent"
                                        placeholder="Tulis pesan..." style="box-shadow: none;">
                                </div>
                            </div>

                            <button class="btn btn-primary rounded-circle ms-3">
                                <i class="bi chat-icon bi-send-fill text-white"></i>
                            </button>
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
