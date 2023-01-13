<?php 



$commentaires = SelectAllWhere('t_comment','Id_Post',$_GET['publication']);
$item = SelectWhere('t_posts_etd','Id_Post',$_GET['publication']);


if (isset($_POST['submit-commit']) ) {
    if (isset($_SESSION['id_etd'])) {
        $comment = [
            'id_Post' => $_GET['publication'],
            'id_etudiant' => $_SESSION['id_etd'],
            'text' => $_POST['comment'],
        ];
        Insert('t_comment',$comment);
        header('Location:index.php?publication='.$_GET['publication']);
    }else{
        header('Location:index.php?action=connexion');
    }
    
}

publication($item['Id_Post'],$item['Id_Etd_Post'],$item['Image_Post'],$item['Date_Post'],$item['Titre_Post'],$item['Message_Post']);
?>

<div class="publication">
    <div class="popup_header flexCenter">
        <h3>Commentaire</h3>
    </div>
    <div class="popup_body">
        <?php 
        if ($commentaires) {
        foreach ($commentaires as $com ) {
           
            ?>

        <div class="comment_row">
            <div class="comment_pic">
                <img src=<?php  echo getProfilePic($com['id_etudiant'])?> alt="" class="rounded-img-1"
                    title=<?php echo getUserName($com['id_etudiant'])?>>
            </div>
            <div class="comment_text ">
                <p><?php echo $com['text']?></p>
                <span><?php echo $com['date']?></span>
            </div>
        </div>

        <?php  }
        }
            ?>
    </div>
    <div class="popup_footer">
        <form action="" method="POST">
            <input type="text" name="comment" id="comment" placeholder="écrivez votre commentaire">
            <input type="submit" value="Envoyer" name="submit-commit">
        </form>

    </div>
</div>