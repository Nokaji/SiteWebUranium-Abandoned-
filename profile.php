<?php
session_start();

if(isset($_SESSION['id'])){

}else{
    header("Location: connexion");
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
    <link rel="stylesheet" type="text/css" href="ressources/css/profile.css">
    <title><?php echo $_SESSION['pseudo'];?> | UraniumV1</title>
    <?php include "ressources/includes/menunav.php" ?>
</head>
<header>
    <?php include "ressources/includes/header2.php" ?>
</header>
<body>
    <?php include "ressources/includes/download.php" ?>
    <?php include "ressources/includes/profile.php" ?>
    <div class="retour">
        <a class="retour-accueil">Accueil</a><p class="retour-p">></p>
        <h1 class="title is-1 title-perso" style="color: white;">Détailes du Compte</h1>
    </div>
</body>
</html>