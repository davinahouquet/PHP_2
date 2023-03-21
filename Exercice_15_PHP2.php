<h1>Exercice 15</h1>
    <p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format<br>
Affichage
L’adresse elan@elan-formation.fr est une adresse e-mail valide<br>
L’adresse contact@elan est une adresse e-mail invalide<br></p>
<h2>Résultat</h2>

<?php

$email = "elan@elan-formation.fr";
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email est une adresse mail valide<br>");
} else {
  echo("$email est une adresse mail invalide<br>");
}

$email = "contact@elan";
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email est une adresse mail valide<br>");
} else {
  echo("$email est une adresse mail invalide<br>");
}
?>