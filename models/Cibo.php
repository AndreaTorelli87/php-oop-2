<?php

require_once __DIR__ . '/Traits.php';


class cibo extends prodotto
{
   use sfondo;
   public $peso;
   public $gusto;
   public function __construct($nome, $prezzo, $categoria, $icona, $img, $peso, $gusto)
   {
      parent::__construct($nome, $prezzo, $categoria, $icona, $img);
      $this->peso = $peso;
      $this->gusto = $gusto;
      $this->sfondo = "red";
   }
}