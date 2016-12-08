<?php

//Sert à avoir accès aux élement de la page précedente
session_start();

if ( empty ( $_POST['providChoice']) &&  empty ( $_POST['distroChoice']) && empty ( $_POST['Version']) && empty ( $_POST['poids']) && empty ( $_POST['Prix']) && empty ( $_POST['Nom']) && empty ( $_POST['Image']) )
{
echo "Vide";
}

else
{
  echo $_POST['ProvidChoice'];
  $_SESSION["ProvidChoice"] =  $_POST['ProvidChoice'];
  $_SESSION["DistroChoice"] =  $_POST['DistroChoice'];
  $_SESSION["Version"] =  $_POST['Version'];
  $_SESSION["Poids"] =  $_POST['Poids'];
  $_SESSION["Prix"] = $_POST['Prix'];
  $_SESSION["Nom"] =  $_POST['Nom'];
  $_SESSION["Image"] =  $_POST['Image'];

  header('location:http://localhost:8888/Projet1_GL/Produit.php');
}


?>
