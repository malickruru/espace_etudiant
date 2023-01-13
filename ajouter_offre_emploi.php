<?php 

if (isset($_POST['offre'])) {
  
    
   
    // créer le post
    $offre = [
        'nom_entreprise' => $_POST['entreprise'],
        'nom_poste' => $_POST['poste'],
        'description_poste' => $_POST['description'],
    ];
    Insert('t_offres',$offre);

    header('Location:index.php');
}

?>

<!--Formulaire-->
<div class="container flexCenter">
<div class="form_container ">
    <div class="title">Offre d'emplois</div>
    <form action="" method="POST">
      <div class="Informations-personnelles">

        <div class="input-box">
          <span class="details">Nom de l'entreprise</span>
          <input type="text" placeholder="Entreprise" id="name"  name="entreprise" required>
        </div>

        <div class="input-box">
          <span class="details">Nom du poste</span>
          <input type="text" placeholder="Poste" id="first-name" name="poste" required>
        </div>

        <div class="input-box">
          <span class="details">Description du Poste</span>
          <textarea id="contact" name="description" >
         Description
          </textarea>
        </div>
        
      </div>
     <div class="button">
      <button class="btn-two a" id="submit" href="#" name='offre' type="submit">Soumettre l'offre</button>
    </div>
    </form>
  </div>
  </div>
<!--Fin Formulaire-->
