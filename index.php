<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="https://kit.fontawesome.com/80a8b5f4b8.js" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
      <!-- VERSIONE BASE -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/it.js" integrity="sha256-D8y560ZGsKY1LoAajKkQCG7y0Vkye361MH4yFv2K5kk=" crossorigin="anonymous"></script> -->
      <!-- VERSIONE BASE -->
      <!-- OWL CAROUSEL -->
    <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
    <!-- <script src="owlcarousel/owl.carousel.min.js"></script> -->
      <!-- OWL CAROUSEL -->
    <!-- google font -->
    <!-- favicon -->
  </head>
  <body>

    <!-- <canvas id="canvas">Canvas is not supported in your browser.</canvas>
    <canvas id="canvas2">Canvas is not supported in your browser.</canvas> -->

    <?php

    // Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.

      $password = $_GET["pass"];

      if (!empty($password)) {
        if ($password == Boolean) {
          echo "<canvas id='canvas'>Canvas is not supported in your browser.</canvas>";
          echo "<canvas id='canvas2'>Canvas is not supported in your browser.</canvas>";
          echo "<span class='testo verde'>";
          echo $password . " è la password corretta!";
          echo "</span>";
        } else {
          echo "<canvas id='canvas'>Canvas is not supported in your browser.</canvas>";
          echo "<canvas id='canvas2'>Canvas is not supported in your browser.</canvas>";
          echo "<span class='testo rosso'>";
          echo $password . " non è la password corretta!";
          echo "</span>";
        }
      }



    ?>


    <script src="js/main.js" charset="utf-8"></script>
  </body>
</html>
