<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "studio_booking"
);

if (!$conn) {
    die("Koneksi database gagal!");
}

?>