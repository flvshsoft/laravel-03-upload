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
            font-family: "Times New Roman", serif;
            background: #FFE2E2;
            color: #DA498D;
        }

        .hero {
            /* background-image: url('https://i.pinimg.com/originals/b3/f9/ec/b3f9ec10537a01aaeca68cecf2bd1a81.gif'); */
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

        @font-face {
            font-family: 'gastroline';
            src: url('{{ asset('fonts/gastroline.otf') }}') format('opentype');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background: #FFE2E2;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('login') }}" style="font-family: 'gastroline';color:#69247C;font-size:30px;">Umkm Kopi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Home</a>
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
    <!-- Hero Section -->
    <header class="hero mt-4">
        <div class="row mt-4">
            <div class="col-7 text-start">
                <h1 style="color: #69247C;margin-top:130px;">Nikmati Kopi Terbaik</h1>
                <h1 style="color: #69247C;font-family: 'gastroline'"> Umkm Lokal</h1>
                <p style=" color: #69247C">Rasakan aroma dan cita rasa kopi pilihan langsung dari petani lokal.</p>
                <a href="{{ route('menu') }}" class="btn btn-lg" style="background: #69247C; color:white">Lihat Menu</a>
            </div>
            <div class="col-5 p-4">
                <img src="https://i.pinimg.com/736x/7c/0d/ae/7c0dae07c7c08eb84dee8b3d89c07106.jpg" alt="hero"
                    width="100%" style="border-radius: 50%;">
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="https://i.pinimg.com/736x/7c/0d/ae/7c0dae07c7c08eb84dee8b3d89c07106.jpg" alt="hero"
                        width="100%" style="border-radius: 50%;">
                </div>
                <div class="col-8">
                    <h2 class="text-center" style="margin-top:10%;">Tentang Kami</h2>
                    <p class="text-center text-muted">Kami adalah UMKM yang berkomitmen untuk menyajikan kopi terbaik
                        dari
                        petani lokal dengan proses yang ramah lingkungan.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5">
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


    <!-- Pesan Saran -->
    <section>
        <div class="container">
            <h2>Pesan Saran</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Alert for Success -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Alert for Error -->
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('pesan-saran.store_user') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <input type="text" name="pesan" id="pesan" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </section>
    <hr>

    <!-- Footer -->
    <footer class="py-3 bg-dark text-white text-center">
        <p>© 2024 UMKM Kopi. Semua Hak Dilindungi.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
