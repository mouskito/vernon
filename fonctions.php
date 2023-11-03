<?php
include ("headqqsqser.php");

// fonction predefinie
$chaine = 'UNE CHAINE DE CARACTERES';
echo strtolower($chaine);
echo strtoupper($chaine);
echo strlen($chaine);

// fonction classique
//Creattion de la fonction
function direBonjour(){
    echo "Bonjour, Comment ça va ?";
}

//Appel de la fonction
direBonjour();

//function avec parametres
// $firstname = "Maxime";
function addition($nbre, $nbre2=20) {
    //traitement
    $result = $nbre +$nbre2;
    $test = $result * 10;

    //sortie
    return $result;
}

//function avec parametres indefinis
// $firstname = "Maxime";
function additionIndefini(...$nbre) {
    //traitement
    $result = 0;
    print_r( $nbre);
    foreach ($nbre as $value) {
        $result = $result+ $value;
        // $result += $value;
    }
    //sortie
    return $result;
}

echo "<br>";
 echo additionIndefini(5);
 echo "<br>";
 echo additionIndefini(5,15);
 echo "<br>";
 echo additionIndefini(5,15,30);
 echo "<br>";

function direBjr($name, $firstname){
    // global $firstname;
  $result ="Bonjour $name et $firstname, Comment ça va ?<br>";
    return $result;
}

//Appel de la fonction
direBjr("Moussa", "Maxime");
echo "<br>";
echo addition(5,15);
?>