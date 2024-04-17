<?php
// Include file Mahasiswa.php dan MahasiswaView.php
include_once "Mahasiswa.php";
include_once "MahasiswaView.php";

// Membuat objek mahasiswa
$mahasiswa1 = new Mahasiswa("2205026", "Jo Shandi </br>");
$mahasiswa2 = new Mahasiswa("2205013","Ihsan Solehudin" );

// Membuat objek MahasiswaView
$mahasiswaView = new MahasiswaView();

// Menampilkan informasi mahasiswa
$mahasiswaView->showMahasiswa($mahasiswa1);
$mahasiswaView->showMahasiswa($mahasiswa2);

?>
