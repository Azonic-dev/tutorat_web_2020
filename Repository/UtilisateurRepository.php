<?php


namespace App\Repository;


use App\Entity\Utilisateur;
use PDO;

class UtilisateurRepository
{
    private $base;

    public function __construct(PDO $base)
    {
        $this->base = $base;
    }

    public function addUtilisateur($utilisateur){
        if($utilisateur instanceof Utilisateur){


            $querryBuilder = $this->base->prepare("INSERT INTO utilisateur (email, pseudo, motdepasse) values (:email,:pseudo,:motdepasse);");
            $querryBuilder->bindValue(":email",$utilisateur->getEmail());
            $querryBuilder->bindValue(":pseudo",$utilisateur->getPseudo());
            $querryBuilder->bindValue(":motdepasse",$utilisateur->getMotdepasse());

            return $querryBuilder->execute();
        }
        return false;
    }
    public function countUtilisateurByEmailOrPseudo($email,$pseudo){
        $querryBuilder = $this->base->prepare("SELECT COUNT(*) from utilisateur where email=:email OR pseudo=:pseudo");
        $querryBuilder->bindValue(":email",$email);
        $querryBuilder->bindValue(":pseudo",$pseudo);
        $reponse = $querryBuilder->execute();
        if ($reponse){
            return $querryBuilder->fetch();
        }else{
            return false;
        }
    }
}