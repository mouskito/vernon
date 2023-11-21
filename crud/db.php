<?php
//Les accés à la BDD
$user = "root";
$pass = "";

try
{
  $db = new PDO('mysql:host=localhost;dbname=vernom', $user, $pass);
}
catch (Exception $e)
{
  echo ("Connection KO");
    die('Erreur : ' . $e->getMessage());
}
?>
