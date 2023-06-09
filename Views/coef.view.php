<!---->
<style>
    .vert {
        color: green;
    }

    .black {
        color: black;
    }

    .delete:hover {
        color: red;
        font-size: medium;
        cursor: pointer;
    }

    .idClasse {
        display: none;
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
    <div class="container-fluid p-0 text-center">
        <span id="message"></span>
        <div class="titleAnnee">

            <a href="/Classe/liste/<?= $classe['id_classe']; ?>  "> <?= $classe['nom']   ?></a>

        </div>
        <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Discipline</th>
                                <th>Ressource</th>
                                <th>Examen</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($discipline as $key) :  ?>

                                <tr class="tr-ponderation">
                                    <td> <?= $key['libelle_discipline']; ?></td>
                                    <td> <input type="number" value="<?= $key['ressource'] ?>" id="ressource-<?= $key['id_discipline']; ?>" dataId="
                                    <?= $key['id_discipline'] ?>">
                                    </td>
                                    <td> <input type="number" value="<?= $key['examen']; ?>" id="examen-<?= $key['id_discipline'] ?>" dataId="
                                    <?= $key['id_discipline']; ?>"> </td>
                                    <td class="idClasse"> <input type="text" value="  <?= $key['id_classe']; ?> "> </td>
                                    <td style="display: none;"> <input type="text" value="<?= $key['id_discipline'] ?> "> </td>
                                    <td> <span class="delete" id="delete"> x </span></td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <center>
                <button class="btn btn-primary" id="miseAjour">Mettre à jour</button>
            </center>
        </div>
    </div>
</main>


<script>
    let miseAjour = document.getElementById("miseAjour");
    let message = document.getElementById("message");
    let remove = document.querySelectorAll('.delete');
    //event 

    miseAjour.addEventListener("click", async () => {
        let trsPonderation = document.querySelectorAll(".tr-ponderation");
        let ponderations = []
        trsPonderation.forEach(tr => {
            let inputRessource = tr.childNodes[3].childNodes[1];
            let inputExamen = tr.childNodes[5].childNodes[1];
            let idClasse = tr.childNodes[7].childNodes[1];

            ponderations.push({
                "id_discipline": inputRessource.getAttribute("dataId"),
                "ressource": inputRessource.value,
                "examen": inputExamen.value,
                "classe": idClasse.value
            })
        });
        postData(`http://localhost:8000/Classe/update`, {
            data: ponderations
        }).then((data) => {
            console.log(data); // JSON data parsed by `data.json()` call


        });
        /* function getRessource() {
            let ressource = document.querySelectorAll("input[dataId='1']");
            const Res = [];
            ressource.forEach(res => {

                Res.push(res.value);
            });
            return Res;
        }


        function getExamen() {
            let examen = document.querySelectorAll("input[dataId='2']");
            const Exam = [];
            examen.forEach(exa => {
                Exam.push(exa.value);
            });
            return Exam;
        }

        function getId() {
            let examen = document.querySelectorAll("input[dataId='2']");
            const Exam = [];
            examen.forEach(exa => {

                Exam.push(exa.id);
            });
            return Exam;
        }

     try {
             
        //    console.log(data['ressources']);
            const res = await fetch("http://localhost:8000/Classe/update", {
                method: "POST",
                body: JSON.stringify(ponderations),
                headers: {
                    "Content-type": "application/json,charset=utf-8",
                }
            });
            if (res.status === 200) {
                message.innerHTML = " <div style='color:green'> Mise à jour avec succès! </div>";
                // Réinitialiser la valeur de l'input
                      console.log(res);
            } else {
                message.innerHTML = " <div style='color:red'> le mise à jour n'as pas été effectué </div>";
            }
            selectClass.dispatchEvent(new CustomEvent('change', {
                detail: selectClass.value
            }))

        } catch (error) {
            console.log("error " + error)
        }

*/


    })

    async function postData(url = "", data = {}, successMessage = "Modification réussie", errorMessage = " error") {
        // Default options are marked with *
        try {

            const response = await fetch(url, {
                method: "POST",
                mode: "cors",
                cache: "no-cache",
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",

                },
                redirect: "follow",
                referrerPolicy: "no-referrer",
                body: JSON.stringify(data),
            });
            if (response.ok) {
                if (successMessage) {
                    message.innerHTML = ` <div style='color:green; font-size: x-large;'> ${successMessage} </div> `;
                    setTimeout(function() {
                        message.innerHTML = '';
                    }, 5000);
                }
                return response.json();
            } else {
                message.innerHTML = ` <div style='color:red;'> ${errorMessage} </div> `;
                setTimeout(function() {
                    message.innerHTML = '';
                }, 5000);
            }

        } catch (error) {

            if (errorMessage) {
                console.error(errorMessage);
            }
            console.error(error);
        }
    }


    async function postDataSup(url = "", data = {}, successMessage = "Suppression réussie", errorMessage = " error") {
        // Default options are marked with *
        try {

            const response = await fetch(url, {
                method: "DELETE",
                mode: "cors",
                cache: "no-cache",
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",

                },
                redirect: "follow",
                referrerPolicy: "no-referrer",
                body: JSON.stringify(data),
            });
            if (response.ok) {
                if (successMessage) {
                    message.innerHTML = ` <div style='color:green; font-size: x-large;'> ${successMessage} </div> `;
                    setTimeout(function() {
                        message.innerHTML = '';
                    }, 5000);
                }
                return response.json();
            } else {
                message.innerHTML = ` <div style='color:red;'> ${errorMessage} </div> `;
                setTimeout(function() {
                    message.innerHTML = '';
                }, 5000);
            }

        } catch (error) {

            if (errorMessage) {
                console.error(errorMessage);
            }
            console.error(error);
        }
    }











    remove.forEach(e => {
        e.addEventListener('click', () => {

            let classe_id = e.parentElement.parentElement.childNodes[7].childNodes[1].value;
            let discip_id = e.parentElement.parentElement.childNodes[9].childNodes[1].value;
            console.log(classe_id);
            console.log(discip_id);



            const datas = {
                "id_discipline": discip_id,
                "id_classeD": classe_id,
            };


            postDataSup(`http://localhost:8000/Discipline/delete1`, {
                data: datas
            }).then((data) => {
                console.log(data); // JSON data parsed by `data.json()` call


            });

            location.load();
        })
    });
</script>