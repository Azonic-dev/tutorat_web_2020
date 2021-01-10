<?php
if (isset($_POST["inscriptionInputEmail"]) && isset($_POST["inscriptionInputPseudo"]) && isset($_POST["inscriptionInputMotDePasse"])){
    $email =$_POST["inscriptionInputEmail"];
    $pseudo = $_POST["inscriptionInputPseudo"];
    $motdepasse = $_POST["inscriptionInputMotDePasse"];

    //On mettra le code pour réaliser l'inscription ici
    echo "email = ".$email.", pseudo = ".$pseudo.", motdepasse = ".$motdepasse;
}