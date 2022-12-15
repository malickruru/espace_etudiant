<?php 
include('./connexion/connect.inc.php');

// Methodes permettant de commniqué avec la bd

// SELECT
// selectionner tous les enregistrements

function SelectAll($table){
    global $connexion;
    $req = $connexion->prepare("SELECT * FROM $table ");
    $req->execute();
    return $req -> fetchAll();
}


// selectionner les enregistrements avec une clause where personalisée

function SelectWhere($table,$condition){
    global $connexion;
    $req = $connexion->prepare("SELECT * FROM $table WHERE $condition");
    $req->execute();
    return $req -> fetch();
}

// INSERT
function Insert($table,$arr){
    global $connexion;
    $champ = "";
    $param = "";

    foreach ($arr as $key => $value) {
        $champ .= " $key ,";
        $param .= " :$key ,";
    }  
    $champ = rtrim($champ,',');
    $param = rtrim($param,',');
   
    $req = $connexion->prepare("INSERT INTO $table ( $champ ) VALUES ( $param )");
    $req->execute($arr);
    
}
// UPDATE

function Update($table,$arr,$whereKey,$whereValue){
    global $connexion;
    $data = "";
    

    foreach ($arr as $key => $value) {
        $data .= " $key = $value,";
    }  
    $data = rtrim($data,',');
    
    $req = $connexion->prepare("UPDATE $table SET $data WHERE $whereKey = $whereValue");
    $req->execute($arr);
    
}

// DELETE

function Delete($table,$whereKey,$whereValue){
    global $connexion;
    
    
    $req = $connexion->prepare("DELETE FROM $table WHERE $whereKey = $whereValue");
    $req->execute();
    
}

?>