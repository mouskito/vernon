<?php
// Les acces 
$user = "root";
$pass = "";
try
{
  $db = new PDO('mysql:host=localhost;dbname=bdd1', $user, $pass);
  // echo ("Connection OK");
}
catch (Exception $e)
{
  echo ("Connection KO");
    die('Erreur : ' . $e->getMessage());
}
?>
