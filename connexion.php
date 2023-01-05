<?php 

	if (isset($_POST['submit_conn'])) {
		if ((trim($_POST['login']) != "") && (trim($_POST['password']) != "")) {
			$req_login_etd = $connexion->prepare("SELECT * FROM t_etudiants WHERE (Login_Etd= :login OR Email_Etd= :courriel ) AND Password_Etd = :password ");
        	$req_login_etd->execute(array(
				'login' => $_POST['login'],
				'courriel'  =>$_POST['login'],
				'password' => sha1($_POST['password'])
			));
		}
		$connected_etd = $req_login_etd->fetch();
		if (!$connected_etd ) {
            echo "<span style='background-color:white; color:red; font-weight:bold;'>Login ou mot de passe incorect</span>";
        }else{
			// echo "<span style='background-color:white; color:green; font-weight:bold;'>vous êtes bien connectez</span>";
			
			 
			// initialisation des variable de session
			$session_id = session_id();
			$_SESSION['nom'] = $connected_etd['Prenoms_Etd']." ".$connected_etd['Nom_Etd'];
			$_SESSION['email'] = $connected_etd['Email_Etd'];
			$_SESSION['login'] = $connected_etd['Login_Etd'];
			$_SESSION['id_etd'] = $connected_etd['Id_Etudiant'];
			$_SESSION['date'] = date('d-m-Y H:i:s');
			$_SESSION['matricule'] = $connected_etd['Mat_Etd'];
			// enregistrement de la session
			$save_session = $connexion->prepare("INSERT INTO t_sessions( Login_Session_Etd, Id_Session_Etd, Session_Start, Session_Sys_Id) 
             VALUES (:Login_Session_Etd, :Id_Session_Etd, NOW(), :Session_Sys_Id)
         ");
         	$save_session->execute(array(
                             ':Login_Session_Etd' => $_SESSION['login'],
                             ':Id_Session_Etd' => $_SESSION['id_etd'],
                             
                             ':Session_Sys_Id' => $session_id,
                             ));
			// redirection de l'utilisateur à l'accueil
			header('Location:index.php');
			// echo $_SESSION['login'];
			// echo $_SESSION['email'];
		}
	}
?>

<div class="container flexCenter">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="POST" action="">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="login" id="login" placeholder="Nom d'utilisateur / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="password" id="password" placeholder="Mot de passe">
				</div>
				<button name="submit_conn" class="login__submit" type="submit">
					<span class="button__text">Connectez-vous</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
				<a href="index.php?action=creer_compte" style="color:gold"><h3>Créer votre compte</h3></a>
				<a href="index.php?action=mdp_oublie" style="color:white">Mot de passe oublié</a>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>





