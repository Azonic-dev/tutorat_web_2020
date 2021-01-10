<?php
if (isset($_POST["connexionInputPseudo"]) && isset($_POST["connexionInputMotDePasse"])) {
    $pseudo = $_POST["connexionInputPseudo"];
    $motdepasse = $_POST["connexionInputMotDePasse"];

    //On mettra le code pour réaliser l'inscription ici
    echo "pseudo = ".$pseudo.", motdepasse = ".$motdepasse;
}