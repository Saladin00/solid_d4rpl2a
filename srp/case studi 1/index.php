<?php
// Include file Persegi.php dan PenghitungPersegi.php
include_once "Persegi.php";
include_once "PenghitungPersegi.php";

// Membuat objek persegi dengan sisi 10
$persegi = new Persegi(10);

// Membuat objek penghitungPersegi
$penghitungPersegi = new PenghitungPersegi();

// Menghitung luas persegi
$luas = $penghitungPersegi->hitungLuas($persegi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Luas Persegi</title>
</head>
<body>
    <h1>Perhitungan Luas Persegi</h1>

    <p>Sisi persegi: <?php echo $persegi->getSisi(); ?></p>
    <p>Luas persegi: <?php echo $luas; ?></p>
</body>
</html>
