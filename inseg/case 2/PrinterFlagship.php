
<?php
include_once("FiturCetak.php");
include_once("FiturFax.php");
include_once("FiturScan.php");

class PrinterFlagship implements FiturCetak, FiturFax, FiturScan {
    public function cetakKertas(): void {
        echo "Mencetak kertas...\n";
    }

    public function terimaFax(): void {
        echo "Menerima fax...\n";
    }

    public function scanKertas(): void {
        echo "Menggunakan fitur scan untuk kertas...\n";
    }
}
?>
