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
	<h1 class="title is-1 title-perso" style="color: white;">Inscription</h1>
</div>
<div id="connexion">
	<h1 class="title is-1" style="color: white;">Connexion</h1>
	<span class="iconclose icon is-medium"><i onclick="closeConnexion()" class="fas fa-times-circle"></i></span>
	<form class="box" style="background: transparent;">
		<div class="field">
			<div class="control">
				<label style="color: white;" class="label left" for="email">Email :</label>
				<input id="email" class="input" type="text" placeholder="Exemple : email@gmail.com"></input>
			</div>
			<div class="control">
				<label style="color: white;" class="label left" for="password">Mot de Passe :</label>
				<input id="password" class="input" type="text" placeholder="********************"></input>
			</div><br />
			<div class="control">
				<button class="button is-primary">Se Connecter</button>
			</div>
		</div>
	</form>
</div>
</body>
</html>