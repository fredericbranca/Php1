<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
    <p>Une phrase est dite palindrome si elle se lit de la même façon de gauche à droite et de droite à gauche.</p>

    <?php
    // Déclaration de la chaîne de caractères à analyser
    $str = "Engage le jeu que je le gagne";

    // Remplacer les espaces par rien pour obtenir une chaîne de caractères sans espaces
    $spaceStr = str_replace(" ", "", $str);

    // Transformer la chaîne en minuscules pour éliminer les différences entre majuscules et minuscules
    $lowerStr = strtolower($spaceStr);

    // La fonction strrev() est une fonction prédéfinie en PHP qui permet d'inverser une chaîne de caractères.
    // Inverser la chaîne de caractères avec la fonction prédéfinie strrev()
    $inverseStr = strrev($lowerStr);

    // Comparer la chaîne inversée avec la chaîne d'origine pour déterminer si la phrase est un palindrome
    if ($lowerStr === $inverseStr) {
        echo "La phrase « $str » est un palindrome.";
    } else {
        echo "La phrase « $str » n'est pas un palindrome.";
    }
    ?>
</body>
</html>