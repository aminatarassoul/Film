<?php

include_once('connexion.php');


//Lister l'ensemble des films

$res=$con->query("SELECT * FROM film");

while($data=$res->fetch())
{
    echo "Nom Film :".$data['nom'];
    echo '<br>';
    echo "Synopsis :".$data['Synopsis'];
    echo '<br>';
    echo "Annee :".$data['Annee'];
    echo '<br>';
    echo "Type :".$data['Type'];    
    echo '<br>';
    echo "Prix :".$data['Prix'];

}


?>