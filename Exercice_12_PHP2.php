<<<<<<< HEAD
<h1>Exercice 12</h1>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant : <br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau</p>
<h2>Résultat</h2>

<?php

$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1","valeur2"]];

foreach ($tableauValeurs as $valeur) {
echo var_dump($valeur);
echo "<br>";
}
?>
=======
<h1>Exercice 12</h1>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant : <br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau</p>
<h2>Résultat</h2>

<?php

$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1","valeur2"]];

foreach ($tableauValeurs as $valeur) {
echo var_dump($valeur);
echo "<br>";
}
?>
>>>>>>> a183db05412c48435bae3f472ea77c67c9184f9c
