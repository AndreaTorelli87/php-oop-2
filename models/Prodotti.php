<?php

require_once __DIR__ . '/Traits.php';
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Gioco.php';
require_once __DIR__ . '/Cibo.php';


$guinzaglio = new prodotto('Guinzaglio', '9,99€', 'Prodotti', '<i class="fa-solid fa-dog"></i>', 'img/guinzaglio.jpeg');
$crocchette = new cibo('Crocchette', '5,49€', 'Cibo', '<i class="fa-solid fa-dog"></i>', 'img/crocchette.jpeg', '2Kg', 'Manzo, pollo e vitello');
$pallina = new gioco('Pallina', '3,99€', 'Gioco', '<i class="fa-solid fa-cat"></i>', 'img/pallina.jpeg', 'Palle', 'Gialla');



   