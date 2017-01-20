<?php
session_start();
/* Changer la redirection pour la sauvegarde des identifiants vers la BDD*/
$monfichier = fopen('formulaire.json', 'a');
if ($monfichier){
  $string =  $_POST['nom'] . ";" .  $_POST['prenom']  . ";" . $_POST['inputEmail']. ";" . $_POST['inputPassword']. ";" . $_POST['reenterPassword']. ";" . "\n";
  $longueur =  strlen($string);
  fseek($monfichier, $longueur);
  fputs($monfichier, $string);
  header('location:http://localhost:8888/Projet1_GL/');
}
?>
