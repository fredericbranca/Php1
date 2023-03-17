<h1>Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

<?php

$personne = array("Mickaël" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG");

foreach($personne as $name => $lang) //boucle pour tableau (ou liste)
{
    switch ($lang) 
    {
        case "FRA":
            echo "Salut ";
            break;
        case "ESP":
            echo "Hola ";
            break;
        case "ENG":
            echo "Hello " ;
            break;       
    } //série d'instruction, comme le if

    echo $name ."<br>";
}

?>