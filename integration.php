<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <?php
        $etudiant = array (  
            'prenom' => 'Moussa',
            'nom' => 'Camara',
            'age' => '28',
            'adresse' => 'Quelque part',
        );

        echo "Je m'appelle Machin";
    ?>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PRENOM</th>
      <th scope="col">NOM</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $etudiant ['prenom']; ?></td>
      <td><?php echo $etudiant ['nom']; ?></td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  
  </tbody>
</table>
</div>
   </body>
</html>