<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<?php

$franc = 100;
$convert = 6.55957;
$euro = $franc / $convert;

echo "Montant en francs : $franc <br>";
echo "$franc francs = ". round($euro,2) ." €"; //arrondie décimale 

?>