<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
</head>

<body>
    <h1>Exercice 10 - Calcul de rendu de monnaie</h1>

    <?php
    // Déclaration des variables
    $apayer = 152;
    $verse = 200;
    $reste = $verse - $apayer;

    // Affichage des montants
    echo "Montant à payer : $apayer €<br>";
    echo "Montant versé : $verse €<br>";
    echo "Reste à payer : $reste €<br>";

    // Calcul du rendu de monnaie
    $cinq = $reste % 10;
    $deux =  $cinq % 5;
    $un = $deux % 2;

    // Affichage du rendu de monnaie
    echo "***************************************************<br>";
    echo "Rendu de monnaie :<br>";
    echo "". floor($reste / 10) ." billets de 10 € - "; // floor() : arrondie à l'entier inférieur
    echo "". floor($cinq / 5) ." billets de 5 € - ";
    echo "". floor($deux / 2) ." pièces de 2 € - ";
    echo "". floor($un) ." pièces de 1 € ";
    ?>
</body>

</html>