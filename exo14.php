<h1>Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<?php 


$now = new DateTime();
// $now = DateTime::createFromFormat('d-m-Y', '21-05-2018');
$birthday = new DateTime('17-01-1985');
$diff = $now -> diff($birthday);

echo "Age de la personne " . $diff->y . " ans " . $diff->m . " mois et " . $diff->d . " jours.";

?>