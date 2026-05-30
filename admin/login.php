<?php
session_start();
include '../koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query(
        $conn,
        "SELECT * FROM admin
        WHERE username='$username'
        AND password='$password'"
    );

    if(mysqli_num_rows($cek) > 0){

        $_SESSION['login'] = true;

        header("Location: dashboard.php");
        exit;

    }else{

        echo "
        <script>
            alert('Username atau Password salah!');
        </script>
        ";

    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Admin - SnapStudio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    margin:0;
    padding:0;

    background:
    linear-gradient(
        rgba(0,0,0,0.65),
        rgba(0,0,0,0.65)
    ),
    url('../assets/img/hero.jpg');

    background-size:cover;
    background-position:center;

    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;
}

.login-card{

    width:100%;
    max-width:420px;

    background:white;

    border-radius:20px;

    padding:40px;

    box-shadow:0 10px 30px rgba(0,0,0,0.3);

}

.logo{

    font-size:42px;

    text-align:center;

    margin-bottom:10px;

}

.title{

    text-align:center;

    font-weight:bold;

    margin-bottom:5px;

}

.subtitle{

    text-align:center;

    color:#777;

    margin-bottom:30px;

}

.btn-login{

    border-radius:30px;

    padding:12px;

    font-weight:bold;

}

.form-control{

    border-radius:12px;

}

</style>

</head>

<body>

<div class="login-card">

    <div class="logo">
        📸
    </div>

    <h2 class="title">
        SnapStudio Admin
    </h2>

    <p class="subtitle">
        Login untuk mengelola website
    </p>

    <form method="POST">

        <div class="mb-3">

            <label class="form-label">
                Username
            </label>

            <input
                type="text"
                name="username"
                class="form-control"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control"
                required>

        </div>

        <button
            type="submit"
            name="login"
            class="btn btn-dark w-100 btn-login">

            Login

        </button>

    </form>

</div>

</body>
</html>