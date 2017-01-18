<?php

session_start();

$string =  $_POST['providChoice'] . "," . $_POST['DistroChoice']  . ";" . $_POST['Version'] . ";" . $_POST['Poids']. ";" . $_POST['Prix']. ";". $_POST['Nom'].";" . $_POST['Image'].";" . "\n";
echo $string;

?>
