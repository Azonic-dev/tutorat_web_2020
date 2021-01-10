<?php
use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;

require "connexionBDD.php";
require_once '../vendor/autoload.php';
if (isset($_POST["inscriptionInputEmail"]) && isset($_POST["inscriptionInputPseudo"]) && isset($_POST["inscriptionInputMotDePasse"])){
    $email =$_POST["inscriptionInputEmail"];
    $pseudo = $_POST["inscriptionInputPseudo"];
    $motdepasse = $_POST["inscriptionInputMotDePasse"];

    //On mettra le code pour réaliser l'inscription ici
    //echo "email = ".$email.", pseudo = ".$pseudo.", motdepasse = ".$motdepasse;

    $utilisateurRepository = new UtilisateurRepository($base);
    if($utilisateurRepository->countUtilisateurByEmailOrPseudo($email,$pseudo) < 1 ){
        $utilisateur = new Utilisateur();
        $utilisateur->setEmail($email);
        $utilisateur->setMotdepasse(password_hash($motdepasse,PASSWORD_DEFAULT));
        $utilisateur->setPseudo($pseudo);
        if( $utilisateurRepository->addUtilisateur($utilisateur) ){
            header('Location: /');
        }else{
            header('Location: /page_inscription.php');
        }
    }else header('Location: /page_inscription.php');




}