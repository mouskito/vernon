<?php
    include "header.php";
    
    $users = $db->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
?>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">prenom</th>
      <th scope="col">nom</th>
      <th scope="col">email</th>
      <th scope="col">tel</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ( $users as $user) {
    ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $user["prenom"] ?></td>
      <td><?php echo $user["nom"] ?></td>
      <td><?php echo $user["email"] ?></td>
      <td><?php echo $user["tel"] ?></td>
    </tr>
    <?php } 
    ?>
       
  </tbody>
</table>
