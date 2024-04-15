<?php

class offre  
{
    private $dated;
    private $datef;
    private $categorie;
    private $titre;
    private $des;
    private $prix;
    private $idof;
    private $photo;

    public function offreconstruct($dated, $datef, $categorie, $titre, $des, $prix) {
        $this->dated = $dated;
        $this->datef = $datef;
        $this->categorie = $categorie;
        $this->titre = $titre;
        $this->des = $des;
        $this->prix = $prix;
    }

    public function getdated()
    {
        return $this->dated;
    }

    public function setdated($dated)
    {
        $this->dated = $dated;
    }

    public function getdatef()
    {
        return $this->datef;
    }

    public function setdatef($datef)
    {
        $this->datef = $datef;
    }

    public function getcategorie()
    {
        return $this->categorie;
    }

    public function setcategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function gettitre()
    {
        return $this->titre;
    }

    public function settitre($titre)
    {
        $this->titre = $titre;
    }

    public function getdes()
    {
        return $this->des;
    }

    public function setdes($des)
    {
        $this->des = $des;
    }

    public function getprix()
    {
        return $this->prix;
    }

    public function setprix($prix)
    {
        $this->prix = $prix;
    }

    public function getido()
    {
        return $this->idof;
    }

    public function setido($idof)
    {
        $this->idof = $idof;
    }

    

    public function getphoto()
    {
        return $this->photo;
    }

    public function setphoto($photo)
    {
        $this->photo = $photo;
    }

    
}