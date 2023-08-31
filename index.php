<?php
require './vendor/autoload.php';

$predis = new Predis\Client();

echo $predis->ping();



?>