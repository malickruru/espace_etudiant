<?php 
        // header('Location:http://localhost/espace_etudiant/index.php');
        $mat_etd = "";
    require_once('connexion/connect.inc.php');
    if (isset($_POST['submit_mat'])) {
        echo 'bonjour, je check mon matricule ';
        $mat_etd = addslashes( $_POST['matricule']);
        // $req_select_etd = $connexion->query("SELECT * FROM t_matricules WHERE Matricule_Etd = '$mat_etd' ");

        $req_select_etd = $connexion->prepare("SELECT * FROM t_matricules WHERE Matricule_Etd = '$mat_etd' ");
        $req_select_etd->execute();
        // $dbco->exec($sql);
        $row_mat_etd = $req_select_etd->fetch();	
        // $nbre_select_etd =  count($row_mat_etd);
        if (!$row_mat_etd ) {
            echo "<span style='color:red; font-weight:bold;border:1px solid red'>Matricule non trouvé veuillez réessayer</span>";
            $mat_etd = "";
        }else{
        $nom_etd = $row_mat_etd['Nom_Etd_Mat'] ;
        $prenom_etd = $row_mat_etd['Prenom_Etd_Mat'] ;
        //  @header("Location:creer_compte.php?nom=$nom_etd&prenom=$prenom_etd&matricule=$mat_etd");

        }}
       
        if(isset($_POST['Submit_Etd'])) {
            
             //$creation_compte appartient à la classe PDOStatement
             $creation_compte = $connexion->prepare("INSERT INTO t_etudiants( Mat_Etd, Nom_Etd, Prenoms_Etd, Date_Naiss_Etd, Email_Etd, Login_Etd, Password_Etd) 
             VALUES (:Mat_Etd, :Nom_Etd, :Prenoms_Etd, :Date_Naiss_Etd, :Email_Etd, :Login_Etd, :Password_Etd)
         ");
         $creation_compte->execute(array(
                             ':Mat_Etd' => $_POST['Mat_Etd'],
                             ':Nom_Etd' => $_POST['Nom_Etd'],
                             ':Prenoms_Etd' => $_POST['Prenoms_Etd'],
                             ':Date_Naiss_Etd' => $_POST['Date_Naiss_Etd'],
                             ':Email_Etd' => $_POST['Email_Etd'],
                             ':Login_Etd' => $_POST['Login_Etd'],
                             ':Password_Etd' => $_POST['Password_Etd']));
         echo "Entrée ajoutée dans la table";
     }
           
    //  catch(PDOException $e){
    //      echo "Erreur : " . $e->getMessage();
    //  }
    
            
       

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Créer un compte étudiant</h2>
    <?php if($mat_etd == ""){?>
    <form name="form_matricule" action="" method="POST">
        <label for="matricule">Saisissez votre matricule</label>
        <input type="text" name="matricule" id="matricule" >
        <input type="submit" name='submit_mat' value="Vérifier">
    </form>
    <?php }else{?>
        <form name="form_etudiant" action="" method="POST">
        <label for="Mat_Etd">Matricule</label>
        <input type="text" name="Mat_Etd" id="Mat_Etd" value=<?php echo $mat_etd ?> readonly>
        <br><br>
        <label for="Nom_Etd">Nom</label>
        <input type="text" name="Nom_Etd" id="Nom_Etd"  value=<?php echo $nom_etd ?> readonly >
        <br><br>
        <label for="Prenoms_Etd">Prenom</label>
        <input type="text" name="Prenoms_Etd" id="Prenoms_Etd"  value=<?php echo $prenom_etd ?> readonly >
        <br><br>
        <label for="Date_Naiss_Etd">Date de naissance</label>
        <input type="date" name="Date_Naiss_Etd" id="Date_Naiss_Etd" >
        <br><br>
        <label for="Email_Etd">Email</label>
        <input type="email" name="Email_Etd" id="Email_Etd" >
        <br><br>
        <label for="Login_Etd">Login</label>
        <input type="text" name="Login_Etd" id="Login_Etd" >
        <br><br>
        <label for="Password_Etd">Mot de passe</label>
        <input type="password" name="Password_Etd" id="Password_Etd" >
        <br><br>
        <label for="Password_Etd2">Comfirmer Mot de passe</label>
        <input type="password" name="Password_Etd2" id="Password_Etd2" >
        <br><br>
        <input type="submit" name='Submit_Etd' value="Créer le compte">
    </form>
    <?php }?>
</body>
</html>

