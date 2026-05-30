<?php
include 'koneksi.php';

if(isset($_POST['submit'])){

    $nama     = $_POST['nama'];
    $no_hp    = $_POST['no_hp'];
    $tanggal  = $_POST['tanggal'];
    $paket    = $_POST['paket'];
    $catatan  = $_POST['catatan'];

    mysqli_query($conn,"
        INSERT INTO booking
        VALUES(
            '',
            '$nama',
            '$no_hp',
            '$tanggal',
            '$paket',
            '$catatan'
        )
    ");

    echo "
    <script>
        alert('Booking berhasil!');
        window.location='booking.php';
    </script>
    ";
}
?>

<!DOCTYPE html>

<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Booking Studio - SnapStudio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{

    background:
    linear-gradient(
        rgba(0,0,0,0.65),
        rgba(0,0,0,0.65)
    ),
    url('assets/img/hero.jpg');

    background-size:cover;
    background-position:center;
    background-attachment:fixed;

    min-height:100vh;
}

.booking-card{

    background:white;

    border-radius:20px;

    padding:40px;

    box-shadow:0 10px 30px rgba(0,0,0,0.25);
}

.page-title{

    text-align:center;

    font-weight:bold;

    margin-bottom:10px;
}

.page-subtitle{

    text-align:center;

    color:#666;

    margin-bottom:30px;
}

.form-control,
.form-select{

    border-radius:12px;
}

.btn-book{

    border-radius:30px;

    padding:12px;

    font-weight:bold;
}

.navbar{

    box-shadow:0 2px 10px rgba(0,0,0,0.15);
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">

```
<div class="container">

    <a class="navbar-brand fw-bold" href="index.php">
        📸 SnapStudio
    </a>

    <a href="index.php" class="btn btn-dark">
        Kembali ke Home
    </a>

</div>
```

</nav>

<div class="container py-5">

```
<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="booking-card">

            <h2 class="page-title">
                Booking Studio Foto
            </h2>

            <p class="page-subtitle">
                Isi formulir berikut untuk melakukan reservasi studio.
            </p>

            <form method="POST">

                <div class="mb-3">

                    <label class="form-label">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Nomor HP
                    </label>

                    <input
                        type="text"
                        name="no_hp"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Tanggal Booking
                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Pilih Paket
                    </label>

                    <select
                        name="paket"
                        class="form-select">

                        <option>Paket Wisuda</option>
                        <option>Paket Family</option>
                        <option>Paket Prewedding</option>

                    </select>

                </div>

                <div class="mb-4">

                    <label class="form-label">
                        Catatan Tambahan
                    </label>

                    <textarea
                        name="catatan"
                        rows="4"
                        class="form-control"></textarea>

                </div>

                <button
                    type="submit"
                    name="submit"
                    class="btn btn-dark w-100 btn-book">

                    Booking Sekarang

                </button>

            </form>

        </div>

    </div>

</div>
```

</div>

</body>
</html>
