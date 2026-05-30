<?php
session_start();
include '../koneksi.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

if(!isset($_GET['id'])){
    header("Location: paket.php");
    exit;
}

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM paket WHERE id='$id'"
);

$d = mysqli_fetch_array($data);

if(!$d){
    header("Location: paket.php");
    exit;
}

if(isset($_POST['update'])){

    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    mysqli_query($conn,"
        UPDATE paket
        SET
        nama_paket='$nama_paket',
        harga='$harga',
        deskripsi='$deskripsi',
        gambar='$gambar'
        WHERE id='$id'
    ");

    echo "
    <script>
        alert('Paket berhasil diupdate!');
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

<title>Edit Paket</title>

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

</style>

</head>

<body>

<div class="container mt-5">

    <div class="card card-custom p-4">

        <h2 class="mb-4">
            Edit Paket
        </h2>

        <form method="POST">

            <div class="mb-3">

                <label class="form-label">
                    Nama Paket
                </label>

                <input
                    type="text"
                    name="nama_paket"
                    class="form-control"
                    value="<?php echo $d['nama_paket']; ?>"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Harga
                </label>

                <input
                    type="text"
                    name="harga"
                    class="form-control"
                    value="<?php echo $d['harga']; ?>"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Deskripsi
                </label>

                <textarea
                    name="deskripsi"
                    class="form-control"
                    rows="4"
                    required><?php echo $d['deskripsi']; ?></textarea>

            </div>

            <div class="mb-4">

                <label class="form-label">
                    Nama File Gambar
                </label>

                <input
                    type="text"
                    name="gambar"
                    class="form-control"
                    value="<?php echo $d['gambar']; ?>"
                    required>

            </div>

            <button
                type="submit"
                name="update"
                class="btn btn-success">

                Update Paket

            </button>

            <a
                href="paket.php"
                class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

</body>
</html>