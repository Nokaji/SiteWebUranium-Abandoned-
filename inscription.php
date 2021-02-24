<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="ressources/css/inscription.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:image" content="ressources/img/favicon.png"/>
	<link rel="icon" type="image/png" href="ressources/img/favicon.png"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="ressources/fontawesome/css/all.css">
    <title>Inscription | UraniumV1</title>
	<?php include "ressources/includes/menunav.php"?>
</head>
<header>
<?php include "ressources/includes/header.php" ?>
</header>
<body>
<?php include "ressources/includes/download.php" ?>
<?php include "ressources/includes/connexion.php" ?>
<?php include "ressources/includes/base.php"?>
<div id="inscription">
	<h1 class="title is-1" style="color: white;">Inscriptoin</h1>
	<span class="iconclose icon is-medium"><i onclick="closeInscription()" class="fas fa-times-circle"></i></span>
	<form class="box" style="background: transparent;">
		<div class="field">
			<div class="control">
				<label style="color: white;" class="label left" for="pseudo">Pseudo Minecraft :</label>
				<input id="pseudo" class="input" type="text" placeholder="Exemple : Pseudo1234"></input>
			</div>
			<div class="control">
				<label style="color: white;" class="label left" for="email">Email :</label>
				<input id="email" class="input" type="text" placeholder="Exemple : email@gmail.com"></input>
			</div>
			<div class="control">
				<label style="color: white;" class="label left" for="password">Mot de Passe :</label>
				<input id="password" class="input" type="text" placeholder="********************"></input>
			</div>
            <div class="control">
				<label style="color: white;" class="label left" for="password-comfirm">Comfirmation Mot de Passe :</label>
				<input id="password-comfirm" class="input" type="text" placeholder="********************"></input>
			</div>
		</div>
	</form>
</div>
</body>
</html>