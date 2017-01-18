<?php
session_start();

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
           $_SESSION['nom'] =  $resultats[2];
           header('location:http://localhost:8888/ApplicationVmMaster/Projet1_GL/administrateur.php');
           break;
         } else {
         echo "Problème de mot de passe";
         header('location:http://localhost:8888/ApplicationVmMaster/Projet1_GL/index.php');
        }
   } else {
       echo "Problème de user";
       header('location:http://localhost:8888/ApplicationVmMaster/Projet1_GL/index.php');
   }
 }
 fclose($monfichier);
}

?>
