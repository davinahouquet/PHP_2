<h1>Exerice 9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
Exemple :
afficherRadio($nomsRadio);</p>
<h2>Résultat</h2>

<!-- 
 <?php

$nomsRadio = array("Monsieur" => "Masculin", "Madame" => "Féminin", "Animal" => "Autre");

            echo "Affichage :<br>";
// function afficherRadio($nomsRadio){
    foreach($nomsRadio as $genre){
        ?>
        <input type="radio" name="$nomsRadio" id="$nomsRadio">
        <?php echo $genre. "<br>";
    }
    // afficherRadio($genre);
// } FAUX = Le name des radio buttons doit être le même pour tous
?> --> 

<?php

$elements = array("Madame", "Monsieur", "Autre");

echo "Affichage :<br>";

echo genererRadio($elements);

function genererRadio(array $elements){
    $result = "<form action ='#' method='POST'>";
    foreach($elements as $radio){
        $result .="<input type='radio' value='$radio' id='$radio' name='sexe'>
        <label for='$radio'>$radio</label><br>";
    }
    $result .= "</form>";
    return $result;
}

?>