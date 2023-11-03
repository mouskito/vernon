<?php

    $tab = array("Moussa","Martine","Arsene",15,"Homer");
    $tab2 = ["Moussa","Martine","Arsene",15,"Homer", "Nouveau"];
    
    print_r($tab2);
    echo "<br>";
    
    array_push($tab2, "Lucie", "Khalid");
    $tab2[] = "Test";

    print_r($tab2);
    echo "<br>";

    // echo $tab;
    echo $tab[3];
    echo "<br>";
    // print_r($tab[0]);
    
    echo "<hr>";
    print_r(array_search("Arsene",$tab2));
    echo "<hr>";

    for ($i=0; $i < sizeof($tab2) ; $i++) { 
        echo $tab2[$i]; // echo $tab2[0] echo $tab2[1] echo $tab2[2]
        echo "<br>";
    }
    
    echo "<br>";
    echo count($tab2);
    echo "<br>";
    echo sizeof($tab2);
    //taille de tableau
    for ($i=0; $i < count($tab2) ; $i++) { 
        echo $tab2[$i]; // echo $tab2[0] echo $tab2[1] echo $tab2[2]
        echo "<br>";
    }
    
    echo "<hr>";
    foreach ($tab as  $value) {
       echo  " valeur ". $value ;
       echo "<br>";
    }

    echo "<hr>";
echo "Tableaux associatifs";

    $etudiant = array (  
        'prenom' => 'Moussa',
        'nom' => 'Camara',
        'age' => '28',
        'adresse' => 'Quelque part',
    );
    $etudiant2 = [ 
        'prenom' => 'Moussa',
        'nom' => 'Camara',
        'age' => '28',
        'adresse' => 'Quelque part',
    ];
    echo "<br>";

    foreach ($etudiant as $key => $value) {
        echo "Le $key est $value ";
        echo "<br>";
    }

    $personnes = array(
        1 => array(
            'prenom' => 'Moussa', 
            'nom' => 'Camara', 
            'telephone' => '0123456789', 
            'moyenne' => 10
        ),
        2 => array(
            'prenom' => 'Khalid', 
            'nom' => 'Sookia', 
            'telephone' => '06147895544',
            'moyenne' => 9
        ),
        3 => array(
            'prenom' => 'Moustakime', 
            'nom' => 'Kifia', 
            'telephone' => '071454565454',
            'moyenne' => 15,
            )
        );
        echo $personnes[1]['prenom']; //Moussa
        echo $personnes[2]['prenom']; //Moussa
        


?>