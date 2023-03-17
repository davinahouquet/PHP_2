<h1>Exerice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.</p>
<h2>Résultat</h2>

<!DOCTYPE html>                                         
<html>

<?php

$elements = array("Choix 1", "Choix 2", "Choix 3" );

foreach($elements as $choice){
    ?>
<input type='checkbox' name='$choice' id='$choice'> 
<?php echo $choice. "<br>";?>
<?php
}
?>

</html>