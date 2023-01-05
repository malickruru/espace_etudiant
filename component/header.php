
<header>
<a href="index.php">
<img src="assets/logo.png" alt="Ifran" > 
</a>

<input type="checkbox" id="menu-bar">
<label for="menu-bar"> <i class="bi bi-list"></i> Menu</label>

<!--NavBar-->

<nav class="navbar">
   <ul>
   <li> <a href="">Alumni</a> </li>
       <li> <a href="">Poster +</a>
           <ul>
               <li> <a href="#presentation">Publication</a>
                <li> <a href="index.php?action=ajouter_offre_emploi">Offre d'emplois</a>
           </ul>
        </li>
        <?php 
        if ((!isset($_SESSION['login'])) || ($_SESSION['login'] == "")) {?>
                <li> <a href="index.php?action=connexion">Se connecter</a> </li>
       <?php } ?>
       <?php 
        if ((isset($_SESSION['login'])) && ($_SESSION['login'] != "")) {?>
       <li> <a href=""><i class="fa-regular fa-user"></i></a> 
           <ul>
           
               <li> <a href="index.php?action=logout">Log Out</a>
                <?php if($profil_exist == 1) { ?>
               <li> <a href="index.php?action=profil&profil=<?php echo $_SESSION['id_etd'] ?>">Mon profil</a>
               <?php }else{  ?>
                <li> <a href="index.php?action=creation_profil">Ajouter un profil</a>
                <?php } ?>
           </ul>
       </li>
       <?php } ?>
   </ul>
</nav>
<!--Fin NavBar-->
</header>