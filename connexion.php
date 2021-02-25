<?php
session_start();

include "ressources/database.php";

include_once('cookieconnect.php');
if(isset($_POST['formconnexion']))
{
   $mailconnect = htmlspecialchars($_POST['email']);
   $mdpconnect = sha1($_POST['password']);
   if(!empty($mailconnect) AND !empty($mdpconnect))
   {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1)
      {
         if(isset($_POST['rememberme'])) {
            setcookie('session_id_email',$mailconnect,time()+365*24*3600,null,null,false,true);
            setcookie('session_id_password',$mdpconnect,time()+365*24*3600,null,null,false,true);
         }
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: index.php");
      }
      else
      {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   }
   else
   {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:image" content="ressources/img/favicon.png"/>
	<link rel="icon" type="image/png" href="ressources/img/favicon.png"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="ressources/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="ressources/css/connexion.css">
	<title>Connexion | UraniumV1</title>
	<?php include "ressources/includes/menunav.php"?>
</head>
<header>
	<?php include "ressources/includes/header2.php" ?>
</header>
<body>
	<?php include "ressources/includes/download.php" ?>

<div class="retour">
	<a class="retour-accueil">Accueil</a><p class="retour-p">></p>
	<h1 class="title is-1 title-perso" style="color: white;">Connexion</h1>
</div>
<div id="connexion" class="box">
	<form class="form-perso" style="background: transparent;" method="POST">
		<div class="field">
			<div class="control">
				<label style="color: white;" class="label left">Email :</label>
				<input id="email" class="input input-inscri" type="email" name="email" placeholder="Exemple : email@gmail.com"></input>
			</div>
			<div class="control">
				<label style="color: white;" class="label left">Mot de Passe :</label>
				<input id="password" class="input input-inscri" type="password" name="password" placeholder="********************"></input>
			</div><br />
			<input type="checkbox" name="rememberme" id="remembercheckbox" /><label for="remembercheckbox">  Se souvenir de moi</label>
            <br /><br />
			<div class="control">
				<input type="submit" name="formconnexion" class="button is-primary" value="Se Connecter"></input>
				<?php
				if(isset($erreur)) {
					echo '<font color="red">'.$erreur."</font>";
				}
				?>
			</div>
		</div>
	</form>
</div>
</body>
</html>