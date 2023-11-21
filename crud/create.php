<?php
    include "header.php";

    if (isset($_POST["submit"])) {

        $sql = $db->prepare(
            "INSERT INTO user(prenom,nom,email,tel)
                VALUE
            (:prenom,:nom,:email,:tel)"
        );
        
        $sql->bindValue(":prenom",$_POST["prenom"]);
        $sql->bindValue(":nom",$_POST["nom"]);
        $sql->bindValue(":email",$_POST["email"]);
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
    <label for="validationCustom03" class="form-label">Email</label>
    <input type="text" class="form-control" id="validationCustom03"  required name="email">
   
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