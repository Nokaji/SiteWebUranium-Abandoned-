<a onclick="openUserProfile()" class="item"><?php echo $_SESSION['pseudo'] ?></a>
<div id="profile">
    <span class="iconclose-profile icon is-medium"><i onclick="closeUserProfile()" class="fas fa-times-circle"></i></span>
    <a href="" class="link-profile">Détails du Compte</a>
    <a href="" class="link-profile">Mot de passe et Sécurité</a>
</div>
<script type="text/javascript" src="ressources/js/popupprofile.js"></script>
<link rel="stylesheet" type="text/css" href="ressources/css/popupprofile.css">