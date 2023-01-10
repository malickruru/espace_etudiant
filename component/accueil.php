<?php 

if ($content == 'publication') {

 $article = SelectRecordPerPage('t_posts_etd',3,1);

            foreach ($article as $item ) {
                publication($item['Id_Etd_Post'],$item['Image_Post'],$item['Date_Post'],$item['Titre_Post'],$item['Message_Post']);
            }
        }else{
            // foreach ($emploi as $item) {
            //    emploi($item['titre'],$item['text']);
            // }
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
</div>