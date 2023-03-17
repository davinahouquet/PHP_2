<h1>Exerice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra <br>
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un <br>
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/ <br> Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>
<h2>Résultat</h2>

<?php

$capitales1 = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
];

echo afficherTableHTML1($capitales1);

function afficherTableHTML1(array $capitales1){
    ksort($capitales1);                 //ordre alphabétique
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien Wiki</th>
                    </tr>
                </thead>
                <tbody>";
                foreach($capitales1 as $pays1 => $capitale1){
                    $result .=
                        "<tr>
                            <td>".mb_strtoupper($pays1)."</td>
                            <td>".ucfirst($capitale1)."</td>            
                            <td><a href='https://fr.wikipedia.org/wiki/$capitale1' target='_blank'>Lien Wiki</a></td>
                        </tr>";                                                     //blank pour que ça s'ouvre dans un nouvel onglet
                }
    $result = $result ."</tbody></table>";
    return $result;
};
?>