<?php
session_start();
include '../koneksi.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

if(isset($_POST['tambah'])){

    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    mysqli_query($conn,"
        INSERT INTO paket
        (nama_paket,harga,deskripsi,gambar)
        VALUES
        ('$nama_paket','$harga','$deskripsi','$gambar')
    ");

    echo "
    <script>
    alert('Paket berhasil ditambahkan!');
    window.location='paket.php';
    </script>
    ";
}

if(isset($_GET['hapus'])){

    $id = $_GET['hapus'];

    mysqli_query(
        $conn,
        "DELETE FROM paket WHERE id='$id'"
    );

    echo "
    <script>
    alert('Paket berhasil dihapus!');
    window.location='paket.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kelola Paket</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
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

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Kelola Paket</h2>

        <a href="dashboard.php" class="btn btn-secondary">
            Kembali
        </a>

    </div>

    <!-- FORM TAMBAH -->

    <div class="card card-custom p-4 mb-4">

        <h4 class="mb-3">
            Tambah Paket Baru
        </h4>

        <form method="POST">

            <div class="mb-3">

                <label>Nama Paket</label>

                <input
                    type="text"
                    name="nama_paket"
                    class="form-control"
                    required>

            </div>

            <div class="mb-3">

                <label>Harga</label>

                <input
                    type="text"
                    name="harga"
                    class="form-control"
                    required>

            </div>

            <div class="mb-3">

                <label>Deskripsi</label>

                <textarea
                    name="deskripsi"
                    class="form-control"
                    required></textarea>

            </div>

            <div class="mb-3">

                <label>Nama File Gambar</label>

                <input
                    type="text"
                    name="gambar"
                    class="form-control"
                    placeholder="contoh.jpg"
                    required>

            </div>

            <button
                type="submit"
                name="tambah"
                class="btn btn-dark">

                Simpan Paket

            </button>

        </form>

    </div>

    <!-- DATA PAKET -->

    <div class="card card-custom p-4">

        <h4 class="mb-3">
            Daftar Paket
        </h4>

        <table class="table table-bordered table-hover">

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nama Paket</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

            <?php

            $data = mysqli_query(
                $conn,
                "SELECT * FROM paket ORDER BY id DESC"
            );

            while($d = mysqli_fetch_array($data)){

            ?>

            <tr>

                <td><?php echo $d['id']; ?></td>

                <td><?php echo $d['nama_paket']; ?></td>

                <td><?php echo $d['harga']; ?></td>

                <td><?php echo $d['deskripsi']; ?></td>

                <td>

                    <a
                        href="edit_paket.php?id=<?php echo $d['id']; ?>"
                        class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <a
                        href="?hapus=<?php echo $d['id']; ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus paket ini?')">

                        Hapus

                    </a>

                </td>

            </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>