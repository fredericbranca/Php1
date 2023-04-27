<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12</title>
</head>

<body>
    <h1>Exercice 12</h1>
    <p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
        (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
        respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

    <h2>Résultat exo 12</h2>

    <?php

    // Déclaration de la liste des personnes et de leur langue
    $personne = array("Mickaël" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG");

    // Boucle pour parcourir le tableau et dire bonjour à chaque personne dans leur langue respective
    foreach ($personne as $nom => $langue) {
        switch ($langue) {
            case "FRA":
                echo "Salut ";
                break;
            case "ESP":
                echo "Hola ";
                break;
            case "ENG":
                echo "Hello ";
                break;
        }
        echo $nom . "<br>";
    }

    ?>

</body>

</html>