```php
<?php
session_start();
include '../koneksi.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

if(isset($_GET['hapus'])){

    $id = $_GET['hapus'];

    mysqli_query(
        $conn,
        "DELETE FROM booking WHERE id='$id'"
    );

    echo "
    <script>
        alert('Booking berhasil dihapus!');
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

<title>Kelola Booking</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
}

.navbar{
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.card-custom{
    border:none;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.table th{
    background:#212529;
    color:white;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">

    <div class="container">

        <span class="navbar-brand fw-bold">
            📸 Kelola Booking
        </span>

        <a href="dashboard.php" class="btn btn-dark">
            Kembali Dashboard
        </a>

    </div>

</nav>

<div class="container mt-5">

    <div class="card card-custom p-4">

        <h3 class="mb-4">
            Data Booking Customer
        </h3>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <tr>

                    <th>ID</th>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Tanggal</th>
                    <th>Paket</th>
                    <th>Catatan</th>
                    <th>Aksi</th>

                </tr>

                <?php

                $data = mysqli_query(
                    $conn,
                    "SELECT * FROM booking ORDER BY id DESC"
                );

                while($d = mysqli_fetch_array($data)){

                ?>

                <tr>

                    <td><?php echo $d['id']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['no_hp']; ?></td>
                    <td><?php echo $d['tanggal']; ?></td>
                    <td><?php echo $d['paket']; ?></td>
                    <td><?php echo $d['catatan']; ?></td>

                    <td>

                        <a
                            href="?hapus=<?php echo $d['id']; ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus booking ini?')">

                            Hapus

                        </a>

                    </td>

                </tr>

                <?php } ?>

            </table>

        </div>

    </div>

</div>

</body>
</html>
```
