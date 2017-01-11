<?php

session_start();

$monfichier = fopen('ajout_vm.json', 'a');
if ($monfichier){
  $string =  $_POST['providChoice'] . "," . $_POST['DistroChoice']  . ";" . $_POST['Version'] . ";" . $_POST['Poids']. ";" . $_POST['Prix']. ";". $_POST['Nom'].";" . $_POST['Image'].";" . "\n";
  $longueur =  strlen($string);
  fseek($monfichier, $longueur);
  fputs($monfichier, $string);
}


//Sert à avoir accès aux élement de la page précedente
/*$json = file_get_contents("ajout_vm.json");

var_dump(json_decode($json));
$parsed_json = json_decode($json);


/*if ( empty ( $_POST['providChoice']) &&  empty ( $_POST['distroChoice']) && empty ( $_POST['Version']) && empty ( $_POST['poids']) && empty ( $_POST['Prix']) && empty ( $_POST['Nom']) && empty ( $_POST['Image']) )
{
echo "Vide";
}

else
{
  $_SESSION["ProvidChoice"] =  $_POST['ProvidChoice'];
  $_SESSION["DistroChoice"] =  $_POST['DistroChoice'];
  $_SESSION["Version"] =  $_POST['Version'];
  $_SESSION["Poids"] =  $_POST['Poids'];
  $_SESSION["Prix"] = $_POST['Prix'];
  $_SESSION["Nom"] =  $_POST['Nom'];
  $_SESSION["Image"] =  $_POST['Image'];

  header('location:http://localhost:8888/Projet1_GL/Produit.php');
}*/


?>
