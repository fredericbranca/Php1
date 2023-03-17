<h1>Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.</p>

<?php

$note = [10,12,8,19,3,16,11,13,9];
$taille = count($note); //compte le nombre de valeur dans le tableau
$moyenne = round((array_sum($note) / count($note)),2);

// for ($i = 0 ; $i < $taille ; $i++)
// {
//     $moyenne = $moyenne + $note[$i];
// }

echo "Les notes obtenues par l’élève sont : ". implode(", ", $note);
echo "<br>Sa moyenne générale est donc de : ". $moyenne  ;

?>