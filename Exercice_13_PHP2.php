<h1>Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels.<br> La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule. <br>
v1 ➔ "Peugeot","408",5 <br>
v2 ➔ "Citroën","C4",3  <br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
suivants :</p>

<?php

Class Voiture{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle = 0;

    public function __construct($marque, $modele, $_nbPortes, $_vitesseActuelle){
        $this ->_marque = $marque;
        $this ->_modele = $modele;
        $this ->_nbPortes = $_nbPortes;
        $this ->_vitesseActuelle = $_vitesseActuelle;
    }

    public function getMarque(){
        
    }
}

?>