<?php

namespace App\Models;

use App\Interfaces\Recherchable;

class LivreSpecialise extends Livre implements Recherchable {
    private $type;

    public function __construct($nom, $auteur, $date, $type) {
        parent:: __construct($nom, $auteur, $date);
        $this->type = $type;
    }
    public function getType(){
        return $this->type;
    }
    public function polymorphisme(){
        return $this->nom;
    }

}