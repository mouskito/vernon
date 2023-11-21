<?php
// include ("db.php");
require ("db.php");

//Ajouter un nouvel utilisateur

//Preparation de la requete à executer
    $sql = $db->prepare(
        "INSERT INTO user (prenom,nom,email,tel) 
        VALUE
        (:prenom,:nom,:email,:tel)"
    );

    $sql->bindValue(":prenom", $_POST['prenom']);
    $sql->bindValue(":nom", $_POST['nom']);
    $sql->bindValue(":email", $_POST['email']);
    $sql->bindValue(":tel", $_POST['tel']);


// Executer (Insertion) en base 
$sql->execute();

//Redicrection
header('Location:form.php');
?>