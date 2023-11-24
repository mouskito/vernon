<?php
    include "header.php";

    if (isset($_POST["submit"]) && isset($_FILES['avatar']) ) {
      echo "<pre>";
      print_r($_POST);
      echo "</pre>";
      
      
        /** UPLOAD IMAGE */

        // echo "<pre>";
        //   print_r($_FILES['avatar']);
        // echo "</pre>";

        $source = $_FILES['avatar']['tmp_name'];

        $destination = "uploads";

        // $destination2 = "images";

        // Verifie si le dossier n'existe pas
        if (!is_dir($destination)) {
          // mkdir crée le dossier
          mkdir($destination);
        }

        // move_uploaded_file(source,destination);
        move_uploaded_file($source,$destination."/".$_FILES['avatar']['name']);

       $image_name = $_FILES['avatar']['name'];

        /** FIN UPLOAD IMAGE */

        //METTRE A JOUR LA BDD
//ALTER TABLE `user` ADD `avatar` VARCHAR(250) NOT NULL AFTER `tel`;


        $sql = $db->prepare(
            "INSERT INTO user(prenom,nom,email,pwd,tel,avatar)
                VALUE
            (:prenom,:nom,:email,:pwd,:tel,:avatar)"
        );

        $password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

        $sql->bindValue(":prenom",$_POST["prenom"]);
        $sql->bindValue(":nom",$_POST["nom"]);
        $sql->bindValue(":email",$_POST["email"]);
        // md5("mon mot de passe")
        $sql->bindValue(":pwd",$password);
        // $sql->bindValue(":pwd",md5($_POST["pwd"]));
        $sql->bindValue(":tel",$_POST["tel"]);
        $sql->bindValue(":avatar",$image_name);

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
<form class="row g-3"  method="post" enctype="multipart/form-data">
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
  <div class="col-md-6">
    <label for="validationCustom" class="form-label">Avatar</label>
    <input type="file" class="form-control" id="validationCustom"  name="avatar">
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
  </div>
</form>
</div>