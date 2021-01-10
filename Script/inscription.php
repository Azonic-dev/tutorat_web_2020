<?php
if (isset($_POST["inscriptionInputEmail"]) && isset($_POST["inscriptionInputPseudo"]) && isset($_POST["inscriptionInputMotDePasse"])){
    $email =$_POST["inscriptionInputEmail"];
    $pseudo = $_POST["inscriptionInputPseudo"];
    $motdepasse = $_POST["inscriptionInputMotDePasse"];

    echo "email = ".$email.", pseudo = ".$pseudo.", motdepasse = ".$motdepasse;
}