<?php
include "ressources/database.php"
 
if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['email']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['password']);
   $mdp2 = sha1($_POST['passwordc']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
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
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<div id="inscription" class="box">
	<center><h1 class="title is-1" style="color: white;">Inscription</h1></center>
    <span class="iconclose icon is-medium"><i onclick="closeInscription()" class="fas fa-times-circle"></i></span>
	<form class="box" style="background: transparent;" method="POST">
		<div class="field">
			<div class="control">
				<center><label style="color: white;" class="label left" name="pseudo">Pseudo Minecraft :</label>
				<input id="pseudo" class="input input-inscri" type="text" placeholder="Exemple : Pseudo1234"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left" name="email">Email :</label>
				<input id="email" class="input input-inscri" type="text" placeholder="Exemple : email@gmail.com"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left" name="mail2">Email :</label>
				<input id="mail2" class="input input-inscri" type="text" placeholder="Comfirmation de l'email !"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left" name="password">Mot de Passe :</label>
				<input id="password" class="input input-inscri" type="text" placeholder="********************"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left" name="passwordc">Comfirmation Mot de Passe :</label>
				<input id="passwordc" class="input input-inscri" type="text" placeholder="********************"></input></center>
			</div><br />
			<div class="control">
				<center><input type="submit" name="forminscription" class="button is-primary" value="S'inscire"/></center>
				<?php
				if(isset($erreur)) {
					echo '<font color="red">'.$erreur."</font>";
				}
				?>
			</div>
		</div>
	</form>
</div>
<link rel="stylesheet" type="text/css" href="ressources/css/inscription.css">
<script type="text/javascript" src="ressources/js/popupInscription.js"></script>