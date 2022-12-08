<?php 
$db_serveur = "localhost";
$db_user = "root";
$db_password = "";
$db_data = "espace_etudiant";

//Connexion à la base de donnée
try {
    $connexion = new PDO("mysql:host=$db_serveur;dbname=$db_data",$db_user,$db_password);
    //$connexion->exec();
} catch (Exception $e) {
    //Affichage du message d'erreur 
    echo "Impossible de se connecter à la base de donnée <br>";
    echo "Erreur: ".$e->getMessage()."<br>";
    echo "Code: ".$e->getCode()."<br>";
}

?>