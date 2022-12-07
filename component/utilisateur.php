

<?php 



function utilisateur($image,$nom,$tel,$mail){
?>

<style>
     .green{
          color: #03C100;
     }
     .red{
          color : red;
     }
</style>

<div class="accueil_sidebar_item accueil_border_bottom">
     <div class="flexSpaceAround">
          <div class="utilisateur_photo">
               <img class="rounded-img" src=<?php echo $image ?>  alt="">
          </div>
          <div>
               <div class="utilisateur_nom">
                    <?php echo $nom ?>
               </div>
               <div class="utilisateur_action flexSpaceAround">
                    <a href="tel:<?php echo $tel ?>">
                         <i class="fa-brands fa-whatsapp green"></i>
                    </a>
                    <a href="mailto:<?php echo $mail ?>">
                    <i class="fa-regular fa-envelope red"></i>
                    </a>
               </div>
          </div>
     </div>
     
    
</div>

<?php } ?>