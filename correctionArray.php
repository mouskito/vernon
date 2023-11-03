<?php
/*
EXERCICE 1:
Soit le tableau suivant : 
$semaine = ['lundi', 'mar', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanc'] ; 
Retirer la dernière valeur du tableau
Afficher les valeurs du tableau
Ajouter la valeur la valeur 'dimanche' à la fin du tableau
Remplacer le mar par mardi
Afficher le nombre de valeurs du tableau
Afficher la 5éme valeur
*/

require ("header.php");

echo "<h4> Exercice 1 </h4>";
$semaine = ['lundi', 'mar', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanc'] ;
print_r($semaine);

echo "<h6> Retirer la dernière valeur du tableau </h6>";
array_pop($semaine);
echo "<hr>";
echo "<h6> Afficher les valeurs du tableau </h6>";
print_r($semaine);
echo "<hr>";

echo "<h6> Ajouter la valeur la valeur 'dimanche' à la fin du tableau </h6>";
array_push($semaine,"dimanche");
print_r($semaine);
echo "<hr>";

echo "<h6> Remplacer le mar par mardi </h6>";
// $semaine[1] = "mardi";
$semaine[array_search("mar",$semaine)] = "mardi";
print_r($semaine);
echo "<hr>";

echo "<h6> Afficher le nombre de valeurs du tableau </h6>";
print_r(count($semaine));
// print_r(sizeof($semaine));
echo "<hr>";

echo "<h6> Afficher la 5éme valeur </h6>";
print_r($semaine[5]);
echo "<hr>";
echo "<hr>";
echo "<hr>";
/*
Exercice 2
Faire une liste d’étudiant avec nom prénom et moyenne et
 afficher des admis et des non-admis.

Conseil: pensez au tableau MULTIDIMENSIONNEL*/

echo "<h4>EXERCICE 2 </h4>";

$etudiants = array(
    1 => array(
        'prenom' => 'Moussa', 
        'nom' => 'Camara', 
        'moyenne' => 10
    ),
    2 => array(
        'prenom' => 'Khalid', 
        'nom' => 'Sookia', 
        'moyenne' => 9
    ),
    3 => array(
        'prenom' => 'Moustakime', 
        'nom' => 'Kifia', 
        'moyenne' => 15,
        )
    );

    foreach ($etudiants as $key => $value) {
    
        if ($value['moyenne'] > 9) {
           echo " ".$value['prenom']. " est admis";
           echo "<hr>";
        }
    }
    foreach ($etudiants as $key => $value) {
    
        if ($value['moyenne'] <= 9) {
           echo " ".$value['prenom']. " n'est pas admis";
           echo "<hr>";
        }
    }
?>
    <main>
        
    </main>
<?
require ("footer.php");
?>