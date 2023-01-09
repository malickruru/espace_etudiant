<?php 

if (isset($_POST['publication'])) {
    // enregistrer l'image
    $url = uploadImg($_FILES['Image']);
    
   
    // créer le post
    $post = [
        'Image_Post' => $url,
        'Titre_Post' => $_POST['Titre'],
        'Message_Post' => $_POST['Message'],
        'Nbre_Like_Post' => 0,
        'Nbre_Unlike_Post' => 0,
        'Nbre_Comment_Post' => 0,
        'Id_Etd_Post' => $_SESSION['id_etd']
    ];
    Insert('t_posts_etd',$post);

    header('Location:index.php');
}

?>


<!--Formulaire-->
<div class="container flexCenter">
    <div class="form_container ">
        <div class="title">Publication</div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="Informations-personnelles" style="flex-wrap: nowrap;flex-direction: column;">

                <div class="input-box">
                    <span class="details">Titre</span>
                    <input type="text" placeholder="Titre" id="titre" name="Titre" required>
                </div>

                <div class="input-box">
                    <span class="details">Message</span>
                    <textarea name="Message" id="Message" cols="30" rows="10"></textarea>
                </div>

                <div class="input-box">
                    <span class="details">Image</span>
                    <input type="file" placeholder="Image" id="Image" name="Image" required>
                </div>

            </div>
            <div class="button">
                <button class="btn-two a" id="submit" href="#" name='publication' type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</div>


<!--Fin Formulaire-->