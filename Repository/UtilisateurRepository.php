<?php


namespace App\Repository;


use PDO;

class UtilisateurRepository
{
    private $base;

    public function __construct(PDO $base)
    {
        $this->base = $base;
    }
}