<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>

<body>
    <h1>Exercice 6</h1>
    <p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
        d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
    </p>

    <h2>Résultat exo 6</h2>

    <?php
    // Déclaration des variables
    $art = 9.99;
    $qtt = 5;
    $tva = 0.2;

    // Calcul du total hors taxe
    $totalHT = $art * $qtt;

    // Calcul du montant de la TVA
    $montantTVA = $totalHT * $tva;

    // Calcul du montant TTC
    $montantTTC = $totalHT + $montantTVA;

    // Affichage du résultat
    echo "Prix unitaire de l'article : $art €<br>";
    echo "Quantité : $qtt<br>";
    echo "Taux de la TVA : $tva<br>";
    echo "Le montant de la facture à régler est de : " . round($montantTTC, 2) . " €";
    ?>
</body>

</html>