<?php
    //include ("db.php");
    require ("db.php");

    //echo $_POST['prenom'];
    //echo $_POST['nom'];
    //echo $_POST['email'];
    //echo $_POST['tel'];
    

    //ajouter nouvel utilisateur

    //preparation de la requete a executer
    $sql = $db->prepare(
        "INSERT INTO user (prenom,nom,email,tel) 
        VALUE (:prenom,:nom,:email,:tel)"
    );

    $sql->bindValue(":prenom", $_POST['prenom']);
    $sql->bindValue(":nom", $_POST['nom']);
    $sql->bindValue(":email", $_POST['email']);
    $sql->bindValue(":tel", $_POST['tel']);

    //execute l'incersion en BDD
    $sql->execute();

    //redirection
    header('location:form.php')

?>