<link rel="stylesheet" type="text/css" href="ressources/css/menunav.css">
<link rel="stylesheet" type="text/css" href="ressources/css/popup/connexion.css">
<div>
	<div class="header-img">
		<nav class="menu-nav">
			<div class="div-right">
				<i style="cursor: pointer;" onclick="menuModul()" id="menu-bars" class="fas fa-bars btn_a"></i>
				<ul id="menu">
					<li class="btn_li"><a class="btn_a" href="">Accueil</a></li>
					<li class="btn_li"><a class="btn_a" href="">Boutique</a></li>
					<li class="btn_li"><a class="btn_a" href="">Forum</a></li>
					<li class="btn_li"><a class="btn_a" href="">Wiki</a></li>
					<li class="btn_li"><a onclick="popupDownload()" class="btn_button btn_a">Télécharger</a></li>
					<i style="visibility: hidden;" id="btnmenuclose" class="fas fa-times-circle"></i>
				</ul>
			</div>
			<!-- <div class="div-left">
				<ul>
					<li class="btn_li"><a class="btn_a" href="">Connexion</a></li>
					<li class="btn_li"><a class="btn_a" href="">Inscription</a></li>
				</ul>
			</div> -->
		</nav>
		<center><a><img class="img_banner" src="ressources/img/theme_logo.png"></a></center>
	</div>
	<!-- <div class="popup_download" style="visibility: hidden;">
		<h1>Télécharge Le Launcher</h1>
		<img src="">
		<i onclick="popupCloseDownload()" class="fas fa-times-circle btncloseconnect"></i>
	</div> -->
</div>
<script type="text/javascript" src="ressources/js/popupDownload.js"></script>