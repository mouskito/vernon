<?php
    include "header.php";

    if (isset($_POST['login'])) {
        

        $sql = $db->prepare(
            "
            SELECT * FROM user WHERE email LIKE :email
            "
        );
// SELECT * FROM user WHERE email LIKE :email
$sql->bindValue(":email",$_POST['email']);
// SELECT * FROM user WHERE email LIKE "test@test.fr"
        $sql->execute();

        $requete = $sql->fetch();

        if (password_verify($_POST['pwd'], $requete['pwd'])) {
            echo 'Le mot de passe est valide ! <br>';
        } else {
            echo 'Le mot de passe est invalide <br> ';
        }

        var_dump($requete['prenom']);
        var_dump($_POST['pwd']);
    }

?>


<div class="container">
<form class="row g-3 needs-validation" novalidate  method="post">
  
  <div class="col-md-6">
    <label for="validationCustom0" class="form-label">Email</label>
    <input type="text" class="form-control" id="validationCustom0"  required name="email">
   
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="validationCustom03"  required name="pwd">
   
  </div>
 
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="login">se connecter</button>
  </div>
</form>
</div>