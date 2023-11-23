<?php
    include "header.php";

    //Show d'un user
$sql = "SELECT * FROM user WHERE id= " . $_GET['id'];

$user = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

//Update / Edit d'un user
if (isset($_POST['update'])) {

    $sql = $db->prepare(
        "
            UPDATE user SET prenom=:prenom, nom=:nom,email=:email, tel=:tel WHERE id =:id
        "
    );

    $sql->bindValue(":prenom", $_POST["prenom"]);
    $sql->bindValue(":nom", $_POST["nom"]);
    $sql->bindValue(":email", $_POST["email"]);
    $sql->bindValue(":tel", $_POST["tel"]);
    // $sql->bindValue(":id", $_GET['id']);
    $sql->bindValue(":id",$_POST["mon_id"]);

    $sql->execute();

    header("Location:read.php");
}

?>


<div class="container">
    <form class="row g-3 needs-validation" novalidate  method="post">
    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Prénom</label>
        <input type="hidden" class="form-control" id="validationCustom01" required name="mon_id" 
        value="<?php echo $user['id'] ?>"
        >
        
    </div>



    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="validationCustom01" required name="prenom"
        value="<?php echo $user['prenom'] ?>"
        >
    
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Nom</label>
        <input type="text" class="form-control" id="validationCustom02" required name="nom"
        value="<?php echo $user['nom'] ?>"
        >
    
    </div>
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Email</label>
        <input type="text" class="form-control" id="validationCustom03"  required name="email"
        value="<?php echo $user['email'] ?>"
        >
    
    </div>
    <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Tél</label>
        <input type="text" class="form-control" id="validationCustom04" required name="tel"
        value="<?php echo $user['tel'] ?>"
        >
    
    </div>
    
    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="update">Submit form</button>
    </div>
    </form>
</div>