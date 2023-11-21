<?php
    require ("db.php");

    $sql = "SELECT * FROM user";

    $user = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);



?>