<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<?php

$art = 9.99;
$quant = 5;
$tva = 0.2;
$total = ($art * $quant);
$montant = $total*$tva + $total;

echo "Prix unitaire de l'article : $art<br>";
echo "Quantité : $quant<br>";
echo "Taux de la TVA : $tva<br>";
echo "Le montant de la facture à régler est de : $montant €";

?>