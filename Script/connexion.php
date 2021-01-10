<?php require "connexionBDD.php";
if (isset($_POST["connexionInputPseudo"]) && isset($_POST["connexionInputMotDePasse"])) {

    $pseudo = $_POST["connexionInputPseudo"];
    $motdepasse = $_POST["connexionInputMotDePasse"];

    echo "pseudo = ".$pseudo.", motdepasse = ".$motdepasse;
}