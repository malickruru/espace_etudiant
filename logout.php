<?php
// enregistrer la fin de la connexion
$req_logout_etd = $connexion->prepare("UPDATE t_sessions SET Session_End= NOW() WHERE Session_Sys_Id = :session_id");
        	$req_logout_etd->execute(array(
				'session_id'  =>session_id()
			));

session_destroy();
header('Location:index.php');
?>