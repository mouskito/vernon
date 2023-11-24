<?php
    include "header.php";

$users = $db->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Avatar</th>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Tél</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach ($users as $user) {
            ?>
            <tr>
                <td>
                  <img src="uploads/<?php echo $user["avatar"] ?>" alt="">
                  
                </td>
                <td><?php echo $user["prenom"] ?></td>
                <td><?php echo $user["nom"] ?></td>
                <td><?php echo $user["email"] ?></td>
                <td><?php echo $user["tel"] ?></td>
                <td>
                    
                    <a href="update.php?id=<?php echo $user["id"] ?>">
                        <button type="button" class="btn btn-outline-warning">
                            EDIT
                        </button></a>
                    
                    <!-- a href="delete.php?id=<php echo $user["id"] ?>">Delete</a> -->
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" 
                    data-bs-target="#id-<?php echo $user["id"] ?>">
                        Delete
                    </button>
                </td>
                
            </tr>
            
<!-- Modal -->
<div class="modal fade" id="id-<?php echo $user["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Suppression </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Voulez-vous vraiment supprimer votre compte <?php echo $user["prenom"]." ".$user['nom'] ?> ? 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
        <a href="delete.php?id=<?php echo $user["id"] ?>">
            <button type="button" class="btn btn-danger"> OUI
</button>
            </a>
      </div>
    </div>
  </div>
</div>

       <?php }
    ?> 

    
  </tbody>
</table>


