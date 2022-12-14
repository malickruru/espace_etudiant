<?php
    include("component/element-profil.php");
    $req_select_profil = $connexion->prepare("SELECT * FROM t_etudiants WHERE Id_Etudiant = :id_etd "); 
    $req_select_profil->execute(array(
        ':id_etd' => $_SESSION['id_etd']
        ));
    $profil = $req_select_profil->fetch();
    if (!$profil){
        header('Location:index.php');
    }else{

        
    
?>

<!--Corps de la page-->
<div class="container container-sm" style="background-color:white; padding:15px;border-radius:10px">
    <div class="row">
        <!--lien pour revenir à la page de profil-->
        <div class="col-lg-5 col-md-12 col-sm-12">
        <a href="index.php?action=profil" class="retour FlexStart">
        <i class="fa-solid fa-chevron-left"></i>
        <h3>Revenir à mon profil</h3>
        </a>
        <!--Titre et instructions-->
        <div class="title-profil">
            <h2>Mon profil</h2>
            <h4>Gérez les paramètres de votre profil</h4>
        </div>
        <!--Formulaire de modification de données-->
            <form class="formulaire" id="form" action="" method="POST" enctype="multipart/form-data">
                <!-- modification de la pdp-->
                <div class="picture">
                    <h3>Votre photo de profil</h3>
                        <div class="p-pic" style="position:unset;">
                            <img src="<?php echo $donnees["cle_photo"]?>" alt="#">
                        </div>  
                        <div class="btnUpload">
                            <input type="file" class="fileBtn" name="fichier" id="fichier">
                        </div>
                </div>
                <!-- modification de la couleur de la bannière-->
                <div class="cover my-3">
                    <h3>Bannière de profil</h3>
                    <div class="cover-wrapper">
                        <div class="apercu">
                            <h4>Aperçu</h4>
                            <div class="apercu-couleur" id="apercu"></div>
                        </div>  
                        <div class="color-div">
                            <h4>Cliquez pour choisir une couleur</h4>
                            <input type="color" class="color-picker">
                        </div>
                    </div>  
                </div>
                <!--Ajouter un CV pour qu'on puisse le télécharger-->
                <div class="cv">
                    <h3>Votre CV</h3>
                        <h4>Veuillez uploader votre cv</h4> 
                        <div class="cvupload">
                            <input type="file" name="mon_cv" id="mon_cv">
                        </div>
                </div>
                <!-- Renseigner les informations (Noms utilisateur, Numéro tel, etc..-->
                <div class="user-info">
                    <h3>Informations du profil</h3> 
                    <div class="input-wrapper">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" placeholder="Entrez votre Nom" value="">
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Prénom</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre Prénom" value="">
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Email</label>
                        <input type="text" name="email" id="email" placeholder="Entrez votre Email..." value="<?php echo $donnees["cle_email"]?>">
                    </div>
                    <div class="input-wrapper">
                        <label for="matricule">Matricule</label>
                        <input type="text" name="matricule" id="matricule" placeholder="Entrez votre Matricule..." value="<?php echo $donnees["cle_matricule"]?>">
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Numéro de téléphone</label>
                        <input type="tel" name="tel" id="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" maxlength="10" placeholder="ex: 0102061311" value="<?php echo $donnees["cle_tel"]?>" >
                    </div>
                    <div class="input-wrapper">
                        <label for="classe" class="custom-select">
                            Classe
                            <select name="classe" id="classe">
                            <option value="">Sélectionnez</option>
                                <?php
                                    //Je fais un tableau qui va contenir toutes les classes (filières)
                                    $classe = ["Prepa 1", "Prepa 2", "Prepa 3", "B2 Dev", "B3 Dev", "B2 Crea", "B3 Crea", "B2 Com", "B3 com"];
                                    for($i = 0; $i < count($classe); $i++){
                                        echo "<option value=".$classe[$i].">$classe[$i]</option>"; //Il va montrer chaque élément du tableau.
                                    }
                                ?>
                            </select>
                        </label>
                        
                    </div>
                    
                    <div class="input-wrapper">
                        <label for="name">Biographie</label>
                        <textarea id="bio" placeholder="Ecrivez votre bio..." name="bio" rows="4" cols="40" maxlength="300"><?php echo $donnees["cle_bio"]?></textarea>
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Centres d'intérêts</label>
                        <textarea id="interet" placeholder="Ecrivez vos centres d'intérêts..." name="interet" rows="4" cols="40" maxlength="1900"><?php echo $donnees["cle_hobbies"]?></textarea>
                    </div>      
                </div>
                <button type="submit" class="btnSubmit" name="submit" id="submit">Enregistrer les modifications</button>
            </form>
        </div>
       

    </div>
</div>

<?php } ?>

