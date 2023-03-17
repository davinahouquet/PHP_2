<h1>Exercice 2</h1>
<p>Soit le tableau suivant :<br>
$capitales = array <br>
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome")Réaliser un algorithme<br> permettant d’afficher le tableau HTML suivant (notez que le nom du pays <br>
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.<br>Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>
<h2>Résultat</h2>


<?php

echo "Affichage :";

$capitales = array 
("France"=>"Paris",
"Allemagne"=>"Berlin",
"USA"=>"Washington",
"Italie"=>"Rome");

/*la balise style contient la partie css du tableau*/ 
/*tr = ligne de table. th = ligne d'en-tête (ici Pays et Capitales). td= cellule de tableau (ici tout le reste des keys et values) */ 
echo '<style>                       
table{
    border-collapse: collapse;
}
th{
    border: 1px solid black;
}
td{
    border: 1px solid black;
}
</style>';

function afficherTableHTML(array $capitales){
    ksort($capitales);
    echo '<table><tr><th>Pays</th><th>Capitales</th><tr>';
    foreach($capitales as $pays => $capitale){
        echo '<tr><td>' .strtoupper($pays) . '</td><td>' .$capitale .'</td></tr>';
    }
    echo "</table>";
}
afficherTableHTML($capitales);
?>

<h1>Exercice 3</h1>
<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir 
dans un nouvel onglet (_blank).</p>
<h2>Résultat</h2>

<?php

echo '<a href="https://elan-formation.eu/accueil">Elan Formation</a>';

?>