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
    <div class="container-fluid p-0">
        <center>
            <div class="titleAnnee">
                Gestion des disciplines
            </div>
        </center>



        <div class="container w-70  h-75 d-flex p-3 ">
        
            <div>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Choisir niveau</label>
                            <select name="" id="" class="form-control">
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Choisir classe</label>
                            <select name="" id="" class="form-control">
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Groupe Discipline</label>
                            <select name="" id="" class="form-control">
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Discipline</label>
                            <input type="text" class="form-control">

                        </div>
                        <div class="col-md-2 pt-4 ">
                            <button type="submit" class="btn btn-primary" class=" form-control ">Ajouter</button>
                        </div>
                    </div>

                    <div class="row">
                        <h1>Les disciplines de la classe de</h1>
                        <div class="col-md-12  p-5 align-items-center ">

                            <input class="form-check-input" type="checkbox"> Discipline 1
                            <br>

                            <input class="form-check-input" type="checkbox"> Discipline 2
                            <br>
                            <input class="form-check-input" type="checkbox"> Discipline 3
                            <br>
                            <input class="form-check-input" type="checkbox"> Discipline 4
                        </div>
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary w-35">Mettre à jour</button>
                            </div>

                        </div>
                    </div>


                </form>

            </div>

        </div>
    </div>
</main>