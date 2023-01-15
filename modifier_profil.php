<?php
    
    
    
    //Quand on clique sur Enregister les modifications, les informations entrées par l'utilisateur vont update la base de données

    if(isset($_POST['change_profil'])){
        $num = $_POST['tel'];
        $num_whatsapp = $_POST['WhatsApp'];
        $bio = $_POST['bio'];
        $interet = $_POST['interet'];
        $couleur = $_POST['couleur'];
        $facebook = $_POST['Facebook'];
        $instagram = $_POST['Instagram'];
        $linkedin = $_POST['Linkedin'];

        $url_img = uploadImg($_FILES['img_profil']);
        $url_cv = uploadCv($_FILES['mon_cv']);
     //---Création d'un tableau pour stocker tous les éléments du formulaire---
     $change_profils = [
         'Numero_Tel' => $_POST['tel'],
         'Photo_Profil'  => $url_img,
         'Numero_Whatsapp' => $_POST['WhatsApp'],
         'Bio_Profil' => $_POST['bio'],
         'Interets_Profil'  =>$_POST['interet'],
         'Couleur_Profil' => $_POST['couleur'],
         'Cv_Profil'  => $url_cv,
         'Link_facebook' => $_POST['Facebook'],
         'Link_instagram' => $_POST['Instagram'],
         'Link_linkedin' => $_POST['Linkedin'], 
     ];
     //---Envoi de Requête pour update des éléménts dans la table profils---
    $req_update_profil = $connexion->prepare("UPDATE t_profils SET Numero_Tel = '$num', Photo_Profil = '$url_img', Numero_Whatsapp = '$num_whatsapp', Bio_Profil = '$bio', Interets_Profil = '$interet', Couleur_Profil = '$couleur', Cv_Profil = '$url_cv', Link_facebook = '$facebook', Link_instagram = '$instagram', Link_linkedin = '$linkedin'");
    $req_update_profil->execute();

     if($req_update_profil){
        header('Location:index.php?action=profil&profil='.$_GET["modif_profil"]);
     }

    }else{
    //On va récupérer les élements du profil de l'étudiant dans la table t_profils

    $mon_profil = SelectWhere("t_profils", "Id_Etd_Profil", $_GET["modif_profil"]);
    }
    
?>

<!--Corps de la page-->
<div class="container container-sm" style="background-color:white; padding:15px;border-radius:10px">
    <div class="row">
        <!--lien pour revenir à la page de profil-->
        <div class="col-lg-5 col-md-12 col-sm-12">
            <!--Titre et instructions-->
            <div class="title-profil">
                <h2>Modification de votre profil</h2>
                <h4>Gérez les paramètres de votre profil</h4>
            </div>
            <!--Formulaire de c de données-->
            <form class="formulaire" id="form" action="" method="POST" enctype="multipart/form-data">
                <!-- la pdp-->
                <div class="picture">
                    <h3>Votre photo de profil</h3>
                    <div class="p-pic" style="position:unset;">
                        <img id="ShowImg" src="" alt="#">
                    </div>
                    <div class="btnUpload">
                        <input type="file" class="fileBtn" name="img_profil" id="img_profil"
                            value="<?php echo $mon_profil["Photo_Profil"]?>">
                    </div>
                </div>
                <!-- la couleur de la bannière-->
                <div class=" cover my-3">
                    <h3>Bannière de profil</h3>
                    <div class="cover-wrapper">
                        <div class="apercu">
                            <h4>Aperçu</h4>
                            <div class="apercu-couleur" id="apercu"></div>
                        </div>
                        <div class="color-div">
                            <h4>Cliquez pour choisir une couleur</h4>
                            <input type="color" name="couleur" id="couleur" class="color-picker"
                                value="<?php echo $mon_profil["Couleur_Profil"] ?>">
                        </div>
                    </div>
                </div>
                <!--Ajouter un CV pour qu'on puisse le télécharger-->
                <div class=" cv">
                    <h3>Votre CV</h3>
                    <h4>Veuillez uploader votre cv</h4>
                    <div class="cvupload">
                        <input type="file" name="mon_cv" id="mon_cv" value="<?php echo $mon_profil["Cv_Profil"] ?>">
                    </div>
                </div>


                <!-- Renseigner les informations (Noms utilisateur, Numéro tel, etc..-->


                <div class=" user-info">
                    <h3>Informations du profil</h3>
                    <div class="input-wrapper">
                        <label for="name">Numéro de téléphone</label>
                        <input type="tel" name="tel" id="tel" placeholder="ex: 0102061311"
                            value="<?php echo $mon_profil["Numero_Tel"]; ?>">
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Numéro WhatsApp</label>
                        <input type="tel" name="WhatsApp" id="WhatsApp" placeholder="ex: 0102061311"
                            value="<?php echo $mon_profil["Numero_Whatsapp"]; ?>">
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Lien Facebook</label>
                        <input type="tel" name="Facebook" id="Facebook" placeholder="rentrez votre lien..." value="<?php echo $mon_profil["Link_facebook"]; ?>" >
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Lien Instagram</label>
                        <input type="tel" name="Instagram" id="Instagram" placeholder="rentrez votre lien..." value="<?php echo $mon_profil["Link_instagram"]; ?>" >
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Lien Linkedin</label>
                        <input type="tel" name="Linkedin" id="Linkedin" placeholder="rentrez votre lien..." value="<?php echo $mon_profil["Link_linkedin"];?>">
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Biographie</label>
                        <textarea id="bio" placeholder="Ecrivez votre bio..." name="bio" rows="4" cols="40"
                            maxlength="300"><?php echo $mon_profil["Bio_Profil"]; ?></textarea>
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Centres d'intérêts</label>
                        <textarea id="interet" placeholder="Ecrivez vos centres d'intérêts..." name="interet" rows="4"
                            cols="40" maxlength="1900"><?php echo $mon_profil["Interets_Profil"]; ?></textarea>
                    </div>
                </div>
                <button type="submit" class="btnSubmit" name="change_profil" id="change_profil">Enregistrer les
                    modifications</button>
            </form>
        </div>


    </div>
</div>

<script>
    let couleur = document.getElementById('couleur');
    console.log(couleur)
    let apercu = document.getElementById('apercu');
    couleur.addEventListener('change', () => {
        apercu.style.backgroundColor = couleur.value; 
    })


    //------------------


   
</script>