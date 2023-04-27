<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>

    <h1>Exercice 3</h1>
    <p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

    <?php
    // Déclaration de la chaîne de caractères à analyser
    $str = "Notre formation DL commence aujourd'hui";

    // La fonction str_replace() permet de remplacer une chaîne de caractères par une autre dans une chaîne donnée
    // Remplacement du mot "aujourd'hui" par "demain" et affichage de la nouvelle phrase à l'écran avec la fonction echo()
    echo "<p>Nouvelle phrase : « " . str_replace("aujourd'hui", "demain", $str) . " »</p>";
    ?>

</body>

</html>