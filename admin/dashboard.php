<?php
session_start();
include '../koneksi.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

$total_booking = mysqli_num_rows(
    mysqli_query($conn, "SELECT * FROM booking")
);

$total_paket = mysqli_num_rows(
    mysqli_query($conn, "SELECT * FROM paket")
);
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
}

.navbar{
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.card-info{
    border:none;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card-info:hover{
    transform:translateY(-5px);
}

.section-card{
    border:none;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.dashboard-title{
    font-weight:700;
}

.dashboard-subtitle{
    color:#777;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">

    <div class="container">

        <span class="navbar-brand fw-bold">
            📸 SnapStudio Admin
        </span>

        <div>

            <a href="booking.php" class="btn btn-primary me-2">
                Kelola Booking
            </a>

            <a href="paket.php" class="btn btn-dark me-2">
                Kelola Paket
            </a>

            <a href="logout.php" class="btn btn-danger">
                Logout
            </a>

        </div>

    </div>

</nav>

<div class="container mt-5">

    <h2 class="dashboard-title">
        Dashboard Admin
    </h2>

    <p class="dashboard-subtitle">
        Selamat datang di panel administrasi SnapStudio.
    </p>

    <div class="row mt-4 mb-4">

        <div class="col-md-6 mb-3">

            <div class="card card-info p-4">

                <h5>Total Booking</h5>

                <h1 class="fw-bold">
                    <?php echo $total_booking; ?>
                </h1>

                <small class="text-muted">
                    Jumlah seluruh booking customer
                </small>

            </div>

        </div>

        <div class="col-md-6 mb-3">

            <div class="card card-info p-4">

                <h5>Total Paket</h5>

                <h1 class="fw-bold">
                    <?php echo $total_paket; ?>
                </h1>

                <small class="text-muted">
                    Paket yang tersedia
                </small>

            </div>

        </div>

    </div>

    <div class="card section-card p-4">

        <h4 class="mb-3">
            Ringkasan Sistem
        </h4>

        <p>
            Gunakan menu <b>Kelola Booking</b> untuk melihat
            dan menghapus data booking customer.
        </p>

        <p>
            Gunakan menu <b>Kelola Paket</b> untuk menambah,
            mengedit, dan menghapus paket studio.
        </p>

    </div>

</div>

</body>
</html>
