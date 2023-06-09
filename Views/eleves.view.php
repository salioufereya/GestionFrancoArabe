<main class="content">

    <?php
    if (isset($_SESSION['error'])) {
        echo  "<div  class='text-danger'>";

        echo  $_SESSION['error'];

        echo "</div>";
        unset($_SESSION['error']);
    } elseif (isset($_SESSION['success'])) {
        echo  "<div  class='text-success'>";
        echo $_SESSION['success'];
        echo "</div>";
        unset($_SESSION['success']);
    }



    ?>




    <div class="container-fluid p-0" style="position: relative;">
        <div class="modal" style="position: absolute; z-index:3; background: rgba(0, 0, 0, 0.5); display:none">
            <form class="row g-3" id="form" method="POST" action="/Eleve/create/<?php


                                                                                $ids = explode('/', $_SERVER['REQUEST_URI']);
                                                                                $id = $ids[3];
                                                                                echo  (int) $id;
                                                                                ?>">
                <div class="text-center">
                    <img src="/images/imagedefaut.png" class="rounded-circle shadow-4" style="width: 150px;" alt="Avatar" />
                    <h2>Nouvel élève</h2>
                </div>

                <div class="col-md-6">
                    <div class="form-control">
                        <label for="firstName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="firstName" name="nom">

                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-control">
                        <label for="lastName" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="lastName" name="prenom">

                    </div>
                </div>

                <div class="col-6">
                    <div class="form-control">
                        <label for="inputAddress" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" placeholder="11-10-99" id="dateNaissance" name="dateDeNaissance">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-control">
                        <label for="inputAddress" class="form-label">Lieu de naissance</label>
                        <input type="text" class="form-control" placeholder="Labé Guinée" id="lieuNaissance" name="lieuNaissance">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-control">
                        <label for="inputAddress2" class="form-label">Numero</label>
                        <input type="text" class="form-control" placeholder="+221000000000" id="numero" name="numero">
                    </div>
                </div>
                <div class="col-6" style="color: black;">
                    <label for="inputAddress2" class="form-label">Sexe</label> <br>
                    <input type="radio" id="subscribeNews1" name="sexe" value="Garcon"> Garçon
                    <input type="radio" id="subscribeNews2" name="sexe" value="Fille"> Fille
                </div>
                <center>
                    <div class="form-control" style="width: 50%; text-align:center; ">
                        <label for="">type</label>
                        <select name="type" id="" class="form-control">
                            <option value=""> choisir</option>
                            <option value="Interne">Interne</option>
                            <option value="Externe">Externe</option>
                        </select>
                    </div>
                </center>


                <div>
                    <center>
                        <button type="submit" class="btn btn-primary btn-lg" name="inscrire">Inscrire</button>
                        <span class="btn btn-danger btn-lg" id="btnFermer">Annuler</span>


                    </center>
                </div>
            </form>

        </div>
        <div>
        </div>
        <div class="titleAnnee">
            La liste des eleves de <?php foreach ($classe as $classe) : ?>
                <?= $classe['nom']; ?>
            <?php endforeach ?>

            <div>
              
  
           
                <a href="/Classe/coef/<?= $id; ?>">Coefficient</a>

            </div>
        </div>
        <i class="fa-sharp fa-solid fa-plus" id="btnAddE" style="position: absolute; right:20%; top:-5% ;font-size:xx-large;color:black; color:black"></i>

        <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">

                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th class="d-none d-xl-table-cell">Prenom</th>

                                <th class="d-none d-md-table-cell">type</th>
                                <th class="d-none d-xl-table-cell">numero</th>
                                <th>Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php foreach ($eleves as $eleves) : ?>

                                <tr>
                                    <td> <?= $eleves['nom'];  ?></td>
                                    <td> <?= $eleves['prenom']; ?></td>
                                    <td> <?= $eleves['type']; ?></td>
                                    <td> <?= $eleves['Numero']; ?></td>
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
<script>
    let btn = document.getElementById("btnAddE");
    let btnFermer = document.getElementById("btnFermer");
    let modal = document.querySelector(".modal");
    btn.addEventListener("click", () => {
        modal.style.display = "block";
    })
    btnFermer.addEventListener("click", () => {
        modal.style.display = "none";
    });
</script>