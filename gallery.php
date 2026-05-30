<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Galeri - SnapStudio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
}

.navbar{
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.hero-gallery{
    background:
    linear-gradient(
        rgba(0,0,0,0.55),
        rgba(0,0,0,0.55)
    ),
    url('assets/img/hero.jpg');

    background-size:cover;
    background-position:center;

    height:300px;

    display:flex;
    justify-content:center;
    align-items:center;

    color:white;
    text-align:center;
}

.hero-gallery h1{
    font-size:50px;
    font-weight:bold;
}

.gallery-card{
    overflow:hidden;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

.gallery-card img{
    width:100%;
    height:300px;
    object-fit:cover;
    transition:0.4s;
}

.gallery-card img:hover{
    transform:scale(1.08);
}

.section-title{
    font-weight:bold;
    margin-bottom:30px;
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

<section class="hero-gallery">

    <div>

        <h1>Galeri SnapStudio</h1>

        <p>
            Hasil foto terbaik untuk setiap momen spesial
        </p>

    </div>

</section>

<div class="container py-5">

    <h2 class="section-title text-center">
        Koleksi Foto Kami
    </h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="gallery-card">
                <img src="assets/img/gallery1.jpg">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-card">
                <img src="assets/img/gallery2.jpg">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-card">
                <img src="assets/img/gallery3.jpg">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-card">
                <img src="assets/img/gallery4.jpg">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-card">
                <img src="assets/img/gallery5.jpg">
            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-card">
                <img src="assets/img/gallery6.jpg">
            </div>
        </div>

    </div>

</div>

</body>
</html>