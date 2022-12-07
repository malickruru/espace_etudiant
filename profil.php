<?php

include('component/element-profil.php');

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/flexbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <title>Espace IFRAN - Mon profil</title>
</head> 
<body>

    <!--Navbar de la page start-->
    
    <?php require_once('component/header.php')?>
    

    <!--La page sera structurée en plusieurs blocs (comme sur Linkedin)-->

    <!--Bloc de présentation start-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8">
                <div class="head-profile">
                    <!--Bannière du profil (contiendra la photo de profil et le statut)-->
                    <div class="banner">
                        <div class="p-pic">
                        <img src="assets/test.jpg" alt="#">
                        </div>
                        <div class="p-status p-status-online"></div>
                    </div>
                    <!--Contenu du profil (contiendra le nom, la filière ou le poste de l'utilisateur, ses réseaux, sa biographie)-->
                    <div class="p-username" id="p-name">
                        <h3 class="p-prenom" id="p-prenom">Emma</h3>
                        <h3 class="p-name" id="p-name">Dubois</h3>
                    </div>
                    <div class="p-bio" id="p-bio">
                      <p>Développeuse Fullstack et Web designer. Etudiante en 3eme année de Développement Web à IFRAN. Je conçois des applications pour le Web &#128187;.</p>
                    </div>
                    <!--Infos supplémenntaires (parcours spécialité, mail, tel, année de sortie et d'entrée)-->
                    <div class="supp-info-wrapper">
                        <div class="year" id="year">
                            <div class="year-start-wrapper">
                                    <h4>Année d'Entrée :</h4>
                                    <p class="year-start mx-2" id="year-start">2020</p>
                            </div>  
                            <div class="year-end-wrapper">
                                <h4>Année de sortie :</h4>
                                <p class="year-end mx-2" id="year-end">2023</p>
                            </div>     
                        </div>
                        <div class="academic-year" id="academic-year">
                            <div class="parcours-wrapper" id="parcours-wrapper">
                                <h4>Parcours :</h4>
                                <p class="parcours mx-2" id="parcours">B2</p>
                            </div>
                            <div class="specialite-wrapper" id="specialite-wrapper">
                                <h4>Spécialité :</h4>
                                <p class="specialite mx-2" id="specialite">Développement Web</p>
                            </div>
                        </div>
                        <div class="matricule-wrapper">
                            <div class="p-matricule">
                                <h4>Matricule :</h4>
                                <p class="matricule mx-2" id="matricule">ETd21IF-0052</p>
                            </div>
                        </div>
                        <div class="informations-wrapper">
                            <div class="p-tel" id="p-tel">
                                <p><i class="fa-solid fa-phone"></i></i>0708091010</p>
                            </div>
                            <div class="p-mail" id="p-mail">
                                <i class="fa-sharp fa-solid fa-envelope"></i>
                                <a href="mailto:emmaDuBois121212@gmail.com">emmaDuBois121212@gmail.com</a>
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
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. &#128512; Vero, nisi ratione expedita sunt eos enim sed, aliquam quasi magni rem nulla omnis iure! Possimus enim earum vel veniam, quas corporis!
                        Nostrum, et distinctio aut at quia dolores modi molestiae tenetur nihil sit eos quaerat quisquam repellendus omnis vel impedit sequi quis voluptatem necessitatibus doloremque maiores optio &#128523;.
                        </p>
                    </div>
                    <!--Cette div va afficher l'historique des posts et commentaires de l'utilisateur-->
                  <div class="activity">
                        <h2>Activité</h2>
                        <div class="wrapper-activity">
                             <!--Pour les commentaires que l'utilisateur a envoyé-->
                        <div class="activity-comment">
                            <div class="infos">
                               <div class="img-user">
                               <img src="assets/test.jpg" alt="#">
                               </div>
                               <p class="username mx-2">Emily Dubois</p>
                               <p class="indicator">a commenté un post</p>
                               <div class="time-indicator flexSpaceAround"><i class="fa-solid fa-circle mx-2"></i><p>2h</p></div>
                            </div>
                            <div class="comment">
                              <p>J'ai apprécié la sortie au domaine Bini ! Je me souviens que Monsieur Hogui n'était pas serein sur la pirogue &#128514;</p>
                            </div>                            
                        </div>
                        <div class="activity-comment">
                            <div class="infos">
                               <div class="img-user">
                               <img src="assets/test.jpg" alt="#">
                               </div>
                               <p class="username mx-2">Emily Dubois</p>
                               <p class="indicator" id="comment-post">a commenté un post</p>
                               <div class="time-indicator flexSpaceAround"><i class="fa-solid fa-circle mx-2"></i><p>4j</p></div>
                            </div>
                            <div class="comment">
                              <p>Félicitations ! vu tout ton travail abattu, tu mérites ce prix &#128513;</p>
                            </div>                            
                        </div>
                         <!--Pour les posts que l'utilisateur a envoyé-->
                        <div class="activity-post">
                            <div class="infos">
                               <div class="img-user">
                               <img src="assets/test.jpg" alt="#">
                               </div>
                               <p class="username mx-2">Emily Dubois</p>
                               <p class="indicator" id="post">a publié un post</p>
                               <div class="time-indicator flexSpaceAround"><i class="fa-solid fa-circle mx-2"></i><p>12j</p></div>
                            </div>
                            <div class="description">
                              <p>Voici une image que j'ai prise moi-même ! je suis assez fière du résultat &#128512;</p>
                            </div>  
                            <div class="media my-3">
                                <!--Peut être une image ou une vidéo-->
                                <a href="assets/photo.jpg"><img src="assets/photo.jpg" alt="photographie"></a>
                            </div>                         
                        </div>
                        </div>
                        <div class="see-more">
                            <a href="#">Afficher toute l'activité</a><i class="fa-solid fa-arrow-right mx-2"></i>
                        </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="options">
                      <!--Cette div contiendra deux élement, une div-bouton pour modifier le profil, et une autre pour pouvoir se déconnecter directement depuis la page-->
                        <div class="modify-profile" id="modify-profile">
                            <i class="fa-solid fa-gear mx-3"></i>  
                            <a href="modification.php" class="">Modifier le profil</a>
                        </div>
                            <hr class="hr-option">
                        <div class="log-out" id="log-out">
                            <i class="fa-solid fa-right-from-bracket mx-3"></i>
                            <a href="#" class="fs-5">Déconnexion</a>
                        </div>  
                  </div>
                  <!--Cette div permettra de télécharger un CV (que l'utilisateur aura uploadé-->
                  <div class="download-cv">
                        <h3>Télécharger le CV<i class="fa-solid fa-download mx-2"></i></h3>
                        <div class=" download-link flexSpaceAround">
                          <a href="#">--> Cliquez Ici pour télécharger <--</a>
                        </div>
                  </div>
                  
                </div>
        </div>
        </div>

        <!--Footer start-->


        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 nous-contacter">
                        <h5 class="footer-col-title">Nous contacter</h5>
                        <div class="infos-contact">
                            <div class="infos-mail">
                                <i class="icon fa-solid fa-envelope"></i>
                                <p>infos@ifran.ci</p>
                            </div>
                            <div class="infos-tel">
                                <i class="icon fa-solid fa-phone"></i>
                                <p>+225 07 88 35 67 54</p>
                            </div>
                            <div class="infos-localisation">
                                <i class="icon fa-solid fa-location-dot"></i> 
                                <p>Cocody, Riviera Bonoumin à 500m d'Abidjan Mall</p>
                            </div>
                        </div>
                        <div class="maps-button py-3">
                            <a href="https://goo.gl/maps/uwH8Mb4vmN6GaRNd9" class="btn-maps" target="_blank">Google maps</a>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 acces-rapide">
                        <h5 class=" footer-col-title">Accès Rapide</h5>
                        <div class="links">
                            <p><a href="#">Accueil</a></p>
                            <p><a href="#">Offres d'emploi</a></p>
                            <p><a href="#">Faire un post</a></p>
                            <p><a href="#">Alumni</a></p>
                        </div>
                    </div>

                    <div class="col-sm-4 follow-us">
                        <h5 class="footer-col-title">Suivez-Nous</h5>
                        <div class="social-media">
                            <ul>
                                <li class="first"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col">
                        <p class="copyright pt-4">Copyright &copy; 2022.</p>
                    </div>
                </div>
            </div>       
        </footer>

        <!--Footer End-->

</body>
</html>