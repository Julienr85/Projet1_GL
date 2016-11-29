<?php

if (empty ( $_POST['nom']) && empty ( $_POST['prenom']) && empty ( $_POST['optradio']) && empty ( $_POST['optradio']))
{
 echo "Vide";
}
else
{
 $monfichier = fopen('authentification.txt', 'r');

 while (!feof ($monfichier))
 {
   $resultats = fgetcsv ( $monfichier , 200, ";");

   if ($_POST['inputUser'] ==  $resultats[0]) {

       if ($_POST['inputPassword'] ==  $resultats[1]) {
           $date = date("d-m-Y");
           $heure = date("h-i-s");
           $resultats[4] =  $date;
           $resultats[5] = ";";
           $resultats[6] =  $heure;
           $lenghtTableau =  strlen($resultats[0])+ strlen($resultats[1]) +  strlen($resultats[2]) +  strlen($resultats[3])  + 4;
           fseek($monfichier,  $lenghtTableau); // On remet le curseur au début du fichier
           fputs($monfichier, $resultats[4]);
           fputs($monfichier, $resultats[5]);
           fputs($monfichier, $resultats[6]);
           header('location:http://localhost:8888/TP_PHP_ROUE/operations.php');
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
