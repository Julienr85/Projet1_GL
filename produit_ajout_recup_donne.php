<?php

//Sert à avoir accès aux élement de la page précedente
session_start();

if ( empty ( $_POST['providChoice']) &&  empty ( $_POST['distroChoice']) && empty ( $_POST['machine_puphet']) && empty ( $_POST['adresseIp']))
{
echo "Vide";
}

else
{
  $_SESSION["ProvidChoice"] =  $_POST['providChoice'];
  $_SESSION["DistroChoice"] =  $_POST['distroChoice'];
  $_SESSION["Machine"] =  $_POST['machine_puphet'];
  $_SESSION["Adresseip"] =  $_POST['adresseip'];
  header('location:http://localhost:8888/Projet1_GL/panier.php');
}


?>
