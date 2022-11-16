<?php

require_once "../pages/index.php";

class Voiture

{
    public int $prix;

    public string $date;

    public string $modele;

    public string $marque;

    public string $puissance;

    public int $année;

    public string $description;

    public string $motorisation;

    public string $image;


    public function __construct($prix, $date, $modele, $marque, $puissance, $année, $description, $motorisation, $image)

    {
        $this->prix = $prix;
        $this->date = $date;
        $this->modele = $modele;
        $this->marque = $marque;
        $this->puissance = $puissance;
        $this->annee = $année;
        $this->description = $description;
        $this->motorisation = $motorisation;
        $this->image = $image;
    }

    public function affichage()
    {
        '<p>' . $this->prix . '</p>';
        '<p>' . $this->date . '</p>';
        '<p>' . $this->modele . '</p>';
        '<p>' . $this->marque . '</p>';
        '<p>' . $this->puissance . '</p>';
        '<p>' . $this->annee . '</p>';
        '<p>' . $this->description . '</p>';
        '<p>' . $this->motorisation . '</p>';
        '<p>' . $this->image . '</p>';
    }
}
