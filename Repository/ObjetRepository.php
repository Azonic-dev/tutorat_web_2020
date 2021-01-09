<?php


namespace App\Repository;


use PDO;

class ObjetRepository
{
    private $base;

    public function __construct(PDO $base)
    {
        $this->base = $base;
    }
}