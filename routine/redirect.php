<?php 

    function redirect($action){
    global $connexion;
    require_once("$action.php");
    }

?>