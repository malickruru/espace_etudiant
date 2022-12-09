<?php 

if ($content == 'publication') {
            foreach ($article as $item ) {
                publication($utilisateur,$item['id_user'],$item['id'],$item['type'],$item['src'],$item['date'],$item['titre'],$item['description'],$comment);
            }
        }else{
            foreach ($emploi as $item) {
               emploi($item['titre'],$item['text']);
            }
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
                <div class="accueil_sidebar_user">
                    <h4>Etudiants Connectés</h4>
                    <div class="overflow_y_scroll">
                    <?php 
                    foreach ($utilisateur as $user ) {
                        utilisateur($user['image'],$user["nom"],$user["tel"],$user["mail"] );
                    }
                ?>
                    </div>
                
                </div>
            </div>
        