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

        .floating-btn {
            position: fixed;
            bottom: 100px;
            right: 20px;
            z-index: 1050;
            /* Agar di atas elemen lain */
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


    <!-- Products Section -->
    <section id="products" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Keranjang Belanja</h2>
            <div class="row mt-4">
                <div class="col-6">

                    @foreach ($model as $value)
                    <!-- Product 1 -->
                    <div class="col-12 p-2">
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-6">
                                    <h5 class="card-title">{{ $value->menu->nama_menu }}</h5>
                                </div>
                                <div class="col-3">
                                    <h3 class="" style="color:#654520">{{ number_format($value->harga) }}</h3>
                                </div>
                                <div class="col-1">
                                    <a href="{{ route('keranjang.kurang', $value->id) }}" class="btn btn-danger text-white">
                                        -
                                    </a>
                                </div>
                                <div class="col-1">
                                    <p class="btn">
                                        {{ $value->qty }}
                                    </p>
                                </div>
                                <div class="col-1">
                                    <a href="{{ route('keranjang.tambah', $value->id) }}" class="btn btn-success text-white">
                                        +
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-6">
                                    <h5 class="card-title">
                                        Metode Pembayaran
                                    </h5>

                                </div>
                                <div class="col-6">
                                    <select name="metode_pembayaran" id="" class="form-control">
                                        <option>Mandiri</option>
                                        <option>BRI</option>
                                        <option>BNI</option>
                                        <option>Dana</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-4 p-4">
                                <div class="ms-auto col-2">
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#successModal">
                                        Checkout
                                    </button>
                                </div>
                            </div>

                            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success text-white">
                                            <h5 class="modal-title" id="successModalLabel">Berhasil</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="https://i.pinimg.com/originals/90/13/f7/9013f7b5eb6db0f41f4fd51d989491e7.gif" alt="" width="100%">
                                            <p class="mt-3">Pesanan berhasil dengan nomor #{{ date('YmdHis') }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
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