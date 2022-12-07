<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/offre_emploi.css">
    <title>Ajouter Offre d'emplois</title>
</head>
<body>
    
<?php require_once('component/header.php')?>

<!--Formulaire-->

<div class="container">
    <div class="title">Offre d'emplois</div>
    <form action="#">
      <div class="Informations-personnelles">

        <div class="input-box">
          <span class="details">Nom de l'entreprise</span>
          <input type="text" placeholder="Entreprise" id="name" required>
        </div>

        <div class="input-box">
          <span class="details">Nom du poste</span>
          <input type="text" placeholder="Poste" id="first-name" required>
        </div>

        <div class="input-box">
          <span class="details">Description du Poste</span>
          <input type="tel" placeholder="Description" id="contact" required>
        </div>
        
      </div>
     <div class="button">
      <a href="connexion.html" class="btn-two a"  id="submit">Soumettre l'offre</a>
     </div>
    </form>
  </div>
<!--Fin Formulaire-->
</body>
</html>