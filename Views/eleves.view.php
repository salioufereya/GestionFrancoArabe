

            <main class="content">

                <h1 class="">Trier par:</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="cardSelect">

                            <select>
                                <option selected>Classes</option>
                                <option value="1">CI</option>
                                <option value="2">CP</option>
                                <option value="3">SECONDE</option>
                            </select>
                            <select>
                                <option selected>Niveaux</option>
                                <option value="1">Elementaire</option>
                                <option value="2">Secondaire</option>
                                <option value="3">College</option>
                            </select>
                            <select>
                                <option selected>Anneé inscription</option>
                                <option value="1">2021</option>
                                <option value="2">2022</option>
                                <option value="3">2023</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="divSearch">
                        <input type="search" placeholder="Rechercher un étudiant">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter</button>
                    </div>


                    <div class="row">
                        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Secondaire</h5>
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
                            <h5 class="modal-title" id="exampleModalLabel">Nouvel éleves</h5>
                        </div>
                        <div class="modal-body">

                            <form>
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1">Nom</label>
                                            <input type="text" id="form3Example1" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example2">Prenom</label>
                                            <input type="text" id="form3Example2" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1">lieu de naissance</label>
                                            <input type="text" id="form3Example1" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example2">Sexe</label> <br>
                                            <select name="" id="">
                                                <option value="">M</option>
                                                <option value="">F</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                               

                                <!-- date input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Date de naissance</label>
                                    <input type="date" id="form3Example4" class="form-control" />
                                </div>
                                <!--Classe-->
                                <div class="form-outline mb-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Classe</option>
                                        <option value="1">CI</option>
                                        <option value="2">CP</option>
                                        <option value="3">CE1</option>
                                    </select>
                                </div>
                                <!--statut-->
                                <div class="form-outline mb-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Statut</option>
                                        <option value="1">Interne</option>
                                        <option value="2">Externe</option>

                                    </select>
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
           