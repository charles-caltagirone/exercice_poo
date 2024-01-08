<?php

namespace App\Models;

use App\Interfaces\Recherchable;

class Editeur implements Recherchable
{
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function polymorphisme()
    {
        return 20;
    }
}
