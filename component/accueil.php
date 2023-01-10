<?php 
$page=1;
    
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if ($content == 'publication') {

 $article = SelectRecordPerPage('t_posts_etd',3,$page);

            foreach ($article as $item ) {
                publication($item['Id_Etd_Post'],$item['Image_Post'],$item['Date_Post'],$item['Titre_Post'],$item['Message_Post']);
            }
            
        }else{
            
            echo 'code en maintenance';
        }
        ?>
<!-- sidebar -->
<div class="accueil_sidebar" id="accueil_sidebar">
    <div class="accueil_sidebar_link">
        <div class="accueil_sidebar_item accueil_border_bottom">
            <a href="?content=publication">Voir les publications</a>
        </div>
        <div class="accueil_sidebar_item">

            <a href="?content=offres">Voir les offres d'emplois</a>
        </div>
    </div>
    <!-- <div class="accueil_sidebar_user">
        <h4>Etudiants Connectés</h4>
        <div class="overflow_y_scroll">
            <?php 
                    // foreach ($utilisateur as $user ) {
                    //     utilisateur($user['image'],$user["nom"],$user["tel"],$user["mail"] );
                    // }
                ?>
        </div> -->

</div>
<div class='page'>
    <a href="?page=<?php echo previousPage($page) ?>">&laquo;</a>
    <p><?php echo  $page ?></p>
    <a href="?page=<?php echo nextPage($page) ?>">&raquo;</a>
</div>
</div>