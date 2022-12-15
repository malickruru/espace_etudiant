<?php 
function uploadFile($file){
    $img_ext = explode('.',$file['name'])[1];
    $alea = rand(1, 100000);
    $nom_file = 1000*$_SESSION['id_etd'].$alea;
    return $nom_file.".".$img_ext;
    
}


function uploadImg($file){
    $tmp_nom = $file['tmp_name'];
    $url = 'images/profils/'.uploadFile($file);
    //move_uploaded_file($tmp_nom,'images/profils/'.uploadFile($file));
    move_uploaded_file($tmp_nom,$url);
    return $url; 
}

function uploadCv($file){
    $tmp_nom = $file['tmp_name'];
    $url = 'files/cv/'.uploadFile($file);
    move_uploaded_file($tmp_nom,'files/cv/'.uploadFile($file));
    return $url; 
}




?>