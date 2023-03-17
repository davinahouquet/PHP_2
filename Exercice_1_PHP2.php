<h1>Exercice 1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.<br>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>
<h2>Résultat</h2>

<?php

    // $texte = "Mon texte en parametre";
    // echo "Affichage (si texte = « Mon texte en paramètre »)";
    // echo "<br>";
    // $texte1 = strtoupper($texte);
    // echo "<span style=\"color:red;\"> $texte1 </span>";
    echo "Affichage (si texte = « Mon texte en paramètre »)";
function convertirMajRouge($texte){
    $texte = mb_strtoupper($texte);
    echo "<p style ='color:red;'> $texte </p>";
}
convertirMajRouge("Mon texte en parametre");
?>