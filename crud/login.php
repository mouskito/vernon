<?php
    session_start();

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

        $result = $sql->fetch();

        if (password_verify($_POST['pwd'], $result['pwd'])) {
            // echo 'Le mot de passe est valide ! <br>';
            // $_SESSION['prenom_dans_session'] = $result['prenom'];
            // $_SESSION['nom_dans_session'] = $result['nom'];

          $_SESSION['user'] = $result;
          // $_SESSION = $result;

            header("Location:read.php");
           
        } else {
            echo 'Le mot de passe est invalide <br> ';
        }

       
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