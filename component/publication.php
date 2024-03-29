<?php 

function getUserName($id){
    $user = SelectWhere('t_etudiants','Id_Etudiant',$id);
    return $user['Nom_Etd'].' '.$user['Prenoms_Etd'];
    }

function getProfilePic($id){
    if ( !SelectWhere('t_profils','Id_Etd_Profil',$id) ) {
        return 'https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-unknown-social-media-user-photo-default-avatar-profile-icon-vector-unknown-social-media-user-184816085.jpg';
    }
    return SelectWhere('t_profils','Id_Etd_Profil',$id)['Photo_Profil'];
    }

function url_format($url){
    return explode('?',$url);
    }

        
// function getCommentById($id,$data,$users ){
//     $comment = [];
//     foreach ( $data as $com ) {
//         if ($com['id_article'] == $id) {
//             array_push($comment,[$com,getUserById($com['id_user'],$users)['image']]);
//         }
//     }
//     return json_encode($comment);
// }


function textFormater($text){
    $tab = explode('.',$text);
    return join('</p><p>',$tab );
}


?>

<?php function publication($id_pulication,$id_user,$src,$date,$titre,$description,$type='photo'){
?>

<style>
p {
    font-size: 0.75em;
}
</style>

<div class="publication">
    <div class="publication_user flexLeft ">
        <img class="rounded-img my" src=<?php echo getProfilePic($id_user) ?> alt="">
        <?php echo getUserName($id_user )  ?>
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
                    <a href="whatsapp://send?text=<?php echo urlencode('http://' . $_SERVER["SERVER_NAME"] . url_format($_SERVER["REQUEST_URI"])[0] . '?publication='.$id_pulication); ?>"
                        data-action="share/whatsapp/share" title="partager sur whatsapp"><i
                            class="bi bi-whatsapp"></i></a>
                    <a href="mailto:?body=<?php echo urlencode('http://' . $_SERVER["SERVER_NAME"] . url_format($_SERVER["REQUEST_URI"])[0] . '?publication='.$id_pulication); ?>"
                        data-action="share/mail/share" title="partager par mail"><i class="bi bi-envelope"></i></a>

                </div>



                <div class="my click">
                    <a href=<?php echo "index.php?publication=".$id_pulication  ?>>
                        <i class=" fa-regular fa-comment"></i>
                    </a>

                </div>
            </div>
            <div class="publication_text">
                <?php echo $date ?>
                <h3> <?php echo $titre ?> </h3>
                <p> <?php echo textFormater($description) ?> </p>
            </div>
        </div>
    </div>

</div>




<?php } ?>