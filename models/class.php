<?php

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
}

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

trait sfondo {
   public $sfondo;
}