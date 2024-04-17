<?php

include_once("VideoGroupManager.php");

class WhatsApp extends VideoGroupManager {
    public function chat(): void {
        echo "Pesan di WhatsApp...\n";
    }

    public function sendPhotoAndVideo(): void {
        echo "Kirim photo dan video di WhatsApp...\n";
    }

    public function callGroupVideo(): void {
        echo "Panggilan video group di WhatsApp...\n";
    }
}
?>