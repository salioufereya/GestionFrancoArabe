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
    <div class="container-fluid p-0" style="position: relative;">

        <div style="position: absolute; right:-3%; top:-10% ;font-size:xx-large;color:black">
            <i class="fa-sharp fa-solid fa-plus" id="btnAdd"></i>
            <form action="/Classe/create/<?php $id = explode('/', $_SERVER['REQUEST_URI']);
                                        echo  $id[3];
                                        
                                        
                                        
                                        
                                        ?>" method="POST" style="  transform: translateY(-550%);" id="frm">
                <div class="col d-flex">
                    <input type="text" name="libelle" class="form-control" />
                    <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
                    <span class="btn btn-danger" id="btnClose"> Fermer</span>
                </div>
            </form>
        </div>
        <div class="titleAnnee">
            Les classes de <?php foreach ($groupe as $groupe):?>
              <?= $groupe['libelle'] ?>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Details</th>
                                <th>Classe</th>
                                <th>Actions</th>
                            </tr>

                        </thead>
                        <tbody>

                            <?php foreach ($classes as $classe) :
                            ?>
                                <tr>
                                    <td> <a href="/Classe/liste/<?= $classe['id_classe']  ?>"> <i class="fa-solid fa-circle-info"></i></a></td>
                                    <td> <?= $classe['nom']; ?> </td>
                                    <td>
                                        <i class="fa-regular fa-trash-can"></i>
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </td>
                                </tr>
                            <?php 
                          
                        
                        endforeach; ?>
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