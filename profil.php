<?php

$mon_profil = SelectWhere("t_profils", "Id_Etd_Profil", $_GET["profil"]);

?>



 

    <!--La page sera structurée en plusieurs blocs (comme sur Linkedin)-->

    <!--Bloc de présentation start-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8">
                <div class="head-profile">
                
                    <!--Bannière du profil (contiendra la photo de profil et le statut)-->
                    <div class="banner" id="banner">
                        <div class="p-pic">
                        <img src="<?php echo $mon_profil["Photo_Profil"];?>" alt="#">
                        </div>
                        <div class="p-status p-status-online"></div>
                    </div>
                    <!--Contenu du profil (contiendra le nom, la filière ou le poste de l'utilisateur, ses réseaux, sa biographie)-->
                    <div class="p-username" id="p-name">
                        <h3 class="p-prenom" id="p-prenom"><?php echo $_SESSION['nom']; ?></h3>
                    </div>
                    <div class="p-bio" id="p-bio">
                      <p><?php echo $mon_profil["Bio_Profil"]; ?></p>
                    </div>
                    <!--Infos supplémenntaires (parcours spécialité, mail, tel, année de sortie et d'entrée)-->
                    <div class="supp-info-wrapper">
                        <div class="year" id="year">
                            <div class="year-start-wrapper my-2">
                                    <h4>Année d'Entrée :</h4>
                                    <p class="year-start mx-2" id="year-start"><?php echo $mon_profil["Annee_Entree"]; ?></p>
                            </div>  
                            <div class="year-end-wrapper my-2">
                                <h4>Année de sortie :</h4>
                                <p class="year-end mx-2" id="year-end">2023</p>
                            </div>     
                        </div>
                        <div class="academic-year" id="academic-year">
                            <div class="parcours-wrapper my-2" id="parcours-wrapper" >
                                <h4>Parcours :</h4>
                                <p class="parcours mx-2" id="parcours"><?php echo $mon_profil["Code_Classe_Profil"]; ?></p>
                            </div>
                            <div class="specialite-wrapper my-2" id="specialite-wrapper">
                                <h4>Spécialité :</h4>
                                <p class="specialite mx-2" id="specialite"><?php echo $mon_profil["Code_Spe_Profil"]; ?></p>
                            </div>
                        </div>
                        <div class="matricule-wrapper">
                            <div class="p-matricule my-2">
                                <h4>Matricule :</h4>
                                <p class="matricule mx-2" id="matricule"><?php echo $_SESSION['matricule']; ?></p>
                            </div>
                        </div>
                        <div class="informations-wrapper">
                            <div class="p-tel my-2" id="p-tel">
                                <p><i class="fa-solid fa-phone"></i></i><?php echo $mon_profil["Numero_Tel"]; ?></p>
                            </div>
                            <div class="p-mail my-2" id="p-mail">
                                <i class="fa-sharp fa-solid fa-envelope"></i>
                                <a href="mailto:<?php echo $_SESSION['email'] ;?>"><?php echo $_SESSION['email']; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="social-media-profile">
                        <h4>Réseaux Sociaux :</h4>
                        <ul>
                            <li class="first"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></i></a></li>
                        </ul>
                    </div>
                </div>
                    <!--Cette partie comportera les centres d'intérêts (hobbies) de l'utilisateur-->
                    <div class="hobbies">
                        <h2>Centres d'intérêt</h2>
                        <p><?php echo $mon_profil["Interets_Profil"];?></p>
                    </div>
                   
                </div>
                <div class="col-sm-4">
                <?php
                    if($_SESSION["id_etd"] == $_GET["profil"]){ ?>
                  <div class="options">
                      <!--Cette div contiendra deux élement, une div-bouton pour modifier le profil, et une autre pour pouvoir se déconnecter directement depuis la page-->
                      

                        <div class="modify-profile" id="modify-profile">
                            <i class="fa-solid fa-gear mx-3"></i>  
                            <a href="index.php?action=modifier_profil&modif_profil=<?php echo $_SESSION['id_etd']?>">Modifier Profil</a>
                        </div>
                            <hr class="hr-option">
                        <div class="log-out" id="log-out">
                            <i class="fa-solid fa-right-from-bracket mx-3"></i>
                            <a href="index.php?action=logout" class="fs-5">Déconnexion</a>
                        </div>

                      
        
                  </div>
                  <?php } ?>
                  <!--Cette div permettra de télécharger un CV (que l'utilisateur aura uploadé-->
                  <div class="download-cv">
                        <h3 class="mt-2">Télécharger le CV<i class="fa-solid fa-download mx-2"></i></h3>
                        <div class=" download-link flexSpaceAround">
                          <a href="<?php echo $mon_profil["Cv_Profil"]?>" download>--> Cliquez Ici pour télécharger <--</a>
                        </div>
                  </div>
            
                </div>
        </div>
        </div>

    <script>
        document.getElementById('banner').style.backgroundColor =" <?php echo $mon_profil['Couleur_Profil'] ?> "
    </script>