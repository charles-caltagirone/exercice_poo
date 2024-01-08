<?php

namespace App\Models;

class Livre
{
    protected $nom;
    protected $auteur;
    protected $date;

    public function __construct($nom, $auteur, $date)
    {
        $this->nom = $nom;
        $this->auteur = $auteur;
        $this->date = $date;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getAuteur(){
        return $this->auteur;
    }
    public function getDate(){
        return $this->date;
    }
    public function setNom($nouveauNom){
        return $this->nom = $nouveauNom;
    }

}
