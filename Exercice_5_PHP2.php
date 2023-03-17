<h1>Exercice 5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.</p>
<h2>Résultat</h2>

<?php 

$nomsInput = array("Nom", "Prénom", "Ville");

echo afficherInput($nomsInput);

function afficherInput(array $nomsInput){
    $result = "<form action='#' method='POST'>";
    foreach($nomsInput as $input){
        $result .= "<label for='$input'>$input</label>
        <br><input type='text' id='$input'><br>";
    }
    $result .="</form>";
    return $result;
}

?>