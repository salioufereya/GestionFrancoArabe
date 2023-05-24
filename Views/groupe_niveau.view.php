

            <main class="content">




                <div class="container-fluid p-0">
                    <div class="titleAnnee">
                        Liste des groupes niveau <br>

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
                                            <th>Detail</th>
                                            <th>Niveau</th>
                                            <th>Actions</th>
                                        </tr>

                                    </thead>


                                   
                                    <tbody>
                                    <?php foreach ($groupeNiveaux as $groupeNiveau): ?>
                                        <tr>
                                            <td> <i class="fa-solid fa-circle-info"></i></td>
                                            <td> <?= $groupeNiveau['libelle'] ?></td>
                                            <td>
                                            <i class="fa-regular fa-trash-can"></i>
                                            <i class="fa-regular fa-pen-to-square"></i>
                                               
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
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
                            <h5 class="modal-title" id="exampleModalLabel">Niveau</h5>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="http://localhost:8000/GroupeNiveau/create">
                                <!-- date input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4" >Groupe Niveau</label>
                                    <input type="text" id="form3Example4" class="form-control" name="libelle" />
                                </div>
                                <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary" name="valider">Ajouter</button>
                        </div>
                            </form>
                        </div>     
                    </div>
                </div>
            </div>
            <!--Modal-->
           