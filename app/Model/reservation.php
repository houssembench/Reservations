<?php
class reservation
{
    private $idres;
    private $cid;
    private $ido;
    private $status;
    private $dateres;
    private $dated;
    private $datef;

    public function reservationconstruct($dated, $datef, $ido, $cid)
    {
        $this->dated = $dated;
        $this->datef = $datef;
        $this->ido = $ido;
        $this->cid = $cid;
    }

    public function getIdres()
    {
        return $this->idres;
    }

    public function setIdres($idres)
    {
        $this->idres = $idres;
    }

    public function getCid()
    {
        return $this->cid;
    }

    public function setCid($cid)
    {
        $this->cid = $cid;
    }
    public function getIdo()
    {
        return $this->ido;
    }

    public function setIdo($ido)
    {
        $this->ido = $ido;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = strtoupper($status);
    }

    public function getdateres()
    {
        return $this->dateres;
    }

    public function setdateres($dateres)
    {
        $this->dateres = $dateres;
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

}