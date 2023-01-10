<?php 

function previousPage($page){
    if($page == 1){
        return 1;
    } 
    return $page - 1;
}

function nextPage($page){
    return $page + 1;
}

?>