
<?php
include_once("Lampu.php");
include_once("KipasAngin.php");
include_once("Saklar.php");

$lampu = new Lampu();
$kipasAngin = new KipasAngin();

$saklarLampu = new Saklar($lampu);

$saklarKipasAngin = new Saklar($kipasAngin);

echo "Menggunakan saklar untuk lampu:\n";
$saklarLampu->saklar();
$saklarLampu->berubah();


echo "\nMenggunakan saklar untuk kipas angin:\n";
$saklarKipasAngin->saklar();
$saklarKipasAngin->berubah();

?>
