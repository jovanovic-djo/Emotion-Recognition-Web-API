<?php

Class Auto{
    private $marka;
    private $godiste;
    private $proizvodjac;

    public function __construct($marka, $godiste, $proizvodjac){
        $this->marka=$marka;
        $this->godiste=$godiste;
        $this->proizvodjac=$proizvodjac;
    }

    public function get_marka(){
        return $this->marka;
    }
    public function get_godiste(){
        return $this->godiste;
    }
    public function get_proizvodjac(){
        return $this->proizvodjac;
    }

}

?>