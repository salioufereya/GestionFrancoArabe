
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Breukh'School</title>

	<link href="/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">Breukh'School</span>
				</a>
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Menu
					</li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="acccueil.html">
							<i class="align-middle" data-feather="sliders"></i> <span
								class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="http://localhost:8000/Class/view">
							<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Classe</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="http://localhost:8000/Eleve/view">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Eleves</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="http://localhost:8000/GroupeNiveau/view">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Niveaux</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="http://localhost:8000/Annee/view">
							<i class="align-middle" data-feather="clock"></i> <span class="align-middle">Année
								scolaire</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="">
							<i class="align-middle" data-feather="square"></i> <span class="align-middle">Titre3</span>
						</a>
					</li>
					<li class="sidebar-item">

					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="">
							<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Titre4</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="">
							<i class="align-middle" data-feather="align-left"></i> <span
								class="align-middle">Titre5</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="">
							<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Titre6</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
			</nav>
			
            <?= $content  ?>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/"
									target="_blank"><strong>Breukh'School</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">2023</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">@sonatel
										Académy</a>
								</li>

								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Conditions</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="/js/app.js"></script>



</body>

</html>