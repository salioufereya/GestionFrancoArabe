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
    <form class="row g-3" method="post" action="http://localhost:8000/Annee/create">
        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Email</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="      Ajouter une année scolaire">
        </div>
        <div class="col-auto">
            <label class="visually-hidden">Année scolaire</label>
            <input type="text" class="form-control" id="inputPassword2" placeholder=" saisir l'année sous forme XXXX-YYYY" name="libelle">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" name="send">Ajouter</button>
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
            Liste des années d'entrées scolaire <br>
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
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($annee as $annees) : ?>
                                <tr>
                                    <td> <?= $annees['libelle'] ?></td>
                                    <td class="<?php echo $annees['status'] === 1 ? 'vert' : 'black'; ?>">
                                        <?php echo $annees['status']; ?>
                                    </td>
                                    <td>
                                        <a href="http://localhost:8000/Annee/delete/<?= $annees['id_AnneeScolaire']; ?>">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </a>
                                        <a href="http://localhost:8000/Annee/edit/<?= $annees['id_AnneeScolaire']; ?>">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <a href="http://localhost:8000/Annee/activer/<?= $annees['id_AnneeScolaire']; ?>">
                                            <i class="fa-brands fa-autoprefixer"></i>
                                        </a>
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
<script src="js/script.js">

</script>