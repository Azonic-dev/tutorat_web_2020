<?php
if (isset($_POST["connexionInputPseudo"]) && isset($_POST["connexionInputMotDePasse"])) {
    $pseudo = $_POST["connexionInputPseudo"];
    $motdepasse = $_POST["connexionInputMotDePasse"];

    //On mettra le code pour réaliser la connexion ici
    echo "pseudo = ".$pseudo.", motdepasse = ".$motdepasse;
}