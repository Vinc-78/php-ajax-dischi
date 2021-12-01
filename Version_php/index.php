<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    
<?php include "stampDiscoSingolo.php" ?>

<div class="container-fluid bg-dark">
    <div class="nav"></div>

    <div class="container py-5">
      <!-- Barra di ricerca -->
      
      <?php include "barraDiRicerca.php"?>

      <div class="row row-cols-5 g-4 pt-3">

        <?php  
        foreach ($disco as $album)

        /* la funzione che stampa i singoli dischi */
         
         stampaDisco($album); 

           ?>
      
    </div>
    
   
  </div>


    
</body>
</html>