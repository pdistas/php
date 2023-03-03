<?php

require __DIR__ . '/vendor/autoload.php';

use Sinergi\BrowserDetector\Browser;
use Sinergi\BrowserDetector\Os;

$browser = new Browser();
$os = new Os();

echo 'Seu navegador é: ' . $browser->getName();

echo '<br>';		

echo 'Seu SO é: ' . $os->getName();
   
?>