<?php
//les accés a la BDD
$user = "root";
$pass = "";
try
{
  $db = new PDO('mysql:host=localhost;dbname=vernon', $user, $pass);
  //echo ("Connection OK");
}
catch (Exception $e)
{
  echo ("Connection KO");
    die('Erreur : ' . $e->getMessage());
}
?>
