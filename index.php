<?php
 
    $nombre = 5;
    $tab = array(5,"test");

    // LES CONSTANTES
    const PRENOM = "moussa";
    const CONST_PRENOM = "MoussAAAA";
    const PRENOM_CONSTANTE = "MOUSSA";
    const PRIX = 150.99;

    // Autre façon de declarer une CONSTANTE
    define("NOM", "mouskito");

//Affichage des variables
echo $nombre;

$prenom = "Moussa";
$nom = "CAMARA";
echo $prenom;

echo $nom;

// LES CONCATENATIONS
$fullname = $prenom.' '.$nom;
echo $fullname;

echo $prenom.' '.$nom;

// INTERPOLATIONS
echo '<h3> INTERPOLATIONS </h3>';

echo ' <br> Bonjour, $prenom';
echo " <br> Bonjour, $prenom";
print($fullname);

//pour afficher un tab, utiliser print_r
//echo $tab;
print $nombre;
print_r($tab);

$age  = 35.55;
echo '<br>';
echo '<br>';
echo '<hr>';
echo "Bonjour ".$fullname." et j'ai ".$age;

echo "Bonjour $fullname et j'ai $age";
print( "Bonjour $fullname et j'ai $age");
printf("Bonjour %s %s, et j'ai %s", $prenom, $nom, $age);

echo '<hr>';
/* PORTEE DES VARIABLES */
$global = " Je suis la variable globale";
// GLOBAL 
echo $global;

function variableLocale() {
    $local = " Je suis la variable locale";
    $compter = 0;
    $compter = $compter +1;
    echo $local.' ==> '.$compter;
}

variableLocale();
variableLocale();
variableLocale();
echo '<br>';
function variableLocaleStatic() {
    $local = " Je suis la variable locale";
    static $compter = 0;
    $compter = $compter +1;
    echo $local.' ==> '.$compter;
}

variableLocaleStatic(); // 1
variableLocaleStatic(); //2
variableLocaleStatic();//3
//echo $local;

/**
 * LES CONSTANTES: valeur fixe, on ne pourra pas la modifier
 */

 echo '<hr>';
 echo PRENOM;
 echo NOM;

 echo '<hr>';
 echo '<hr>';

 echo 'Fichier: ' .__FILE__. "<br>";
echo 'Ligne: ' .__LINE__ 	. "<br>";  

?>