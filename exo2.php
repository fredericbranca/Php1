<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>

    <h1>Exercice 2</h1>
    <p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
        contenus dans celle-ci.</p>

    <?php
    // Déclaration de la chaîne de caractères à analyser
    $str = "Notre formation DL commence aujourd'hui";

    //La fonction str_word_count() sert à compter le nombre de mots dans une chaîne de caractères.
    // Comptage du nombre de mots avec la fonction str_word_count()
    $nbMotsStr = str_word_count($str);

    // Affichage du résultat à l'écran avec la fonction echo()
    echo "La phrase « $str » contient $nbMotsStr mots<br>";
    ?>
</body>

</html>