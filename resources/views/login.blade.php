<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artzin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/css/login.css">    --}}
    @vite(['resources/css/login.css'])
  

</head>

<body>

    <!-- Top Banner -->
    <div class="bg-dark text-white text-center py-1">
        <small>Summer Sale For All Swim Suits And Free Express Delivery - OFF 50%! <a href="#" class="text-white fw-bold">ShopNow</a></small>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Artzin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="What are you looking for?" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Login Section -->
    <div class="container login-section d-flex flex-wrap align-items-center justify-content-center">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/programming.png') }}" class="img-fluid" alt="Shopping Image">
        </div>
        <div class="col-md-6">
            <div class="login-form">
                <h3 class="mb-4">Log in to Artzin</h3>
                <p class="text-muted">Enter your details below</p>
                <input type="text" class="form-control" placeholder="Email or Phone Number">
                <input type="password" class="form-control" placeholder="Password">
                <div class="d-flex justify-content-between align-items-center">
                    <button class="btn btn-danger">Log In</button>
                    <a href="#" class="text-danger">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Artzin</h5>
                    <p>Subscribe</p>
                    <p>Get 10% off your first order</p>
                    <input type="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="col-md-3 footer-links">
                    <h6>Support</h6>
                    <p>111 Bijoy sarani, Dhaka, DH 1515, Bangladesh.</p>
                    <p>exclusive@gmail.com</p>
                    <p>+88015-88888-9999</p>
                </div>
                <div class="col-md-2 footer-links">
                    <h6>Account</h6>
                    <a href="#">My Account</a>
                    <a href="#">Login / Register</a>
                    <a href="#">Cart</a>
                    <a href="#">Wishlist</a>
                    <a href="#">Shop</a>
                </div>
                <div class="col-md-2 footer-links">
                    <h6>Quick Link</h6>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms Of Use</a>
                    <a href="#">FAQ</a>
                    <a href="#">Contact</a>
                </div>
                <div class="col-md-2">
                    <h6>Download App</h6>
                    <img src="https://via.placeholder.com/120x40?text=Google+Play" class="mb-2" alt="Google Play">
                    <img src="https://via.placeholder.com/120x40?text=App+Store" alt="App Store">
                    <div class="mt-3">
                        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt-4">
                &copy; Copyright Rimel 2022. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>