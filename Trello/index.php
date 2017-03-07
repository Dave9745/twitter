<?php

require('autoloader.php');
Autoloader::register();

$accueil = new Controller();
$accueil->accueil();

?>