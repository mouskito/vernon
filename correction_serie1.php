<?php

echo " <h5> Correction de la serie d'exercice </h5>";

/*
* EXERCICE 1 - Afficher tous les nombres impairs jusqu'à 100
*/
echo " <h6> Exercice 1 </h6>";
/*$index = 0;

while ($index <= 100) {
    echo " Numero ".$index;

    $index++;
}*/

for ($i=0; $i <= 100; $i++) { 
    // Affichage de la liste entiere
    //echo "Numero ".$i;
    if ( $i%2 != 0) {
        echo $i." impair ";
    }
}

echo " <h6> Exercice 2 </h6>";
$annee = 2024;
if (($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400 == 0)) {
    echo "$annee est bissextile";
}else{
    echo "$annee n'est pas bissextile";
}

echo " <h6> Exercice 3 </h6>";
for ($i=2; $i <= 100; $i++) { 
    
    $estPremier = 0;
    //echo "valeur de I" .$i; 
    for ($j=1; $j <= $i ; $j++) { 
        //echo "valeur de J" .$j;
        if ($i % $j == 0) {
            $estPremier++;
        }
    }
    if ($estPremier == 2) {
        //echo $estPremier;
        echo $i;
    }
}
echo "<br>------ Autre version avec les booleans ---------- ";
for ($i=2; $i <= 100 ; $i++) { 
    $nombre = true;

    for ($j=2; $j < $i ; $j++) { 
        if ($i % $j == 0) {
            $nombre = false;
            break;
        }
    }
    
    if ($nombre) {
        echo $i;
    }
}

echo " <h6> Exercice 4 </h6>";
$age =36;
$sexe = "Femme";

if ($age >= 20 && $sexe == 'Homme') {
   echo " imposable";
}elseif ($sexe == 'Femme' && ($age >= 18 && $age <= 35)) {
    echo " imposable";
    
}else{
    echo "Non imposable";
}

echo " <h6> Exercice 5 </h6>";
$nbrePage = 100;

if ($nbrePage <= 10) {
    echo "prix à payer pour $nbrePage copies:" .$nbrePage * 0.10. "€";
} elseif ($nbrePage > 10 && $nbrePage <= 30) {
    echo "prix à payer pour $nbrePage copies:" .$nbrePage * 0.09. "€";
}else{
    echo "prix à payer pour $nbrePage copies:" .$nbrePage * 0.08. "€";
}



?>