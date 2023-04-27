<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
</head>

<body>

    <h1>Exercice 9</h1>

    <p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.</p>
    <p>Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
        plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »)</p>

    <?php

    // Définition des variables
    $age = 17;
    $sexe = "F";

    // Affichage des valeurs des variables
    echo "Age : $age<br>";
    echo "Sexe : $sexe<br>";

    // Vérification de la condition pour savoir si la personne est imposable ou non
    if ($age > 18 && $age <= 35 && $sexe == "F" || $age > 20 && $sexe == "H") {
        echo "La personne est imposable.<br>";
    } else {
        echo "La personne n'est pas imposable.";
    }

    ?>

</body>

</html>