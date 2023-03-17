<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».</p>
<h2>Résultat</h2>

<?php 

//Tous les arrays au début

$nomsInput = array("Nom", "Prénom", "E-mail", "Ville");
$sexe = array("Masculin", "Féminin", "Autre");
$formation = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");

//Puis une fonction après l'autre 

//fonction noms, prénoms
echo afficherInput($nomsInput);

function afficherInput(array $nomsInput){
    $resultInput = "<form action='#' method='POST'>";
    foreach($nomsInput as $input){
        $resultInput .= "<label for='$input'>$input</label>
        <br><input type='text' id='$input'><br>";
    }
    $resultInput .="</form>";
    return $resultInput;
}


//fonction choix du sexe

echo "Sexe :<br>";
echo genererRadio($sexe);

function genererRadio(array $sexe){
    $resultSexe = "<form action ='#' method='POST'>";
    foreach($sexe as $radio){
        $resultSexe .="<input type='radio' value='$radio' id='$radio' name='sexe'>
        <label for='$radio'>$radio</label><br>";
    }
    $resultSexe .= "</form>";
    return $resultSexe;
}

?>
<!-- //fonction de la liste déroulante formation

            // echo alimenterListeDeroulante($formation);

            // function alimenterListeDeroulante(array $formation){
            //     $resultFormation = "<form action='#' method='POST'>
            //     <select><option selected='selected'>Formation</option>";
            // }
            //     foreach($formation as $option){
            //         $resultFormation .="<option value='$option'></option>";
            //         echo $option;
            //     }
            //     $resultFormation .="</select>";
            //     return $resultFormation; -->

<label for=" ">Choisissez votre formation</label>
    <select name="formation"  id="formation">
	<?php          
         foreach ($formation as $option){
            $resultFormation = $option;
            ?>
<option value="<?php echo $option; ?>"> 
	<?php echo $resultFormation ?>
	</option>
<?php 
} 
    $resultFormation .= "</select>";
    return $resultFormation;

//Pas vraiment de fonction.

//submit button

$button = " ";

echo envoyerFormulaire($button);

function envoyerFormulaire($button){
    $submit .= "<form action='#' method='POST'><input type='submit' value='Envoyer le formulaire'>Envoyer le formulaire'>";
}
$submit .= "</form>";
return $submit;

?>



</body>
</html>