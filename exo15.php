<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15</title>
</head>
<body>

<h1>Exercice 15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</p>

<!-- On commence par la définition de la classe Personne -->
<?php
    class Personne
    {
        private string $_lastname;
        private string $_firstname;
        private DateTime $_birthday;

        // Constructeur pour initialiser la personne (prénom, nom, date de naissance)
        public function __construct(string $lastname, string $firstname, string $birthday)
        {
            $this->_lastname = $lastname;
            $this->_firstname = $firstname;
            $this->_birthday = new DateTime($birthday);
        }

        // Getter (accesseurs) et setter (mutateurs) pour les propriétés de Personne
        public function getLastName(): string
        {
            return $this->_lastname;
        }

        public function setLastName(string $lastname)
        {
            $this->_lastname = $lastname;
        }

        public function getFirstName(): string
        {
            return $this->_firstname;
        }

        public function setFirstName(string $firstname)
        {
            $this->_firstname = $firstname;
        }

        public function getBirthday(): DateTime
        {
            return $this->_birthday;
        }

        public function setBirthday(string $birthday)
        {
            $this->_birthday = new DateTime($birthday);
        }

        // Méthode pour connaître l'âge de la personne en fonction de sa date de naissance
        public function getAge(): string
        {
            return $this->_birthday->diff(new DateTime())->format("%y");
        }

        // Méthode pour afficher toutes les informations de la personne
        public function __toString()
        {
            return $this->_firstname . " " . $this->_lastname . " a " . Personne::getAge() . " ans.<br>";
        }
    }

    // On instancie deux personnes
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

    // On crée un tableau contenant ces deux personnes
    $personnes = [$p1, $p2];

    // On affiche toutes les personnes du tableau en utilisant la méthode __toString()
    foreach ($personnes as $personne) {
        echo $personne;
    }

    // On peut également afficher les informations d'une personne directement en appelant la méthode __toString()
    echo $p1;
    echo $p2;

    // Si on veut se servir du getter pour afficher la date de naissance
    echo $p1->getBirthday()->format('Y-m-d');

    ?>

</body>