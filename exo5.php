<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5</h1>

    <p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
    Attention, la valeur générée devra être arrondie à 2 décimales.</p>

    <?php
    //Déclaration de la variable en francs
    $franc = 100;

    //Taux de conversion Francs-Euros
    $convert = 6.55957;

    //Calcul de la valeur en euros avec arrondi à 2 décimales
    $euro = round($franc / $convert, 2);

    //Affichage du résultat
    echo "Montant en francs : $franc <br>";
    echo "$franc francs = $euro €";
    ?>
</body>
</html>





