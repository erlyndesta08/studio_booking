<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnapStudio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="index.php">
                📸 SnapStudio
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="paket.php">Paket</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Galeri</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Tentang Kami</a>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">

        <div class="container text-center">

            <h1>Abadikan Momen Terbaikmu</h1>

            <p>
                Studio Foto Modern untuk Wisuda, Family,
                Prewedding dan Product Shoot
            </p>

            <a href="booking.php" class="btn btn-dark btn-lg">
                Booking Sekarang
            </a>

        </div>

    </section>

    <!-- Mengapa Memilih Kami -->
    <section class="why-us">

        <div class="container">

            <h2 class="text-center mb-5">
                Mengapa Memilih Kami?
            </h2>

            <div class="row g-4">

                <div class="col-md-3">
                    <div class="feature-card">
                        <h3>📸</h3>
                        <h5>Fotografer Profesional</h5>
                        <p>
                            Tim berpengalaman menghasilkan
                            foto berkualitas tinggi.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-card">
                        <h3>⭐</h3>
                        <h5>Harga Terjangkau</h5>
                        <p>
                            Paket lengkap dengan harga
                            ramah mahasiswa.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-card">
                        <h3>🎨</h3>
                        <h5>Editing Premium</h5>
                        <p>
                            Hasil edit profesional
                            dan aesthetic.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-card">
                        <h3>🕒</h3>
                        <h5>Booking Mudah</h5>
                        <p>
                            Reservasi online cepat
                            dan praktis.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- Paket Terpopuler -->
    <section class="paket-section">

        <div class="container">

            <h2 class="text-center mb-5">
                Paket Terpopuler
            </h2>

            <div class="row">

                <?php

                $data = mysqli_query(
                    $conn,
                    "SELECT * FROM paket"
                );

                while($d = mysqli_fetch_array($data)){

                ?>

                <div class="col-md-4 mb-4">

                    <div class="paket-card">

                        <h3>
                            <?php echo $d['nama_paket']; ?>
                        </h3>

                        <h4>
                            <?php echo $d['harga']; ?>
                        </h4>

                        <p>
                            <?php echo $d['deskripsi']; ?>
                        </p>

                        <a href="booking.php"
                           class="btn btn-dark">
                           Pesan Sekarang
                        </a>

                    </div>

                </div>

                <?php } ?>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">

        <h5>📸 SnapStudio</h5>

        <p>
            Studio Foto Modern untuk Wisuda,
            Family dan Prewedding
        </p>

        <p class="mb-0">
            © 2026 SnapStudio. All Rights Reserved.
        </p>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
