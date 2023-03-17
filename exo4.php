<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<?php

$phrase2 = "Engage le jeu que je le gagne";
$space = str_replace(" ","",$phrase2); //remplacer un mot, ici supprime les espaces
$lower = strtolower($space); //supprime les majuscules
$inverse = strrev($lower); //inverse la phrase

if ($lower === $inverse)
{
    echo "La phrase « $phrase2 » est palindrome.";
}
else
{
    echo "La phrase « $phrase2 » n'est pas palindrome.<br>";
}

?>