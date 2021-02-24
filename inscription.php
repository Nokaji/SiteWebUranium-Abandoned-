<?php
include "ressources/database.php";
 
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
	<title>Home | UraniumV1</title>
	<meta property="og:image" content="ressources/img/favicon.png"/>
	<link rel="icon" type="image/png" href="ressources/img/favicon.png"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="ressources/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="ressources/css/inscription.css">
	<?php include "ressources/includes/menunav.php"?>
</head>
<header>
	<?php include "ressources/includes/header2.php" ?>
</header>
<body>
	<?php include "ressources/includes/download.php" ?>
	<?php include "ressources/includes/connexion.php" ?>
</body>
</html>