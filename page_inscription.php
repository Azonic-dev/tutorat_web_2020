<?php
require "Script/header.php";
?>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="space">
            <h1 style="margin-left: 10vw; margin-bottom: 5vh"><strong>Inscription</strong></h1>
            <div class="form_space">
                <form action="Script/inscription.php" method="post">
                    <div class="mb-6">
                        <label for="inscriptionInputEmail" class="form-label"><b>Votre email :</b></label>
                        <input type="email" class="form-control" id="inscriptionInputEmail" name="inscriptionInputEmail" required>
                    </div>
                    <div class="mb-6">
                        <label for="inscriptionInputPseudo" class="form-label"><b>Votre pseudo :</b></label>
                        <input type="text" class="form-control" id="inscriptionInputPseudo" name="inscriptionInputPseudo" required>
                    </div>
                    <div class="mb-6">
                        <label for="inscriptionInputMotDePasse" class="form-label"><b>Votre mot de passe :</b></label>
                        <input type="password" class="form-control" id="inscriptionInputMotDePasse" name="inscriptionInputMotDePasse" required>
                    </div>
                    <button type="submit" class="btn btn-success">S'inscrire</button>
                    <b>OU </b><a href="page_connexion.php"><button type="button" class="btn btn-outline-primary">Se connecter</button></a>
                </form>
            </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>
