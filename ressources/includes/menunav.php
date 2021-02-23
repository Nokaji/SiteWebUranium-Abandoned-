<link rel="stylesheet" type="text/css" href="ressources/css/menunav.css">
<nav class="navbar nav-menu is-active">
	<a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
  		<span></span>
	  	<span></span>
	  	<span></span>
	</a>
	<div class="navbar-menu is-active menu-bars" id="navMenu">
		<div class="navbar-start">
			<a class="item">Accueil</a>
			<a class="item">Forum</a>
			<a class="item">Wiki</a>
			<a class="item">Télécharger</a>
		</div>
		<div class="navbar-end">
			<div class="navbar-item has-dropdown is-hoverable">
				<div class="btn_item btn_a">
					Profile <i class="fas fa-chevron-circle-down menu-arrow"></i>
				</div>
				<div class="navbar-dropdown bg-dark">
					<a class="navbar-item" onclick="openConnexion()">Connexion</a>
					<a class="navbar-item">S'Inscrire</a>
				</div>
			</div>
		</div>
	</div>
</nav>

<script type="text/javascript" src="ressources/js/menu.js"></script>