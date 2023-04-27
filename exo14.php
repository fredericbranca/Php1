<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14</title>
</head>
<body>
    <h1>Exercice 14</h1>
    <p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

    <?php 
    // Instanciation des objets DateTime pour la date de naissance et la date courante
    $now = new DateTime();
    $birthday = new DateTime('17-01-1985');

    // Calcul de la différence entre les deux dates
    $diff = $now->diff($birthday);

    // Affichage de l'âge de la personne en années, mois et jours
    echo "Age de la personne " . $diff->y . " ans " . $diff->m . " mois et " . $diff->d . " jours.";
    ?>
</body>
</html>