<?php

echo '<h4> LES BOUCLES </h4> ';

echo '<hr>';
echo '<h5> WHILE ( TANT QUE) </h5> ';

$compter = 0;
// 0 <= 10
while ($compter <= 10) {
    echo " Dans la boucle WHILE". $compter. "<br>";
    
    $compter = $compter + 1;
    // $compter++;
}

echo '<hr>';
echo '<h5> FOR (POUR) </h5> ';
echo '<hr>';

for ($i=0; $i <= 10 ; $i++) { 
    echo " Dans la boucle FOR". $i. "<br>";
}

echo '<hr>';
echo '<h5> DO WHILE (Fait TANT QUE) </h5> ';
echo '<hr>';
$index=0;
do {
    echo " Dans la boucle DO WHILE ===>". $index. "<br>";

    $index++;
} while ($index <= 2);


?>