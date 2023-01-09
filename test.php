<?php 
include('routine/database.php');

// var_dump(SelectAll('t_etudiants'))
// var_dump(SelectWhere('t_etudiants',"Login_Etd","rubens"))
// Insert('t_posts_etd',['Titre_Post' => 'toto','Id_Etd_Post' => 2])
var_dump(SelectWhere('t_profils','Id_Etd_Profil',2))
?>