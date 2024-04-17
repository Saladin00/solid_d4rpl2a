<?php
// SosialMedia.php
abstract class SosialMedia {
    abstract public function chat(): void;
    abstract public function sendPhotoAndVideo(): void;
}
?>