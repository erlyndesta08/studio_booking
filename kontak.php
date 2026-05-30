<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kontak - SnapStudio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
}

.navbar{
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.contact-card{
    background:white;
    border-radius:20px;
    padding:40px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.hero-contact{
    background:
    linear-gradient(
        rgba(0,0,0,0.55),
        rgba(0,0,0,0.55)
    ),
    url('assets/img/hero.jpg');

    background-size:cover;
    background-position:center;

    height:250px;

    display:flex;
    justify-content:center;
    align-items:center;

    color:white;
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

<section class="hero-contact">

    <div class="text-center">

        <h1>Hubungi Kami</h1>

        <p>
            Kami siap membantu kebutuhan fotografi Anda
        </p>

    </div>

</section>

<div class="container py-5">

    <div class="contact-card">

        <h3 class="mb-4">
            Informasi Kontak
        </h3>

        <p><strong>📍 Alamat:</strong> Semarang, Jawa Tengah</p>

        <p><strong>📱 WhatsApp:</strong> 081234567890</p>

        <p><strong>📧 Email:</strong> snapstudio@gmail.com</p>

        <p><strong>📸 Instagram:</strong> @snapstudio.id</p>

        <p><strong>🕒 Jam Operasional:</strong> 09.00 - 20.00 WIB</p>

    </div>

</div>

</body>
</html>