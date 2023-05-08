<?php require_once __DIR__ . '/models/prodotti.php';

function currency($string)
{
   if (!str_contains($string, "€")) {
      throw new Exception('Devi inserire un prezzo in €uro');
   }
   return $string;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="style/style.css">
   <title>Animal Shop</title>
</head>
<?php ?>

<body>
   <h1 class='display-1 fw-bold text-center'>Animal Shop</h1>
   <div class="container py-5">
      <div class="d-flex pt-5">
         <div class="card position-relative p-2 mx-3">
            <img src="<?php echo $guinzaglio->img ?>">
            <div class="card-body">
               <h5 class="card-title">
                  <?php echo $guinzaglio->nome ?>
               </h5>
               <p>Categoria:
                  <?php echo $guinzaglio->categoria ?>
               </p>
               <p class="card-text">Prezzo:
                  <?php try {
                     echo currency($guinzaglio->prezzo);
                  } catch (Exception $e) {
                     echo 'Eccezione: ' . $e->getMessage();
                  } ?>
               </p>
               <?php echo $guinzaglio->icona ?>
            </div>
         </div>
         <div class="card position-relative p-2 mx-3" style="background-color: <?php echo $crocchette->sfondo ?>;">
            <img src="<?php echo $crocchette->img ?>">
            <div class="card-body">
               <h5 class="card-title">
                  <?php echo $crocchette->nome ?>
               </h5>
               <p>Categoria:
                  <?php echo $crocchette->categoria ?>
               </p>
               <p>Prezzo:
                  <?php echo $crocchette->prezzo ?>
               </p>
               <p>Peso:
                  <?php echo $crocchette->peso ?>
               </p>
               <p>Gusto:
                  <?php echo $crocchette->gusto ?>
               </p>
               <?php echo $crocchette->icona ?>
            </div>
         </div>
         <div class="card position-relative p-2 mx-3" style="background-color: <?php echo $pallina->sfondo ?>;">
            <img src="<?php echo $pallina->img ?>">
            <div class="card-body">
               <h5 class="card-title">
                  <?php echo $pallina->nome ?>
               </h5>
               <p>Categoria:
                  <?php echo $pallina->categoria ?>
               </p>
               <p>Prezzo:
                  <?php echo $pallina->prezzo ?>
               </p>
               <p>Tipo:
                  <?php echo $pallina->tipo ?>
               </p>
               <p>Colore:
                  <?php echo $pallina->colore ?>
               </p>
               <?php echo $pallina->icona ?>
            </div>
         </div>
      </div>
   </div>
</body>

</html>