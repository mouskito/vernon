<?php
    /**
     * LES CONDITIONS
     */
echo "<h4>Les operations de comparaison si(if) sinon(else) </h4>";
// LES IF - ELSE
//EGAL
$nom = "Camara";
echo "<b>Egal avec == </b> <br>";
    if ($nom == "Camara") {
        echo "Bonjour ".$nom;
    }else{
        echo "Bonjour inconnu";
    }
    echo '<hr>';

    echo "<b>Different de  avec != </b> <br>";
    if ($nom != "Camara") {
        echo "Bonjour ".$nom;
    }else{
        echo "Bonjour inconnu";
    }
    echo '<hr>';
    
echo "<b> (strictement) inferieur avec < </b> <br>";
    $moyenne = 10;
    if ($moyenne < 10) {
        echo "echec";
    } else {
        echo "admis";
    }
    echo '<hr>';

echo "<b> (strictement) supérieur avec > </b> <br>";
    $moyenne = 10;
    if ($moyenne < 10) {
        echo "echec";
    } else {
        echo "admis";
    }
    echo '<hr>';

echo "<b> inférieur ou égal avec <= </b> <br>";
    $moyenne = 10;
    if ($moyenne <= 10) {
        echo "admis";
    } else {
        echo "echec";
    }
    echo '<hr>';

echo "<b> superieur ou égal avec >= </b> <br>";
    $moyenne = 10;
    if ($moyenne >= 10) {
        echo "admis";
    } else {
        echo "echec";
    }
    echo '<hr>';

    
    //SWITCH CASE
    echo "<h4>Les switch case (selon) </h4>";
    $age = 18;
    
    switch ($age) {
        case 17:
            echo 'Mineur';
            break;
            
            case 18:
                echo 'Majeur';
            break;
            
        case 50:
            echo 'Senior';
            break;
            
            default:
            echo 'mort';
            break;
        }
        echo '<hr>';
        
        //LES TERNAIRES
        echo "<h4>Les ternaires  </h4>";
        echo $age > 17 ? "Youpiiiii":"OUPS";
     /**
      * equivalent
      */
    // if ($age>17) {
    //     echo "Youpiiiii";
    // } else {
    //     echo "OUPS";
    // }
    
    echo "<h4>Les operations de logique avec et (&&) ou(||) </h4>";
    if ($nom == "Camara" && $age == 15) {
        echo " Super!";
    }

    if ($nom == "Camara" || $age == 15) {
        echo " Super!";
    }
    
    echo "<h4>Les operations arithmétiques avec + - * / % </h4>";
    echo "<h5> ADDITION </h5>";
    echo " Addition ". 10+5;

    echo "<h5> SOUSTRACTION </h5> ";
    echo " Soustraction : ". 10 - 5;
    echo "<hr>";
    
    echo "<h5> MULTIPLICATION </h5> ";
    echo " Multiplication : ". 10 * 5;
    echo "<hr>";
    
    echo "<h5> DIVISION </h5> ";
    echo " Division : ". 10 / 5;
    echo "<hr>";
    
    echo "<h5> MODULO (reste de la division) </h5> ";
    echo " Modulo : ". 10 % 5;
    echo "<hr>";

?>