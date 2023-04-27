<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>

    <h1>Exercice 1</h1>
    <p>Soit la phrase « Notre formation DL commence aujourd'hui ».<br>
        Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase</p>

    <h2>Résultat exo 1</h2>

    <?php
    // Déclaration de la chaîne de caractères à analyser
    $str = "Notre formation DL commence aujourd'hui";

    //La fonction strlen() sert à obtenir la longueur d'une chaîne de caractères. La fonction renvoie le nombre de caractères présents dans la chaîne donnée en argument.
    // Calcul de la longueur de la chaîne de caractères avec la fonction strlen()
    $longueurStr = strlen($str);

    // Affichage du résultat à l'écran avec la fonction echo()
    echo "La phrase « $str » contient $longueurStr caractères<br>";

    // Affichage alternatif du résultat avec la fonction strlen() dans une chaîne de caractères
    echo "La phrase « $str » contient " . strlen($str) . " caractères<br>";
    ?>
</body>

</html>