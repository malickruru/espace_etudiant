<?php 

function getUserById($id,$data ){
    foreach ( $data as $user ) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
}

function getCommentById($id,$data,$users ){
    $comment = [];
    foreach ( $data as $com ) {
        if ($com['id_article'] == $id) {
            array_push($comment,[$com,getUserById($com['id_user'],$users)['image']]);
        }
    }
    return json_encode($comment);
}


function textFormater($text){
    $tab = explode('.',$text);
    return join('</p><p>',$tab );
}


?>

<?php function publication($userData,$id_user,$id,$type,$src,$date,$titre,$description,$commentData,){
?>

<style>
    p{
        font-size: 0.75em;
    }
</style>

<div class="publication">
    <div class="publication_user flexLeft ">
        <img class="rounded-img my" src=<?php echo getUserById($id_user,$userData )['image']  ?> alt="">
        <?php echo getUserById($id_user,$userData )['nom']  ?>
    </div>
    <div class="publication_data">
        <div class="publication_photo">
                <?php  
                if ($type=='photo') {
                  echo "<img src= $src > ";
                 }else if($type=='video'){
                    echo "<video controls ><source src= $src type='video/mp4'></video>";
                 }
                ?>
        </div>
        <div class="publication_right">
                <div class="publication_action ">
                    <div class="my">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    
                    <div class="my click" onclick='Open_popup(<?php echo  getCommentById($id,$commentData,$userData) ?>)'  >
                        <i class="fa-regular fa-comment"></i>
                    </div>
                </div>
                <div class="publication_text">
                    <?php echo $date ?>
                    <h3> <?php echo $titre ?> </h3>
                    <p > <?php echo textFormater($description) ?> </p>
                </div>
        </div>
    </div>
    
</div>

<?php } ?>