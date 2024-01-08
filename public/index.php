<?php

require __DIR__ . '/../vendor/autoload.php';

// use App\Helpers\UIHelper;

use App\Models\Editeur;
use App\Models\LivreSpecialise;

// UIHelper::afficherMenu();
$livreSpecialise = new LivreSpecialise("nom Spécial", "auteur Spécial", "Année spéciale", "Roman");

$editeur= new Editeur("Nolan");

echo "Titre : " . $livreSpecialise->getNom() . "\n";
echo "Auteur : " . $livreSpecialise->getAuteur() . "\n";
echo "Date : " . $livreSpecialise->getDate() . "\n";
echo "Type : " . $livreSpecialise->getType() . "\n";
echo "Editeur : " . $editeur->getNom() . "\n";

echo "TEST Poly Livre : " . $livreSpecialise->polymorphisme() . "\n";
echo "TEST Poly Editeur : " . $editeur->polymorphisme();