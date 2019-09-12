<?php

//Connexion a la BD

try {
	$con = new PDO("mysql:host=localhost;dbname=film","root","root");
} catch (Exception $e) {
	die("Erreur:".$e->getMessage());
}




?>