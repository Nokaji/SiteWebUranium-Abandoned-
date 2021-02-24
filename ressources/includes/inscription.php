<div id="inscription" class="box">
	<center><h1 class="title is-1" style="color: white;">Inscription</h1></center>
    <span class="iconclose icon is-medium"><i onclick="closeInscription()" class="fas fa-times-circle"></i></span>
	<form class="box" style="background: transparent;">
		<div class="field">
			<div class="control">
				<center><label style="color: white;" class="label left" for="pseudo">Pseudo Minecraft :</label>
				<input id="pseudo" class="input input-inscri" type="text" placeholder="Exemple : Pseudo1234"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left" for="email">Email :</label>
				<input id="email" class="input input-inscri" type="text" placeholder="Exemple : email@gmail.com"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left" for="password">Mot de Passe :</label>
				<input id="password" class="input input-inscri" type="text" placeholder="********************"></input></center>
			</div>
			<div class="control">
				<center><label style="color: white;" class="label left" for="password-comfirm">Comfirmation Mot de Passe :</label>
				<input id="password-comfirm" class="input input-inscri" type="text" placeholder="********************"></input></center>
			</div><br />
			<div class="control">
				<center><button class="button is-primary">S'Inscrire</button></center>
			</div>
		</div>
	</form>
</div>
<link rel="stylesheet" type="text/css" href="ressources/css/inscription.css">
<script type="text/javascript" src="ressources/js/popupInscription.js"></script>