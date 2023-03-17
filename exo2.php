<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
contenus dans celle-ci.</p>

<?php

$mot = str_word_count($phrase); //nom de mot

if ($mot == "1") 
{
    echo "La phrase « $phrase » contient $mot mot<br>";
}
else {
    echo "La phrase « $phrase » contient $mot mots<br>";
    }

?>