
<?php
include_once("BarangElektronik.php");

class KipasAngin implements BarangElektronik {
    public function beroperasi(): void {
        echo "Kipas angin menyala.\n";
    }

    public function berhenti(): void {
        echo "Kipas angin dimatikan.\n";
    }
}
?>
