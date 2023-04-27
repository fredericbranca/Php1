<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11</title>
</head>

<body>

    <h1>Exercice 11</h1>
    <p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
        tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
        d’afficher le nombre de marques de voitures présentes dans le tableau.
    </p>

    <?php
    // Déclaration d'un tableau de marques de voitures
    $marques = ["Peugeot", "Renault", "BMW", "Mercedes"];

    // Affichage du nombre de marques de voitures dans le tableau
    echo "Il y a " . count($marques) . " marques de voitures dans le tableau : <br>";

    // Parcours du tableau et affichage de chaque marque de voiture sur une ligne
    echo "<ul>";
    foreach ($marques as $marque) {
        echo "<li> " . $marque . "</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>