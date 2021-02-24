<link rel="stylesheet" type="text/css" href="ressources/css/menunav.css">
<nav class="navbar nav-menu">
	<i onclick="openMenu()" id="openMenu" class="fas fa-bars bars-icon fa-5x"></i>
	<i onclick="closeMenu()" id="closeMenu" class="fas fa-times x-icon fa-5x"></i>
	<div class="navbar-menu is-active menu-bars" id="navMenu">
		<h1 class="title-menu">Menu</h1>
		<div class="navbar-start">
			<a class="item" href="index.php">Accueil</a>
			<a class="item">Forum</a>
			<a class="item">Wiki</a>
			<a onclick="openDownload()" class="item">Télécharger</a>
			<div class="navbar-item has-dropdown is-hoverable">
				<div class="btn_item btn_a">
					Profile <i class="fas fa-chevron-circle-down menu-arrow"></i>
				</div>
				<div class="navbar-dropdown bg-dark drop">
					<a class="navbar-item item drop-item" onclick="openConnexion()">Connexion</a>
					<a class="navbar-item item drop-item" onclick="openInscription()">S'Inscrire</a>
				</div>
			</div>
		</div>
		<div class="navbar-end">
			<a class="item btn-shop green">Boutique</a>
		</div>
	</div>
</nav>

<script type="text/javascript" src="ressources/js/menu.js"></script>