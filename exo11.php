<h1>Exercice 11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.
</p>

<?php

echo "Il y a 4 marques de voitures dans le tableau : <br>";

$marques = ["Peugeot", "Renault", "MBW", "Mercedes"]; //liste

echo "<ul>";
foreach ($marques as $marque)
{
    echo "<li> ". $marque . "</li>";
}
echo "</ul>";

?>