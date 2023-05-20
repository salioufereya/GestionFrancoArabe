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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <title>Breukh'School</title>
    <link href="css/app.css" rel="stylesheet">
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
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="classes.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Classe</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="eleves.html">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Eleves</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="niveau.html">
              <i class="align-middle" data-feather="list"></i> <span class="align-middle">Niveaux</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="annee.html">
              <i class="align-middle" data-feather="clock"></i> <span class="align-middle">Année scolaire</span>
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

            <main class="content">




                <div class="container-fluid p-0">
                    <div class="titleAnnee">
                        Liste des eleves inscrits dans la classe de CP2 <br>

                       
                    </div>


                    <div class="row">
                        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                </div>
                                <table class="table table-hover my-0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th class="d-none d-xl-table-cell">Prenom</th>
                                            <th class="d-none d-xl-table-cell">Date de naissance</th>
                                            <th>Lieu de naissance</th>
                                            <th>Classe</th>
                                            <th class="d-none d-md-table-cell">statut</th>
                                            <th class="d-none d-xl-table-cell">numero</th>
                                            <th>Actions</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Diallo</td>
                                            <td>Khaoussou</td>
                                            <td class="d-none d-xl-table-cell">11/10/99</td>
                                            <td class="d-none d-xl-table-cell">Tamba</td>
                                            <td class="d-none d-md-table-cell">Second L</td>
                                            <td> <span class="badge bg-success">Interne</span></td>
                                            <td class="d-none d-xl-table-cell"> 00</td>
                                            <td><i class="fa-sharp fa-light fa-pen"></i>
                                                <i class="fa-sharp fa-light fa-pencil"></i>
                                                <i class="fa-sharp fa-light fa-pencil"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Diallo</td>
                                            <td>Khaoussou</td>
                                            <td class="d-none d-xl-table-cell">11/10/99</td>
                                            <td class="d-none d-xl-table-cell">Tamba</td>
                                            <td class="d-none d-md-table-cell">Second L</td>
                                            <td> <span class="badge bg-danger">Externe</span></td>
                                            <td class="d-none d-xl-table-cell">Null</td>
                                            <td><i class="fa-sharp fa-light fa-pen"></i>
                                                <i class="fa-sharp fa-light fa-pencil"></i>
                                                <i class="fa-sharp fa-light fa-pencil"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Diallo</td>
                                            <td>Khaoussou</td>
                                            <td class="d-none d-xl-table-cell">11/10/99</td>
                                            <td class="d-none d-xl-table-cell">Tamba</td>
                                            <td class="d-none d-md-table-cell">Second L</td>
                                            <td> <span class="badge bg-danger">Externe</span></td>
                                            <td class="d-none d-xl-table-cell"> Null</td>
                                            <td><i class="fa-sharp fa-light fa-pen"></i>
                                                <i class="fa-sharp fa-light fa-pencil"></i>
                                                <i class="fa-sharp fa-light fa-pencil"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Diallo</td>
                                            <td>Khaoussou</td>
                                            <td class="d-none d-xl-table-cell">11/10/99</td>
                                            <td class="d-none d-xl-table-cell">Tamba</td>
                                            <td class="d-none d-md-table-cell">Second L</td>
                                            <td> <span class="badge bg-success">Interne</span></td>
                                            <td class="d-none d-xl-table-cell"> 01</td>
                                            <td><i class="fa-sharp fa-light fa-pen"></i>
                                                <i class="fa-sharp fa-light fa-pencil"></i>
                                                <i class="fa-sharp fa-light fa-pencil"></i>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>



                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Titre XXX</h5>
                                </div>
                                <div class="card-body d-flex w-100">
                                    <div class="align-self-center chart chart-lg">
                                        <canvas id="chartjs-dashboard-bar"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>


            <!--Modal-->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Classe</h5>
                        </div>
                        <div class="modal-body">

                            <form>
                                <!-- date input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Classe</label>
                                    <input type="text" id="form3Example4" class="form-control" />
                                </div>
                                <!-- date input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Scolarité</label>
                                    <input type="text" id="form3Example4" class="form-control" />
                                </div>
                                <!-- date input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Niveau</label>
                                    <input type="text" id="form3Example4" class="form-control" />
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal-->
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

    <div>


    </div>

    <script src="js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>