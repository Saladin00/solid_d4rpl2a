
<?php
include_once("BarangElektronik.php");

class Saklar {
    private $item;
    private $keaktifan = false;

    public function __construct(BarangElektronik $item) {
        $this->item = $item;
    }

    public function saklar(): void {
        if ($this->keaktifan) {
            $this->item->berhenti();
            $this->keaktifan = false;
        } else {
            $this->item->beroperasi();
            $this->keaktifan = true;
        }
    }

    public function berubah(): void {
        $this->saklar();
    }
}
?>
