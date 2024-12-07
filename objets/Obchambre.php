<?php
class Obchambre {
    public $nom ;
    public $numero;
    public $prix;
    public $lit;
    public $description;
    public $wifi;
    public $stars;
    public $img ;

    public function __construct ($nom, $numero, $prix, $lit, $description, $wifi, $stars, $img) {
        $this->nom = $nom;
        $this->numero = $numero;
        $this->prix = $prix;
        $this->lit = $lit;
        $this->description = $description;
        $this->wifi = $wifi;
        $this->stars = $stars;
        $this->img = $img;
    }
   

}