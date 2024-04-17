
<?php
include_once("KendaraaanBBM.php");

class Mobil extends KendaraanBBM {
    public function menggunakanBBM(): void {
        echo "Mobil menggunakan bahan bakar minyak.\n";
    }
}
?>
