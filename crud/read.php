<?php
    include "header.php";

$users = $db->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="table">
  <thead>
    <tr>
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
                <td><?php echo $user["prenom"] ?></td>
                <td><?php echo $user["nom"] ?></td>
                <td><?php echo $user["email"] ?></td>
                <td><?php echo $user["tel"] ?></td>
                <td>
                    <a href="update.php?id=<?php echo $user["id"] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $user["id"] ?>">Delete</a>
                </td>
                
            </tr>
       <?php }
    ?>  
  </tbody>
</table>