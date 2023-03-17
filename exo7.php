<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>

<?php
$nb = 10;

if ($nb == 6 or $nb == 7)
{
    echo "L’enfant qui a $nb ans appartient à la catégorie « Poussin »";
}
elseif ($nb == 8 or $nb == 9) 
{
    echo"L’enfant qui a $nb ans appartient à la catégorie « Pupille »";
}
elseif ($nb == 10 || $nb == 11)
{
    echo"L’enfant qui a $nb ans appartient à la catégorie « Minime »";
}
elseif($nb >= 12)
{
    echo"L’enfant qui a $nb ans appartient à la catégorie « Cadet »";
}
else
{
    echo"La catégorie n'est pas gérée.";
}

?>