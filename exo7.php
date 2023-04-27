<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>

<body>
    <h1>Exercice 7</h1>

    <p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>

    <?php
    // Déclaration de la variable contenant l'âge de l'enfant
    $age = 10;

    // Condition pour déterminer la catégorie de l'enfant en fonction de son âge
    if ($age == 6 or $age == 7) {
        echo "L’enfant qui a $age ans appartient à la catégorie « Poussin »";
    } elseif ($age == 8 or $age == 9) {
        echo "L’enfant qui a $age ans appartient à la catégorie « Pupille »";
    } elseif ($age == 10 || $age == 11) {
        echo "L’enfant qui a $age ans appartient à la catégorie « Minime »";
    } elseif ($age >= 12) {
        echo "L’enfant qui a $age ans appartient à la catégorie « Cadet »";
    } else {
        echo "La catégorie n'est pas gérée.";
    }
    ?>
</body>

</html>