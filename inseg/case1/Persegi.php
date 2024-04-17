<?php
include_once("Shape2Dimension.php");

class Persegi implements Shape2Dimension {
    public function calculateArea(): void {
        echo "Menghitung luas persegi...\n";
    }
}
?>