<h1>Exercice 15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</p>

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

    public function getLastName()
    {
        return $this->_lastname;
    }

    public function setLastName(string $lastname)
    {
        $this->_lastname = $lastname;
    }

    public function getFirstName()
    {
        return $this->_firstname;
    }

    public function setFirstName(string $firstname)
    {
        $this->_firstname = $firstname;
    }

    public function getBirthday()
    {
        return $this->_birthday;
    }

    public function setBirthday(string $birthday)
    {
        $this->_birthday = $birthday;
    }

    // Méthode pour connaître l'âge de la personne en fonction de sa date de naissance

    public function getAge() :string
    {
        return $this->_birthday-> diff(new DateTime())->format("%y");
    }

    // Méthode pour afficher toutes les informations de la personne

    public function __toString()
    {
        return $this->_firstname . " " . $this->_lastname . " a " . Personne::getAge() . " ans.<br>";
    }
}


$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

$personnes = [$p1, $p2];

foreach ($personnes as $personne) {
    echo $personne;
}

echo $p1;
echo $p2;

?>