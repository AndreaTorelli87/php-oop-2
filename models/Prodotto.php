<?php

require_once __DIR__ . '/Traits.php';

class prodotto
{
   public $nome;
   public $prezzo;
   public $categoria;
   public $icona;
   public $img;
   public function __construct($nome, $prezzo, $categoria, $icona, $img)
   {
      $this->nome = $nome;
      $this->prezzo = $prezzo;
      $this->categoria = $categoria;
      $this->icona = $icona;
      $this->img = $img;
   }

   function currency($string)
   {
      if (!str_contains($string, "€")) {
         throw new Exception('Devi inserire un prezzo in €uro');
      }
      return $string;
   }
}

