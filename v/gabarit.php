<!DOCTYPE HTML>
<html>
	<head>
		<title>Family Site</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="v/include/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="v/include/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="v/include/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">
			<div id="header-wrapper">
				<div class="container">
					<!-- formulaire de déconnexion |je l'affiche seulement si le visteur est connecté-->
					<?php
						if(isset($boutonDeco)){ echo $boutonDeco;}
					?>
					<div class="row">
						<div class="12u">
							<header id="header">
								<h1><a href="?action=accueil" id="logo">Family Site MALAUD</a></h1>
								<nav id="nav">
									<a href="?action=accueil" class="<?php if($action=='accueil'){ echo $activ;} ?>">Homepage</a>
									<a href="?action=profil" class="<?php if($action=='profil'){ echo $activ;} ?>">Profil</a>
									<a href="">Two Column #2</a>
									<a href="">One Column</a>
									<a href="">Three Column</a>
								</nav>
							</header>

						</div>
					</div>
				</div>
			</div>
<!-- fin de tete et début de main -->
			
			<div id="main">
				<div class="container">
					<div class="row main-row">
						<div class="12u">

							<section>
								<h2><?= $action ?></h2> <!-- Élément spécifique -->
								<p><?= $contenu ?></p>  <!-- Élément spécifique -->
							</section>

						</div>
					</div>
				</div>
			</div>
		
<!-- fin de main et début de pied -->
			<div id="footer-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">

							<div id="copyright">
								Family site, site développé par Greg</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Scripts -->
			<script src="v/include/js/jquery.min.js"></script>
			<script src="v/include/js/skel.min.js"></script>
			<script src="v/include/js/skel-viewport.min.js"></script>
			<script src="v/include/js/util.js"></script>
			<!--[if lte IE 8]><script src="v/include/js/ie/respond.min.js"></script><![endif]-->
			<script src="v/include/js/main.js"></script>

	</body>
</html>
