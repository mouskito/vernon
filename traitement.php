<?php
    //include ("db.php");
    require ("db.php");
    

    // echo $_POST['prenom'];
    // echo $_POST['nom'];
    // echo $_POST['email'];
    // echo $_POST['tel'];

    /*
        CREATE TABLE `vernom`.`user` (`id` INT NOT NULL AUTO_INCREMENT , 
        `prenom` VARCHAR(20) NOT NULL , 
        `nom` VARCHAR(20) NOT NULL , 
        `email` VARCHAR(50) NOT NULL , 
        `tel` VARCHAR(15) NOT NULL ,
        PRIMARY KEY (`id`),
        UNIQUE (`email`)) ENGINE = InnoDB;
    */

    //Ajouter un nouvel utilisateur

    //Preparation de la requete à executer
    $sql =  $db->prepare(
        "INSERT INTO user (prenom,nom,email,tel) 
        VALUE 
        (:prenom,:nom,:email,:tel)"
    );

    $sql->bindValue(":prenom", $_POST['prenom']);
    $sql->bindValue(":nom", $_POST['nom']);
    $sql->bindValue(":email", $_POST['email']);
    $sql->bindValue(":tel", $_POST['tel']);

    //Execute (Insertion) en Base
    $sql->execute();

    //Redirection
    header('Location:list.php');

?>