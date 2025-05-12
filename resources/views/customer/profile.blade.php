<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css'])

    <title>Profile</title>
</head>

<body>

    <x-customer.navbar />
    <x-customer.chat-button />


    <section class="profile-header mt-5">
        <div class="container py-5 ">
            <div class=" section-card">
                <div class="col">
                    <div class="card profile-card text-start">
                        <div class="d-flex  card-body align-items-center justify-content-between">

                            <div class="ms-5 d-flex align-items-center">
                                <div class="profile-pict">
                                    <img src="Images/profie.jpg" alt="Profile">
                                </div>
                                <div class="text-light">
                                    <h3 class="profile-name">Sabanang</h3>
                                    <p class="profile-mail">sabanang@gmail.com</p>
                                </div>
                            </div>

                            <div class="me-5 d-flex profile-info text-light">
                                <div class="mx-2 text-center">
                                    <h3>24</h3>
                                    <p>Koleksi</p>
                                </div>
                                <div class="mx-2 text-center">
                                    <h3>24</h3>
                                    <p>Koleksi</p>
                                </div>
                                <div class="mx-2 text-center">
                                    <h3>24</h3>
                                    <p>Koleksi</p>
                                </div>
                                <button class="edit-profile ms-3">Edit Profil</button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">



                <div class="col-md-6 mb-4">
                    <div class="card card-item">
                        <div class=" card-body">
                            <ul class="list-unstyled menu-list">
                                <li><a href="#" class="d-block text-decoration-none"><i
                                            class="bi bi-currency-dollar me-2"></i> 0</a></li>
                                <li><a href="#" class="d-block text-decoration-none"><i
                                            class="bi bi-wallet2 me-2"></i>
                                        Kartu saya</a></li>
                                <li><a href="{{ route('purchase') }}" class="d-block text-decoration-none"><i
                                            class="bi bi-bag me-2"></i>
                                        Pesanan saya</a></li>
                                <li><a href="#" class="d-block text-decoration-none"><i
                                            class="bi bi-gear me-2"></i>
                                        Hapus akun</a></li>
                                <li><a href="#" class="d-block text-decoration-none"><i
                                            class="bi bi-power me-2"></i>
                                        Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card card-item">
                        <div class=" order-tabs d-flex">
                            <div class="order-tab ">
                                <i class="bi bi-credit-card"></i>
                                <span>To Pay</span>
                            </div>
                            <div class="order-tab active">
                                <i class="bi bi-basket"></i>
                                <span>To Ship</span>
                            </div>
                            <div class="order-tab">
                                <i class="bi bi-truck"></i>
                                <span>To Receive</span>
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
