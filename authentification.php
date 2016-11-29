<?php

$monfichier = fopen('admin.txt', 'r');

if (empty ( $_POST['inputUser']) && empty ( $_POST['inputPassword']))
{
 echo "Vide";
}
else
{
 $monfichier = fopen('admin.txt', 'r');

 while (!feof ($monfichier))
 {
   $resultats = fgetcsv ( $monfichier , 200, ";");

     if ($_POST['inputUser'] ==  $resultats[0]) {

         if ($_POST['inputPassword'] ==  $resultats[1]) {
             header('location:http://localhost:8888/Projet1_GL/administrateur.php');
             break;
           } else {
           echo "Problème de mot de passe";
          }
     } else {
         echo "Problème de user";
     }
 }
 fclose($monfichier);
}
?>
