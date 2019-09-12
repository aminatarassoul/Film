<?php
error_reporting(0);
// fichier de config où se trouve le mot de passe et les paramètres de connexion à la bdd
include_once('config.php');



$Film = $_POST['Film']; // on stocke le type dan sune ariable


   $sql = 'delete from Film where nom="'.$Film.'"';
    $req = $conn->prepare($sql);
    $req->execute();  



$code=$req->errorInfo();



$result = $req->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($code);



?>