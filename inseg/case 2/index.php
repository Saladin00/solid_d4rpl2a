<?php
include_once("PrinterEntryLevel.php");
include_once("PrinterFlagship.php");
include_once("PrinterMidRange.php");

$entryLevelPrinter = new PrinterEntryLevel();
$flagshipPrinter = new PrinterFlagship();
$midRangePrinter = new PrinterMidRange();

echo "Entry Level Printer:\n";
$entryLevelPrinter->cetakKertas();

echo "\nFlagship Printer:\n";
$flagshipPrinter->cetakKertas();
$flagshipPrinter->terimaFax();
$flagshipPrinter->scanKertas();

echo "\nMid-Range Printer:\n";
$midRangePrinter->cetakKertas();
$midRangePrinter->scanKertas();
?>