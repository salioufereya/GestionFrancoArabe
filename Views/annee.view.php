
            <main class="content">




                <div class="container-fluid p-0">
                    <div class="titleAnnee">
                        Liste des années d'entrées scolaire <br>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter</button>
                    </div>


                    <div class="row">
                        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                </div>
                                <table class="table table-hover my-0">
                                    <thead>
                                        <tr>
                                            <th>Année Scolaire</th>
                                            <th class="d-none d-xl-table-cell">Date de début</th>
                                            <th class="d-none d-xl-table-cell">Date de fin</th>
                                            <th>Actions</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022-2023</td>
                                            <td>12/12/28</td>
                                            <td class="d-none d-xl-table-cell">11/10/99</td>
                                            <td><i class="fa-sharp fa-light fa-pen"></i>
                                                <i class="fa-sharp fa-light fa-pencil"></i>
                                                <i class="fa-sharp fa-light fa-pencil"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-2023</td>
                                            <td>12/12/28</td>
                                            <td class="d-none d-xl-table-cell">11/10/99</td>
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
                            <h5 class="modal-title" id="exampleModalLabel">Année scolaire</h5>
                        </div>
                        <div class="modal-body">
                            <form action="/" method="post">
                                <!-- date input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Année scolaire</label>
                                    <input type="text" id="form3Example4" class="form-control" />
                                </div>
                                <!-- date input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Date de debut</label>
                                    <input type="date" id="form3Example4" class="form-control" />
                                </div>
                                <!-- date input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Date de fin</label>
                                    <input type="date" id="form3Example4" class="form-control" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal-->
          