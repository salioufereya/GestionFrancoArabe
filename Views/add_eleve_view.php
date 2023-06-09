<style>
    .form-control small {
        visibility: hidden;
    }

    .form-control.success {
        color: green;
        visibility: visible;
    }

    .form-control.error {
        color: red;
        visibility: visible;
    }

    .form-control.error small {
        color: red;
        visibility: visible;
    }
</style>

<div class="container">
    <form class="row g-3" id="form" method="POST">
        <div class="text-center">
            <img src="/images/imagedefaut.png" class="rounded-circle shadow-4" style="width: 150px;" alt="Avatar" />

            <h2>Nouvel élève</h2>
        </div>

        <div class="col-md-6">
            <div class="form-control">
                <label for="firstName" class="form-label">Nom</label>
                <input type="text" class="form-control" id="firstName">
                <small>Message d'erreur</small>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-control">
                <label for="lastName" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="lastName">
                <small>Message d'erreur</small>
            </div>
        </div>

        <div class="col-6">
            <div class="form-control">
                <label for="inputAddress" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" placeholder="11-10-99" id="dateNaissance">
                <small>Message d'erreur</small>
            </div>

        </div>

        <div class="col-6">
            <div class="form-control">
                <label for="inputAddress" class="form-label">Lieu de naissance</label>
                <input type="text" class="form-control" placeholder="Labé Guinée" id="lieuNaissance">
                <small>Message d'erreur</small>
            </div>

        </div>

        <div class="col-6">
            <div class="form-control">
                <label for="inputAddress2" class="form-label">Numero</label>
                <input type="text" class="form-control" placeholder="+221000000000" id="numero">
                <small>Message d'erreur</small>
            </div>
        </div>

        <div class="col-6">
            <div>

            </div>
            <label for="inputAddress2" class="form-label">Sexe</label> <br>
            <input type="radio" id="subscribeNews1" name="subscribe" value="newsletter"> Garçon
            <input type="radio" id="subscribeNews2" name="subscribe" value="newsletter"> Fille
        </div>

        <div class="col-6">
            <label for="inputState" class="form-label">Niveau</label>
            <select id="select" class="form-select">

            </select>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Classe</label>
            <select id="selectClass" class="form-select">

            </select>
        </div>

        <div>
            <center><button type="submit" class="btn btn-primary btn-lg">Inscrire</button></center>
        </div>
    </form>
</div>


<script>
    let form = document.querySelector('#form');
    let firstName = document.querySelector('#firstName');
    let dateNaissance = document.querySelector('#dateNaissance');
    let lieuNaissance = document.querySelector('#lieuNaissance');
    let numero = document.querySelector('#numero');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        form_verify();
    });

    function form_verify() {
        const firstNameValue = firstName.value.trim();
        const lastNameValue = lastName.value.trim();
        const dateNaissanceValue = dateNaissance.value.trim();
        const lieuNaissanceValue = lieuNaissance.value.trim();
        const numeroValue = numero.value.trim();

        //nom
        if (firstNameValue === "") {
            let message = "Ce champ ne peut pas être vide";
            setError(firstName, message);
        } else if (!firstNameValue.match(/^[a-zA-Z]/)) {
            let message = "le nom doit commencer par une lettre";
            setError(firstName, message)
        } else
        if (firstNameValue.length < 3) {
            let message = "le nom doit avoir au moins 3 caractères";
            setError(firstName, message)
        } else

        {
            setSuccess(firstName);
        }
        //prenom

        if (lastNameValue === "") {
            let message = "Ce champ ne peut pas être vide";
            setError(lastName, message);
        } else if (!lastNameValue.match(/^[a-zA-Z]/)) {
            let message = "le prenom doit commencer par une lettre";
            setError(lastName, message)
        } else
        if (lastNameValue.length < 3) {
            let message = "le prenom doit avoir au moins 3 caractères";
            setError(lastName, message)
        } else {
            setSuccess(lastName);
        }
        //dateNaissance
        if (dateNaissanceValue === "") {
            let message = "Ce champ ne peut pas être vide";
            setError(dateNaissance, message);
        } else {
            setSuccess(dateNaissance);
        }

        //lieuNaissance
        if (lieuNaissanceValue === "") {
            let message = "Ce champ ne peut pas être vide";
            setError(lieuNaissance, message);
        } else {
            setSuccess(lieuNaissance);
        }
        //numero
        if (numeroValue === "") {
            let message = "Ce champ ne peut pas être vide";
            setError(numero, message);
        } else if (!numero_verify(numeroValue)) {
            let message = "Le numero ne contenir que des chiffres";
            setError(numero, message);
        } else {
            setSuccess(numero);
        }

    }

    function setError(elem, message) {
        const formControl = elem.parentElement;
        const small = formControl.querySelector('small');
        small.innerText = message;
        formControl.classList.add("error");
    }

    function setSuccess(elem) {
        const formControl = elem.parentElement;
        formControl.className = 'form-control success'
    }

    function numero_verify(numero) {
        /*
        * r_rona.22-t@gmail.com
            /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/
        */
        return /^\d+$/.test(numero);

    }
    var id = null;
    fetch("http://localhost:8000/Niveau/all")
        .then(response => response.json())
        .then(response => {
            let data = response;
            console.log(typeof(data));
            console.log(data);
            chargerSelect(data, select, "Selectionner un niveau");
            id = data['d_Niveau'];

        })
        .catch(error => alert("Erreur : " + error));


    let select = document.querySelector("#select");



    let selectClass = document.querySelector("#selectClass");

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
    //class

    function chargerSelection(classe, select, label = 'Selectionner') {
        select.innerHTML = '';
        const option = creatingElement('option');
        option.innerHTML = label;
        select.appendChild(option);
        classe.forEach(d => {
            const option = creatingElement('option');
            option.innerHTML = d.libelle;
            option.setAttribute('value', d.libelle);
            select.appendChild(option);
        });
    }


    select.addEventListener('change', function() {
        const id = this.selectedOptions[0].id
        console.log(id);
        fetch(`http://localhost:8000/Niveau/all/${id}`)
            .then(response => response.json())
            .then(response => {
                chargerSelection(response, selectClass, "Selectionner une classe");
            })
            .catch(error => alert("Erreur : " + error));

    })
</script>