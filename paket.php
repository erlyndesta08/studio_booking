<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Paket Studio - SnapStudio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
}

.navbar{
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.card-paket{
    border:none;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card-paket:hover{
    transform:translateY(-8px);
}

.harga{
    font-size:30px;
    font-weight:bold;
    color:#8b5e3c;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">

    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            📸 SnapStudio
        </a>

        <a href="index.php" class="btn btn-dark">
            Home
        </a>

    </div>

</nav>

<div class="container py-5">

    <h2 class="text-center mb-5">
        Paket Studio Foto
    </h2>

    <div class="row">

        <?php

        $data = mysqli_query(
            $conn,
            "SELECT * FROM paket ORDER BY id ASC"
        );

        while($d = mysqli_fetch_array($data)){

        ?>

        <div class="col-md-4 mb-4">

            <div class="card card-paket h-100">

                <div class="card-body text-center">

                    <h4>
                        <?php echo $d['nama_paket']; ?>
                    </h4>

                    <p class="harga">
                        <?php echo $d['harga']; ?>
                    </p>

                    <p>
                        <?php echo $d['deskripsi']; ?>
                    </p>

                    <a
                        href="booking.php"
                        class="btn btn-dark">

                        Booking Sekarang

                    </a>

                </div>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>