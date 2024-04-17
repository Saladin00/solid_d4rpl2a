
<?php
// Instagram.php
include_once("PostMediaManager.php");

class Instagram extends PostMediaManager {
    public function chat(): void {
        echo "Kirim pesan di Instagram...\n";
    }

    public function sendPhotoAndVideo(): void {
        echo "kirim foto dan video di Instagram...\n";
    }

    public function publishPost(): void {
        echo "menerbitkan postingan di Instagram...\n";
    }
}
?>
