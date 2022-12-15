<?php
    include("component/element-profil.php");

    if (isset($_POST['submit_profil'])) {
       $url_img = uploadImg($_FILES['img_profil']);
       $url_cv = uploadCv($_FILES['mon_cv']);
    //---Envoi de Requête pour insérer des éléménts dans la table profils---
    $tab_profils = [
        'Id_Etd_Profil' => $_SESSION['id_etd'],
        'Numero_Tel' => $_POST['tel'],
        'Photo_Profil'  => $url_img,
        'Numero_Whatsapp' => $_POST['WhatsApp'],
        'Code_Classe_Profil'  =>$_POST['classe'],
        'Code_Spe_Profil' => $_POST['specialite'],
        'Bio_Profil' => $_POST['bio'],
        'Interets_Profil'  =>$_POST['interet'],
        'Annee_Entree' => $_POST['annee'],
        'Couleur_Profil' => $_POST['couleur'],
        'Cv_Profil'  => $url_cv
    ];
    //Insert("t_profils", $tab_profils);
    if(Insert("t_profils", $tab_profils)){
        echo "<script>alert('Envoi réussi')</script>";
    }
    // var_dump(SelectAll("t_profils")); 
}
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
                            <img src="<?php //echo $donnees["cle_photo"]?>" alt="#">
                        </div>  
                        <div class="btnUpload">
                            <input type="file" class="fileBtn" name="img_profil" id="img_profil">
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
                            <input type="color" name="couleur" class="color-picker">
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
                        <label for="name">Numéro de téléphone</label>
                        <input type="tel" name="tel" id="tel"placeholder="ex: 0102061311" value="<?php echo $donnees["cle_tel"]?>" >
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Numéro WhatsApp</label>
                        <input type="tel" name="WhatsApp" id="WhatsApp" placeholder="ex: 0102061311" value="<?php echo $donnees["cle_tel"]?>" >
                    </div>
                    <div class="input-wrapper">
                        <label for="classe" class="custom-select">
                            Classe
                            <select name="classe" id="classe">
                            <option value="">Sélectionnez</option>
                            <?php 
                                $classe = SelectAll("t_classes");
                                foreach($classe as $c){ ?>  
                                    <option value="<?php echo $c["Code_Classe"];?>"><?php echo $c["Libelle_Classe"];?></option> 
                                 <?php } ?> 
                            </select>
                        </label>
                    </div>
                    <div class="input-wrapper">
                        <label for="specialite" class="custom-select">
                            Spécialité
                            <select name="specialite" id="specialite">
                            <option value="">Sélectionnez</option>
                            <?php 
                                $spec = SelectAll("t_specialites");
                                foreach($spec as $sp){ ?>  
                                    <option value="<?php echo $sp["Code_Specialite"];?>"><?php echo $sp["Libelle_Specialite"];?></option> 
                                 <?php } ?> 
                            </select>
                        </label>
                    </div>
                    <div class="input-wrapper">
                        <label for="annee" class="custom-select">
                            Année d'entrée à l'IFRAN
                            <select name="annee" id="annee">
                            <option value="">Sélectionnez</option>
                                
                                <?php 
                                $annee = SelectAll("t_annees");
                                foreach($annee as $a){ ?>  
                                    <option value="<?php echo $a["Annee"];?>"><?php echo $a["Annee"];?></option> 
                                 <?php } ?> 
                                
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
                <button type="submit" class="btnSubmit" name="submit_profil" id="submit_profil">Enregistrer les modifications</button>
            </form>
        </div>
       

    </div>
</div>

<?php var_dump($annee); ?>
