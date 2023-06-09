<style>
    .vert {
        color: green;
    }

    .black {
        color: black;
    }

    .red-label {
        color: red;
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

    <center>
        <div class="titleAnnee">
            Gestion des disciplines
        </div>
    </center>



    <div class="container">


        <div class="row">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Choisir niveau</label>
                <select name="" id="select" class="form-select">
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Choisir classe</label>
                <select name="" id="selectClass" class="form-select">
                </select>
            </div>
        </div>
        <div class="row">
            <div style="position: absolute; background-color:slategrey; width:30%; text-align:center;
                padding:20px;display:none" id="modalNouveau">
                <center>

                    <label>Entrer le groupe de niveau</label>
                    <input type="text" placeholder="groupe de niveau" id="newGD" class=" form-control" style="width: 50%;" value="">
                    <span class="btn btn-primary" class=" form-control " id="ajoutGroupeNiveau"> Ajouter</span>
                    <span class="btn btn-danger" class=" form-control " id="fermermodalNouveau"> Fermer</span>

                </center>


            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Groupe Discipline</label>
                <select name="" id="selectGD" class="form-select">
                    <option value=""> Nouveau</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Discipline</label>
                <input type="text" class="form-control" id="discipline" value="">

            </div>
            <div class="col-md-2 pt-4 ">
                <button class="btn btn-primary" class=" form-select " id="addDiscipline">Ajouter</button>
            </div>
        </div>


        <h1>Les disciplines de la classe de <span id="spane" style="color:red"></span></h1>
        <h4 style="color: red;">Décocher une discipline pour la supprimer de la classe</h4>
        <h4 id="message"></h4>
        <div id="champInput" style="background-color: aliceblue; width:100%; height:300px;color:black;
                display:flex; justify-content:space-around">
        </div>
        <div>
            <span class="btn btn-primary w-35" id="update">Mettre à jour</span>
        </div>




    </div>

</main>

<script>
    var id = null;
    var id_classe = null;
    var id_Gd = null;
    var id_discipline = null;
    //chargement des niveau
    fetch("http://localhost:8000/Niveau/all")
        .then(response => response.json())
        .then(response => {
            let data = response;
            console.log(typeof(data));
            console.log(data);
            chargerSelect(data, select, "Selectionner un niveau");
            id = data['d_Niveau'];
        })
        .catch(error => alert("impossible de contacter le serveur : " + error));


    let select = document.querySelector("#select");
    let selectClass = document.querySelector("#selectClass");
    let champInput = document.querySelector("#champInput");
    let selectGD = document.querySelector("#selectGD");
    let modalNouveau = document.querySelector("#modalNouveau");
    let fermermodalNouveau = document.querySelector("#fermermodalNouveau");

    let selectNouveau = document.querySelector("#Nouveau");
    let ajoutGroupeNiveau = document.querySelector("#ajoutGroupeNiveau");
    let addDiscipline = document.querySelector("#addDiscipline");
    let spane = document.querySelector("#spane");
    let update = document.querySelector("#update");
    let message = document.querySelector("#message");

    function creatingElement(elName) {
        return document.createElement(elName);
    }

    function chargerSelect(donnee, select, label = 'Selectionner') {
        select.innerHTML = '';
        const option = creatingElement('option');
        option.innerHTML = label;
        select.appendChild(option);
        donnee.forEach(d => {
            const option = creatingElement('option');
            option.innerHTML = d.libelle;
            option.id = d.id_Niveau;
            option.setAttribute('value', d.libelle);
            select.appendChild(option);
        });
    }

    ////////////////////////////////groupeDiscipline
    function chargementGD(donnee, select, label = 'Selectionner') {
        select.innerHTML = '';
        const option = creatingElement('option');
        option.innerHTML = label;
        select.appendChild(option);
        donnee.forEach(d => {
            const option = creatingElement('option');
            option.innerHTML = d.libelleGD;
            option.id = d.id_groupeDiscipline;
            option.setAttribute('value', d.libelleGD);
            select.appendChild(option);
        });

    }

    function newChargementGD(donnee, select) {
        donnee.forEach(d => {
            const option = creatingElement('option');
            option.innerHTML = d.libelleGD;
            option.id = d.id_groupeDiscipline;
            option.setAttribute('value', d.libelleGD);
            select.appendChild(option);
        });

    }



    //chargement des groupe de disciplines


    const getGroupeDisciplines = async () => {
        try {
            const tbody = document.querySelector("#tbody");
            let tr = "";
            const res = await fetch(`http://localhost:8000/GroupeDiscipline/all`)
                .then(response => response.json())
                .then(response => {
                    chargementGD(response, selectGD, "Selectionner une groupe de niveau");
                })
                .catch(error => alert("Erreur : " + error));
        } catch (error) {
            alert("Erreur : " + error);
        }
    }
    getGroupeDisciplines();
    // chargement des clases

    function chargerSelection(classe, select, label = 'Selectionner') {
        select.innerHTML = '';
        const option = creatingElement('option');
        option.innerHTML = label;
        select.appendChild(option);
        classe.forEach(d => {
            const option = creatingElement('option');
            option.innerHTML = d.nom;
            option.id = d.id_classe;
            option.setAttribute('value', d.nom);
            select.appendChild(option);
        });
    }



    select.addEventListener('change', function() {
        const id = this.selectedOptions[0].id
        fetch(`http://localhost:8000/Classe/classeByNiveau/${id}`)
            .then(response => response.json())
            .then(response => {
                chargerSelection(response, selectClass, "Selectionner une classe");

            })
            .catch(error => alert("Erreur : " + error));
    })

    // ------chargement des disciplines

    function creerInput(input) {

        return document.createElement(input);
    }

    // function chargerInput(data, div) {
    //     div.innerHTML = "";
    //     data.forEach(d => {
    //         const chexbox = creerInput('input');
    //         li = creatingElement('label');
    //         chexbox.id = d.id_discipline;
    //         chexbox.setAttribute('type', 'checkbox');
    //         chexbox.setAttribute('checked', 'checked');
    //         chexbox.setAttribute('value', d.libelle_discipline);
    //         chexbox.setAttribute('id', d.id_discipline);
    //         li.innerHTML = d.libelle_discipline;
    //         li.appendChild(chexbox);
    //         div.appendChild(li);

    //     });
    // }

    function chargerInput(data, div) {
        div.innerHTML = "";

        data.forEach(d => {
            const checkbox = creerInput('input');
            const label = creatingElement('label');
            checkbox.id = d.id_discipline;
            checkbox.type = 'checkbox';
            checkbox.checked = true;
            checkbox.value = d.libelle_discipline;
            label.innerHTML = d.libelle_discipline + "(" + (d.code_discipline ? d.code_discipline : '') + ")";
            label.appendChild(checkbox);
            div.appendChild(label);


            checkbox.addEventListener('change', function() {
                if (!this.checked) {
                    label.classList.add('red-label');
                } else {
                    label.classList.remove('red-label');
                }
            });
        });




        // Ajouter un gestionnaire d'événements sur la checkbox
        checkbox.addEventListener('change', function() {
            if (!this.checked) {
                label.classList.add('red-label'); // Ajouter la classe CSS pour colorer en rouge
            } else {
                label.classList.remove('red-label'); // Supprimer la classe CSS pour revenir à la couleur par défaut
            }
        });



    }


    //fucntion getDisciplinesByclasse




    const getDisciplinesByclasse = async (id_classe) => {
        try {

            const res = await fetch(`http://localhost:8000/Discipline/DisciplineByClasse/${id_classe}`, {
                method: "GET",
                headers: {
                    "Content-Type": "application/json"
                }
            });
            const output = await res.json();

            if ((Object.keys(output).length === 0)) {
                champInput.innerHTML = " <div style='color:red'> il ny'a pas de discipline pour cette classe </div>";
            } else {
                chargerInput(output, champInput);
            }
        } catch (error) {
            console.log("error " + error)
        }
    }



    //finget disciplines

    selectClass.addEventListener('change', function() {
        id_classe = this.selectedOptions[0].id
        getDisciplinesByclasse(id_classe);
        spane.innerHTML = selectClass.value;

    })



    //------chargement de la modal nouveau


    selectGD.addEventListener('click', function() {

        id_Gd = this.selectedOptions[0].id
        if (selectGD.value === "Nouveau") {
            modalNouveau.style.display = 'block';
            fermermodalNouveau.addEventListener('click', function() {
                modalNouveau.style.display = 'none';
            });
            // ajoutGroupeNiveau.addEventListener('click', function() {
            //     let GD = newGD.value;
            //     selectGD.append(GD);
            //     modalNouveau.style.display = 'none';

            // });
        }


    })









    // creation des disciplines

    addDiscipline.addEventListener("click", async () => {
        try {
            let discipline = document.querySelector("#discipline").value;
            let id_GroupeDiscipline = id_Gd;
            let id_classeD = id_classe;
            if (discipline === "") {
                message.innerHTML = " <div style='color:red'> Le champ discipline est vide! </div>";
                return;
            }
            const data = {
                "discipline": discipline,
                "id_GroupeDiscipline": id_GroupeDiscipline,
                "id_classeD": id_classeD
            };
            const res = await fetch("http://localhost:8000/Discipline/insert", {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    "Content-type": "application/json,charset=utf-8",
                }
            });
            if (res.status === 200) {
                message.innerHTML = " <div style='color:green'> ajout de discipline avec succès! </div>";
                // Réinitialiser la valeur de l'input
                document.querySelector("#discipline").value = "";
            } else {
                message.innerHTML = " <div style='color:red'> ajout de discipline n'a pas été ajouté! </div>";
            }
            selectClass.dispatchEvent(new CustomEvent('change', {
                detail: selectClass.value
            }))
            const output = await res.json();
            getDisciplinesByclasse(id_classe);

        } catch (error) {
            console.log("error " + error)
        }
    });

    // creation des groupe de disciplines

    ajoutGroupeNiveau.addEventListener("click", async () => {
        try {
            let gdDiscipline = document.querySelector("#newGD").value;
            const donne = {
                "gdDiscipline": gdDiscipline
            };
            const res = await fetch("http://localhost:8000/GroupeDiscipline/insert", {
                method: "POST",
                body: JSON.stringify(donne),
                headers: {
                    "Content-type": "application/json,charset=utf-8",
                }
            });
            modalNouveau.style.display = 'none';
            getGroupeDisciplines();
            selectGD.dispatchEvent(new CustomEvent('change', {
                detail: gdDiscipline
            }))

        } catch (error) {
            console.log("error " + error)
        }
    });
    //

    update.addEventListener("click", () => {
        //   console.log("hello");

        function getInputsNonChecked() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            const Ids = [];

            checkboxes.forEach(checkbox => {
                if (!checkbox.checked) {
                    Ids.push(checkbox.id);
                }
            });
            return Ids;
        }
        const uncheckedIds = getInputsNonChecked();
        // console.log(uncheckedIds);

        try {
            let id_discipline = uncheckedIds;
            id_classeD = id_classe;
            const data = {
                "id_discipline": id_discipline,
                "id_classeD": id_classeD
            };

            
            const rest = fetch("http://localhost:8000/Discipline/delete", {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    "Content-type": "application/json,charset=utf-8",
                }
            });
            selectClass.dispatchEvent(new CustomEvent('change', {
                detail: selectClass.value
            }))
            gdDiscipline.innerHTML = "";
            const output = rest.json();
            //  getDisciplinesByclasse(id_classe);
        } catch (error) {
            console.log("error " + error)
        }


    })
</script>