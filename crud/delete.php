<?php
    include "header.php";

    $sql = $db->prepare(
        "
            DELETE from user WHERE id =:id
        "
    );

    $sql->bindValue("id",$_GET['id']);

    $sql->execute();

    header("Location:read.php");
?>