<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13</title>
</head>

<body>
    <h1>Exercice 13</h1>
    <p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
        coefficient). Elle devra être affichée avec 2 décimales.</p>

    <h2>Résultat de l'exercice</h2>

    <?php
    // Tableau des notes
    $note = [10, 12, 8, 19, 3, 16, 11, 13, 9];
    
    // Calcul de la moyenne générale avec la fonction array_sum() et count() pour calculer la somme et le nombre d'éléments du tableau
    $moyenne = round((array_sum($note) / count($note)), 2);

    // Affichage des notes et de la moyenne
    echo "Les notes obtenues par l'élève sont : " . implode(", ", $note);
    echo "<br> Sa moyenne générale est de : " . $moyenne;
    ?>

</body>

</html>