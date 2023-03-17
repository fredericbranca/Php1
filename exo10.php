<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.
</p>

<?php

$apayer = 152;
$verse = 200;
$reste = $verse - $apayer;
echo "Montant à payer : $apayer €<br>";
echo "Motant versé : $verse €<br>";
echo "Reste à payer : $reste €<br>";

$cinq = $reste % 10;
$deux =  $cinq % 5;
$un = $deux % 2;


echo "***************************************************<br>";
echo "Rendu de monnaie :<br>";

    echo "". floor($reste / 10) ." billets de 10 € - "; //arrondie à l'entier inférieur
    echo "". floor($cinq / 5) ." billets de 5 € - ";
    echo "". floor($deux / 2) ." pièces de 2 € - ";
    echo "". floor($un) ." pièces de 1 € ";

?>