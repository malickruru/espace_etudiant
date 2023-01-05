<?php 
session_start();
require_once('connexion/connect.inc.php');
require_once("component/data.php");
require_once("component/utilisateur.php");
require_once("component/publication.php");
require_once("component/emploi.php");
require_once("component/popup.php");
require_once("routine/database.php");
require_once("routine/upload.php");
require_once("routine/redirect.php");

if(isset($_SESSION['id_etd'])){
    $p_sess = $_SESSION['id_etd'];
$req_count_profil = $connexion ->query("SELECT COUNT(Id_Profil) AS nbr_profil FROM t_profils WHERE Id_Etd_Profil = $p_sess");
$count_profil = $req_count_profil->execute();
$count_profil = $req_count_profil->fetch();
$profil_exist = $count_profil["nbr_profil"];
$action = "";
}else{
    $profil_exist = 0;
}



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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <title>Accueil</title>
    
    <!-- css -->
    <link rel="stylesheet" href="css/accueil.css">
</head>
<body class="accueil_body bg_moving">
<?php require_once('component/header.php')?>

    <main class="accueil_main ">
      
        <!-- fils d'actu -->
        <?php 
       
        if(!isset($_GET['action'])){
         require_once("component/accueil.php");   
    }else{
        // if($action == 'connexion'){
        //     require_once('connexion.php');
        // }
        // if($action == 'creer_compte'){
        //     require_once('creer_compte.php');
        // }
        // if($action == 'mdp_oublie'){
        //     require_once('mdp_oublie.php');
        // }
        // if($action == 'profil'){
        //     require_once('profil.php');
        // }
        // if($action == 'modifier_profil'){
        //     require_once('creation_profil.php');
        // }
        // if($action == 'ajouter_offre_emploi'){
        //     require_once('ajouter_offre_emploi.php');
        // }
        // if($action == 'logout'){
        //     require_once('logout.php');
        // }
        // if($action == 'ajout_profil'){
        //     require_once('ajout_profil.php');
        // }
            redirect($action);
    }

    ?>
        
        
    </main>
    <?php require_once('component/footer.php') ?>

            <script src="js/popup.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
            <!-- <script src="js/sidebar.js"></script> -->
</body>
</html>
