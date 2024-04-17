
<?php
// Include the class files
include_once("Instagram.php");
include_once("Whatsapp.php");

// Create objects
$instagram = new Instagram();
$whatsapp = new WhatsApp();

// Demonstrate Instagram functionalities
echo "Demonstrasi fungsi instagram  :";
echo "</br>";
$instagram->chat();
echo "</br>" ;
$instagram->sendPhotoAndVideo();
echo "</br>";
$instagram->publishPost();
echo "<br>";
echo "</br>";

// Demonstrate WhatsApp functionalities
echo "Demonstrasi fungsi WhatsApp :";
echo "</br>";
$whatsapp->chat();
echo "</br>";
$whatsapp->sendPhotoAndVideo();
echo "</br>";
$whatsapp->callGroupVideo();
echo "</br>";
?>
