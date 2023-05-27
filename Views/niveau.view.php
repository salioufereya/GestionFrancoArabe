<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal" id="modal" aria-labelledby>
    <div class="modal-dialog">
        <div class="modal-content">
            <h2>Ajout niveau</h2>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="/Niveau/create">
                    <div class="row-auto">
                        <label class="">Niveau</label>
                        <input type="text" class="form-control" id="inputPassword2" placeholder=" saisir le niveau" name="niveau">
                    </div>
                    <div class="row-auto">
                        <label class="">Groupe de niveau</label>
                        <select name="selectedValue" class="form-control">
                            <option value="default">Choisir</option>
                            <?php foreach ($GroupeNiveau as $value) : ?>
                                <option value="<?= $value['id_groupeNiveau']; ?>"><?= $value['libelle']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-4" name="ajouter">Ajouter</button>
                        <button class="btn btn-danger mb-4" id="fermer">Fermer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>












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


<main class="content">
    <div class="container-fluid p-0">
        <div class="titleAnnee">
            Liste des niveaux scolaire <br>
            <button type="button" class="btn btn-primary" id="ajout" data-bs-whatever="@mdo">Ajouter</button>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Niveau</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($niveaux as $niveaux): ?>
                                        <tr>
                                           
                                            <td> <?= $niveaux['libelle'] ?></td>
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
    let ajout = document.querySelector("#ajout");
    let modal = document.querySelector("#modal");
    let fermer = document.querySelector("#fermer");
    console.log(fermer);

    ajout.addEventListener('click', () => {
        modal.style.display = "block";
    })

    fermer.addEventListener('click', () => {
        modal.style.display = "none";
        modal.style.transition = "0.4";

    })
</script>