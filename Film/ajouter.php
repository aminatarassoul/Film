<?php
 
include_once('connexion.php');



if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['synopsis']) && isset($_POST['Annee']) && isset($_POST['Prix']) && isset($_POST['genre']))
{

	
	$req=$con->prepare("INSERT INTO detail (nom,Synopsis,Annee,Type,Prix,id) values (?,?,?,?,?,?)");
	$req->execute(array($_POST['nom'],$_POST['synopsis'],$_POST['Annee'],$_POST['genre'],$_POST['Prix'],$_POST['id']));


	echo "Success";
}


?>