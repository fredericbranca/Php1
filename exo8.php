<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>

<body>

    <h1>Exercice 8</h1>

    <p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre</p>

    <?php
    // Déclaration de la variable contenant le nombre à multiplier
    $tab = 8;

    // Affichage de la table de multiplication
    echo "Affichage (pour la table de $tab)<br>";
    echo "Table de $tab :<br>";

    // Boucle while pour afficher les 3 premiers résultats de la table
    echo "Première boucle :<br>";
    $i = 1;
    while ($i < 4) {
        echo "$i * $tab  = " . $i * $tab . "<br>";
        $i++;
    }

    // Boucle for pour afficher les 3 premiers résultats de la table
    echo "2ème boucle :<br>";
    for ($i = 1; $i < 4; $i++) {
        echo "$i * $tab  = " . $i * $tab . "<br>";
    }
    ?>

</body>

</html>