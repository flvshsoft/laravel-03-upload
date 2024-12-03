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
                        <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">Tentang Kami</h2>
            <p class="text-center text-muted">Kami adalah UMKM yang berkomitmen untuk menyajikan kopi terbaik dari
                petani lokal dengan proses yang ramah lingkungan.</p>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Produk Kami</h2>
            <div class="row mt-4">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/originals/b3/f9/ec/b3f9ec10537a01aaeca68cecf2bd1a81.gif"
                            class="card-img-top" alt="Kopi Arabica">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Arabica</h5>
                            <p class="card-text">Aroma khas dengan rasa lembut dan sedikit asam.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/originals/b3/f9/ec/b3f9ec10537a01aaeca68cecf2bd1a81.gif"
                            class="card-img-top" alt="Kopi Robusta">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Robusta</h5>
                            <p class="card-text">Rasa kuat dan sedikit pahit, cocok untuk pecinta kopi pekat.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/originals/b3/f9/ec/b3f9ec10537a01aaeca68cecf2bd1a81.gif"
                            class="card-img-top" alt="Kopi Luwak">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Luwak</h5>
                            <p class="card-text">Kopi eksotis dengan proses alami oleh luwak.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
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
