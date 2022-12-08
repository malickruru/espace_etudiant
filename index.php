<?php 
require_once("component/data.php");
require_once("component/utilisateur.php");
require_once("component/publication.php");
require_once("component/emploi.php");
require_once("component/popup.php");

if (isset($_GET["action"])) {
    $action = $_GET["action"];
}

$content = "publication";

if (isset($_GET["content"])) {
    $content = $_GET["content"];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    
    <!-- css -->
    <link rel="stylesheet" href="css/accueil.css">
</head>
<body class="accueil_body bg_moving">
<?php require_once('component/header.php')?>

    <main class="accueil_main ">
        <div>
        <!-- fils d'actu -->
        <?php 
        if(!isset($_GET['action'])){
        if ($content == 'publication') {
            foreach ($article as $item ) {
                publication($utilisateur,$item['id_user'],$item['id'],$item['type'],$item['src'],$item['date'],$item['titre'],$item['description'],$comment);
            }
        }else{
            foreach ($emploi as $item) {
               emploi($item['titre'],$item['text']);
            }
        }
            
    }
    if($action == 'connexion'){
        require_once('connexion.php');
    }
    if($action == 'creer_compte'){
        require_once('creer_compte.php');
    }?>
        </div>
        <!-- sidebar -->
            <div class="accueil_sidebar" id="accueil_sidebar">
                <div class="accueil_sidebar_link">
                    <div class="accueil_sidebar_item accueil_border_bottom">
                        <a href="?content=publication">Voir les publications</a>
                    </div>
                    <div class="accueil_sidebar_item">
                      
                        <a href="?content=offres">Voir les offres d'emplois</a>
                    </div>
                </div>
                <div class="accueil_sidebar_user">
                    <h4>Etudiants Connectés</h4>
                    <div class="overflow_y_scroll">
                    <?php 
                    foreach ($utilisateur as $user ) {
                        utilisateur($user['image'],$user["nom"],$user["tel"],$user["mail"] );
                    }
                ?>
                    </div>
                
                </div>
            </div>
    </main>
    <?php require_once('component/footer.php') ?>

            <script src="js/popup.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
            <!-- <script src="js/sidebar.js"></script> -->
</body>
</html>
