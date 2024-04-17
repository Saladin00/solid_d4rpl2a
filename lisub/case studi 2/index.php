<?php
include_once("Mobil.php");
include_once("MobilListrik.php");

$mobil = new Mobil();
$mobilListrik = new MobilListrik();

echo "Mobil dengan bahan bakar BBM:\n";
echo "</br>";
$mobil->menggunakanBBM();
echo "</br>,</br>";

echo "\n";

echo "Mobil dengan bahan bakar listrik:\n";
echo "</br>";
$mobilListrik->menggunakanBaterai();
?>