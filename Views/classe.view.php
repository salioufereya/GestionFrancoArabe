
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
    <form class="row g-3" method="post" action="/Annee/create">
        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Classe</label>
         <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="      Ajouter une classe">
        </div>
        <div class="col-auto">
            <label class="visually-hidden">Classe</label>
            <input type="text" class="form-control" id="inputPassword2" placeholder=" saisir la classe" name="classe">
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


<main class="content">
    <div class="container-fluid p-0">
        <div class="titleAnnee">
            Liste des classes <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter</button>
          
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
                                <th>Classe</th>
                                <th class="d-none d-xl-table-cell">Effectif</th>
                                <!-- <th class="d-none d-xl-table-cell">Niveau</th> -->
                                <th>Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td> <a href="detailClass.html">@</a></td>
                                <td>CP</td>
                                <td class="d-none d-xl-table-cell">10000</td>
                                <!-- <td class="d-none d-xl-table-cell"> Elementaire</td> -->
                                <td><i class="fa-sharp fa-light fa-pen"></i>
                                    <i class="fa-sharp fa-light fa-pencil"></i>
                                    <i class="fa-sharp fa-light fa-pencil"></i>
                                </td>
                            </tr>
                            <tr>
                                <td> <a href="detailClass.html">@</a></td>
                                <td>CP</td>
                                <td class="d-none d-xl-table-cell">10000</td>
                                <!-- <td class="d-none d-xl-table-cell"> Elementaire</td> -->
                                <td><i class="fa-sharp fa-light fa-pen"></i>
                                    <i class="fa-sharp fa-light fa-pencil"></i>
                                    <i class="fa-sharp fa-light fa-pencil"></i>
                                </td>
                            </tr>
                            <tr>
                                <td> <a href="detailClass.html">@</a></td>
                                <td>CP</td>
                                <td class="d-none d-xl-table-cell">10000</td>
                                <!-- <td class="d-none d-xl-table-cell"> Elementaire</td> -->
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