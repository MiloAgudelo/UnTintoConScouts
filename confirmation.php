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
  <link rel="stylesheet" href="css/confirmation.css">


</head>

<body>
  <?php require_once('assets/header.php');
    $cupNumber = $_GET['cupNumber'];
  ?>

  <div class="mainContainer">
    <div class="infoContainer row">
      <div class="rifaTitle col-lg-4">
        <h1>Gracias!</h1>
      </div>
      <div class="rifaInfo col-lg-3">
        <h2>Un Mensaje del Team</h2>
        <p align='justify'>El equipo de Un Tinto Con Scouts te agradece por aportar al desarrollo del proyecto, te deseamos mucha suerte y esperamos que "Rogelio" quede en buenas manos, también recuerda que con nuestra pañoleta vas a poder portar la esencia cafetera y seguir contribuyendo a mantener un espacio de difusión para todos los jóvenes Scout.</p>
        <div class="flordelisContainer">
          <img src="img/flordelisBrown.png" alt="Flor de Lis Café">
        </div>
      </div>
      <div class="rifaTutorial col-lg-5">
          <div class="cupContainer">
            <div class="cupStroke">
              <div class="cupCoffee">
                <p><?php echo $cupNumber; ?></p>
              </div>
            </div>
          </div>

        <h2>Esta es tu taza de Tinto</h2>

        <div class="instructionsContainer">
          <div class="textContainer">
            <div class="hContainer">
              <h3>1</h3>
            </div>
            <div class="pContainer">
              <p>Vamos a conocer la taza ganadora el Viernes 17 de Mayo, a las 23:00 hora Colombia.</p>
            </div>
          </div>

          <div class="textContainer">
            <div class="hContainer">
              <h3>2</h3>
            </div>
            <div class="pContainer">
              <p>Si tu taza coincide con las dos últimas cifras de la lotería de Risaralda... ¡Tenemos una sorpresa para ti!</p>
            </div>
          </div>

          <div class="textContainer">
            <div class="hContainer">
              <h3>3</h3>
            </div>
            <div class="pContainer">
              <p>Nos pondremos en contacto contigo para gestionar la entrega a cualquier parte del país.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

<script src="js/loader.js"></script>
</body>

</html>