<!--	<div id="inscription" class="box">
	<center><h1 class="title is-1" style="color: white;">Inscription</h1></center>
    <span class="iconclose icon is-medium"><i onclick="closeInscription()" class="fas fa-times-circle"></i></span>
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
</div> !-->