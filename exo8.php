<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre</p>

<?php
$tab = 8;
echo "Affichage (pour la table de $tab)<br>";
echo "Table de $tab :<br>";
echo"Première boucle :<br>";

$i=1;
while ($i < 4)
{
    echo "$i * $tab  = ". $i * $tab ."<br>";
    $i++;
}

echo "2ème boucle :<br>";

for ($i = 1; $i < 4; $i++)
{
    echo "$i * $tab  = ". $i * $tab ."<br>";
}

?>