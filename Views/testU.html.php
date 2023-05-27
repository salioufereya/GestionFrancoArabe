<?php

header("Access-Control-Allow-Origin: http://127.0.0.1:5501");



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de form avec js</title>
    <link rel="stylesheet" href="awesome/css/all.min.css">
      <script src="/Views/js/script.js"></script>

    <style>
        *{
    box-sizing: border-box;
}
:root{
    --color-first:#1ec36dd9;
    --color-second:#f0f0f0;
    --color-white:#fff;
    --color-success:#2ecc71;
    --color-error:#e74c3c;
}
body{
    background: var(--color-first);
    font-family: "Open sabs" sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
    overflow: hidden;
}
.container{
    background: var(--color-white);
    border-radius: 5px;
    box-shadow: 0 2px 6px rgba(0,0,0,.5);
    width: 400px;
    max-width: 100%;
}
.header{
    background: #f7f7f7;
    border-bottom: 1px solid var(--color-second);
    padding: 20px 40px;
}
.header h2{
    margin: 0;
    text-align: center;
    font-style: italic;
}
.form{
    padding: 30px 40px;
}
.form-control{
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}
.form-control label{
    display: inline-block;
    margin-bottom: 5px;
}
.form-control input{
    border:  2px solid var(--color-second);
    border-radius: 4px;
    display: block;
    font-family: inherit;
    font-size: 14px;
    width: 100%;
    height: 40px;
    padding-left: 10px;
}
.form-control i{
    position: absolute;
    top: 33px;
    right: 10px;
    visibility: hidden;
}
.form-control small{
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;
}
.form button{
    background: var(--color-first);
    border: 2px solid var(--color-first);
    color: var(--color-white);
    display: block;
    font-family: inherit;
    border-radius: 4px;
    padding: 10px;
    font-size: 16px;
    width: 100%;
    cursor: pointer;
}
.form-control.success input{
    border-color: var(--color-success);
}
.form-control.error input{
    border-color: var(--color-error);
}
.form-control.success i.fa-check-circle{
    color: var(--color-success);
    visibility: visible;
}
.form-control.error i.fa-exclamation{
    color: var(--color-error);
    visibility: visible;
}
.form-control.error small{
    color: var(--color-error);
    visibility: visible;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Créer un compte</h2>
        </div>
        <form class="form" id="form">
            <div class="form-control ">
                <label for="">Nom d'utilisateur</label>
                <input type="text" id="username" placeholder="Ronasdev">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control ">
                <label for="">Email</label>
                <input type="email" id="email" placeholder="ronasdev@gmail.com">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="">Mot de passe</label>
                <input type="password" id="password" placeholder="Ronasdev">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="">Confirmation du mot de passe</label>
                <input type="password" id="password2" placeholder="Ronasdev">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <button type="submit"> <i class="fas fa-user-plus"></i> S'inscrire</button>
        </form>
    </div>
    <script>
        // La recuperation des elements 
const form = document.querySelector("#form");
const username = document.querySelector('#username');


// Evenements
form.addEventListener('submit',e=>{
    e.preventDefault();

    form_verify();
})

// Fonstions
function form_verify() {
    // Obtenir toutes les valeurs des inputs
    const userValue = username.value.trim();
   
    
    // Username verify
    if (userValue === "") {
        let message ="Username ne peut pas être vide";
        setError(username,message);
    }else if(!userValue.match(/^[a-zA-Z]/)){
        let message ="Username doit commencer par une lettre";
        setError(username,message)
    }else{
        let letterNum = userValue.length;
        if (letterNum < 3) {
            let message ="Username doit avoir au moins 3 caractères";
            setError(username,message)
        } else {
            setSuccess(username);
        }
    }

}

function setError(elem,message) {
    const formControl = elem.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message

    formControl.className = "form-control error";
}

function setSuccess(elem) {
    const formControl = elem.parentElement;
    formControl.className ='form-control success'
}


    </script>
</body>
</html>