<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Kopi - Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .hero {
            background-image: url('https://i.pinimg.com/originals/b3/f9/ec/b3f9ec10537a01aaeca68cecf2bd1a81.gif');
            background-size: cover;
            background-position: center;
            color: white;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .menu-kopi {
            height: 400px;
            /* Sesuaikan tinggi gambar */
            object-fit: cover;
            /* Gambar akan di-crop agar tetap proporsional */
            width: 100%;
            /* Memastikan gambar selalu penuh */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">UMKM Kopi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Products Section -->
    <section id="products" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Produk Kami</h2>
            <div class="row mt-4">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/06/83/a1/0683a180a964320d3f81d6840fde1771.jpg"
                            class="card-img-top menu-kopi" alt="Kopi Arabica">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Arabica</h5>
                            <p class="card-text">Aroma khas dengan rasa lembut dan sedikit asam.</p>
                            <h2 class="" style="color:#654520">23k</h2>
                            <a href="#" class="btn btn-warning text-white" style="background: #825B32">
                                <img src="{{ asset('buy.png') }}" alt="icon" width="25px">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/b1/57/d4/b157d4f8535af7de3c06b1bedb6db8bb.jpg"
                            class="card-img-top menu-kopi" alt="Kopi Robusta">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Robusta</h5>
                            <p class="card-text">Rasa kuat dan sedikit pahit, cocok untuk pecinta kopi pekat.</p> <h2 class="" style="color:#654520">27k</h2>
                            <a href="#" class="btn btn-warning text-white" style="background: #825B32">
                                <img src="{{ asset('buy.png') }}" alt="icon" width="25px">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/79/0c/48/790c483b59671515930c81a935be77e4.jpg"
                            class="card-img-top menu-kopi" alt="Kopi Luwak">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Luwak</h5>
                            <p class="card-text">Kopi eksotis dengan proses alami oleh luwak.</p> <h2 class="" style="color:#654520">28k</h2>
                            <a href="#" class="btn btn-warning text-white" style="background: #825B32">
                                <img src="{{ asset('buy.png') }}" alt="icon" width="25px">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-3 bg-dark text-white text-center">
        <p>© 2024 UMKM Kopi. Semua Hak Dilindungi.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
