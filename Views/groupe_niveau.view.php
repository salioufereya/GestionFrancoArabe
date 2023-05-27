
<!---->
<style>
    .vert {
        color: green;
    }

    .black {
        color: black;
    }
</style>
<br>
<div class="formALy">
    <form class="row g-3" method="post" action="/GroupeNiveau/create">
        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Groupe de niveau</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="      Ajouter une groupe de niveau">
        </div>
        <div class="col-auto">
            <label class="visually-hidden">Groupe de Niveau</label>
            <input type="text" class="form-control" id="inputPassword2" placeholder=" saisir le groupe de niveau" name="libelle">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" name="ajouter">Ajouter</button>
        </div>
    </form>
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
<!---->
            <main class="content">
                <div class="container-fluid p-0">
                    <div class="titleAnnee">
                        Liste des groupes niveau <br>

                       
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
           