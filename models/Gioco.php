<?php

require_once __DIR__ . '/Traits.php';

class gioco extends prodotto
{
   use sfondo;
   public $tipo;
   public $colore;
   public function __construct($nome, $prezzo, $categoria, $icona, $img, $tipo, $colore)
   {
      parent::__construct($nome, $prezzo, $categoria, $icona, $img);
      $this->tipo = $tipo;
      $this->colore = $colore;
      $this->sfondo = "yellow";
   }
}