<?php 
include('./connexion/connect.inc.php');

// Methodes permettant de commniqué avec la bd

// SELECT
// selectionner tous les enregistrements

function SelectAll($table){
    global $connexion;
    $req = $connexion->prepare("SELECT * FROM $table");
    $req->execute();
    return $req -> fetchAll();
}

function SelectRecordPerPage($table,$limit,$page){
    global $connexion;
    $skip = ($page-1)*$limit;
    $req = $connexion->prepare("SELECT * FROM $table LIMIT $skip , $limit ");
    $req->execute();
    return $req -> fetchAll();
}



// selectionner les enregistrements avec une clause where personalisée

function SelectWhere($table,$champ,$value){
    global $connexion;
    $req = $connexion->prepare("SELECT * FROM $table WHERE $champ = :value");
    $req->execute(array(
        'value' => $value,
    ));
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

// function Update($table,$arr,$whereKey,$whereValue,$type){
//     global $connexion;
//     $data = "";
//     $champ = "";
    

//     foreach ($arr as $key => $value) {
//         $champ .= " $key = ? ,";
//         $data .= " $value ,";
//     }  
//     $champ = rtrim($champ,',');
//     $data = rtrim($data,',');

//     echo "UPDATE $table SET $data WHERE $whereKey = $whereValue";
    
//     $req = $connexion->prepare("UPDATE $table SET $champ WHERE $whereKey = $whereValue");
//     $req->bind_param($type,)
//     $req->execute($arr);
     
// }

// DELETE

function Delete($table,$whereKey,$whereValue){
    global $connexion;
    $req = $connexion->prepare("DELETE FROM $table WHERE $whereKey = $whereValue");
    $req->execute();
    
}

?>