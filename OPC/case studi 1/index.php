<?php
// Include file TipePembayaran.php, PembayaranCustomer.php, Debit.php, Kredit.php, dan Cash.php
include_once "TipePembayaran.php";
include_once "PembayaranCustomer.php";

// Membuat objek pembayaran customer
$pembayaranCustomer = new PembayaranCustomer();

// Membuat objek tipe pembayaran
$debit = new Debit();
$kredit = new Kredit();
$cash = new Cash();

// Menerima dan memproses pembayaran dengan tipe pembayaran Debit
$pembayaranCustomer->menerimaPembayaran($debit);
$pembayaranCustomer->prosesPembayaran();
echo "<br>";

// Menerima dan memproses pembayaran dengan tipe pembayaran Kredit
$pembayaranCustomer->menerimaPembayaran($kredit);
$pembayaranCustomer->prosesPembayaran();
echo "<br>";

// Menerima dan memproses pembayaran dengan tipe pembayaran Cash
$pembayaranCustomer->menerimaPembayaran($cash);
$pembayaranCustomer->prosesPembayaran();
echo "<br>";
?>
