<?php
include "../ressources/database.php";
 
if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['email']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['password']);
   $mdp2 = sha1($_POST['passwordc']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['mail2']) AND !empty($_POST['password']) AND !empty($_POST['passwordc'])) {
      $pseudolength = strlen($pseudo);
      $mdplength = strlen($mdp);
      if($pseudolength <= 255) {
      		$reqpseudo = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?");
      		$reqpseudo->execute(array($pseudo));
      		$pseudoexist = $reqpseudo->rowCount();
      		if($pseudoexist == 0) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
     	} else {
     		$erreur = "Ce pseudo exist déjà !";
     }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription | UraniumV1</title>
	<meta property="og:image" content="../ressources/img/favicon.png"/>
	<link rel="icon" type="image/png" href="../ressources/img/favicon.png"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="../ressources/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../ressources/css/inscription.css">
	<?php include "../ressources/includes/menunav.php"?>
</head>
<header>
	<?php include "../ressources/includes/header2.php" ?>
</header>
<body>
	<?php include "../ressources/includes/download.php" ?>
    
<div id="inscription" class="box">
	<center><h1 class="title is-1" style="color: white;">Inscription</h1></center>
	<form method="POST" action="" class="box" style="background: transparent;">
		<div class="field"">
			<div class="control">
				<center><label style="color: white;" class="label left">Pseudo Minecraft :</label>
				<input name="pseudo" id="pseudo" class="input input-inscri" type="text" placeholder="Exemple : Pseudo1234" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left">Email :</label>
				<input name="email" id="email" class="input input-inscri" type="email" placeholder="Exemple : email@gmail.com" value="<?php if(isset($email)) { echo $email; } ?>"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left">Email :</label>
				<input name="mail2" id="mail2" class="input input-inscri" type="email" placeholder="Comfirmation de l'email !" value="<?php if(isset($mail2)) { echo $mail2; } ?>"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left">Mot de Passe :</label>
				<input name="password" id="password" class="input input-inscri" type="password" placeholder="********************"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left">Comfirmation Mot de Passe :</label>
				<input name="passwordc" id="passwordc" class="input input-inscri" type="password" placeholder="********************"></input></center>
			</div><br />
			<div class="control">
				<center><input name="forminscription" type="submit" class="button is-primary" value="S'inscire"/></center>
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