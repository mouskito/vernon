<?php
    include "header.php";

    if (isset($_POST["submit"])) {

        $sql = $db->prepare(
            "INSERT INTO user(prenom,nom,email,pwd,tel)
                VALUE
            (:prenom,:nom,:email,:pwd,:tel)"
        );
        
        $password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

        $sql->bindValue(":prenom",$_POST["prenom"]);
        $sql->bindValue(":nom",$_POST["nom"]);
        $sql->bindValue(":email",$_POST["email"]);
        // md5("mon mot de passe")
        $sql->bindValue(":pwd",$password);
        // $sql->bindValue(":pwd",md5($_POST["pwd"]));
        $sql->bindValue(":tel",$_POST["tel"]);


       // $sql->execute();
        if ($sql->execute()) {
            ?>
                <div class="alert alert-success" role="alert">
                    Bravo,
                </div>
            <?php

            //Redirection avec ajout
            header('Location:read.php');
        }
    }
    

?>

<div class="container">
<form class="row g-3 needs-validation" novalidate  method="post">
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="validationCustom01" required name="prenom">
   
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Nom</label>
    <input type="text" class="form-control" id="validationCustom02" required name="nom">
   
  </div>
  <div class="col-md-6">
    <label for="validationCustom0" class="form-label">Email</label>
    <input type="text" class="form-control" id="validationCustom0"  required name="email">
   
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="validationCustom03"  required name="pwd">
   
  </div>
  <div class="col-md-6">
    <label for="validationCustom04" class="form-label">Tél</label>
    <input type="text" class="form-control" id="validationCustom04" required name="tel">
   
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
  </div>
</form>
</div>