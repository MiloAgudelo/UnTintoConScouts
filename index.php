<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Un Tinto Con Scouts</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
  <link rel="manifest" href="icon/site.webmanifest">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">


</head>

<body>
  <?php require_once('assets/header.php') ?>

  <div class="mainContainer">
    <div class="infoContainer row">
      <div class="rifaTitle col-lg-4">
        <h1>Rifa</h1>
      </div>
      <div class="rifaInfo col-lg-3">
        <h2>Premio</h2>
        <p align="justify">-1 Oso de Peluche con uniforme Scout. (Rogelio) <br>
          -1 Pañoleta Exclusiva del proyecto. <br>
          -2 Parches Exclusivos de Un Tinto Con Scouts. 🎙☕ <br>
          -Una mención honorífica en el siguiente episodio.</p>
        <div class="flordelisContainer">
          <img src="img/flordelisBrown.png" alt="Flor de Lis Café">
        </div>
        <div class="buttonContainer">
          <button onclick="window.location.href='lottery.php'">Participar</button>
        </div>
      </div>
      <div class="rifaTutorial col-lg-5">
        <div class="videoContainer">
        <iframe src="https://www.youtube.com/embed/ah5IdnJuZOY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen muted></iframe>
        </div>

        <h2>¿Cómo Funciona?</h2>

        <div class="instructionsContainer">
          <div class="textContainer">
            <div class="hContainer">
              <h3>1</h3>
            </div>
            <div class="pContainer">
              <p>Presiona el botón "Participar", y selecciona uno de los números disponibles.</p>
            </div>
          </div>

          <div class="textContainer">
            <div class="hContainer">
              <h3>2</h3>
            </div>
            <div class="pContainer">
              <p>Completa los datos de contacto, realiza la transferencia al QR y adjunta el comprobante.</p>
            </div>
          </div>

          <div class="textContainer">
            <div class="hContainer">
              <h3>3</h3>
            </div>
            <div class="pContainer">
              <p>¡Listo! Espera mientras nuestro equipo confirma tu pago y ya estás dentro del sorteo.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

<script src="js/loader.js"></script>
</body>

</html>