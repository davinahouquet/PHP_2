<h1>Exerice 11</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.</p>
<h2>Résultat</h2>

<?php

$date = new DateTime('23-02-2018');
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
echo $formatter->format($date);

?>