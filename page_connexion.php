<?php
require "Script/header.php";
?>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="space">
            <h1 style="margin-left: 10vw; margin-bottom: 5vh"><strong>Inscription</strong></h1>
            <div class="form_space">
                <form action="Script/connexion.php" method="post">
                    <div class="mb-6">
                        <label for="connexionInputPseudo" class="form-label"><b>Votre pseudo :</b></label>
                        <input type="text" class="form-control" id="connexionInputPseudo" name="connexionInputPseudo">
                    </div>
                    <div class="mb-6">
                        <label for="connexionInputMotDePasse" class="form-label"><b>Votre mot de passe :</b></label>
                        <input type="password" class="form-control" id="connexionInputMotDePasse" name="connexionInputMotDePasse">
                    </div>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                    <b>OU </b><a href="page_inscription.php"><button type="button" class="btn btn-outline-success">S'inscrire</button></a>
                </form>
            </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>