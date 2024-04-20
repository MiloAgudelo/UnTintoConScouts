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
  <link rel="stylesheet" href="css/contact.css">

 
</head>
<body>
  <?php
    $cupNumber = "";
    if(isset($_GET['cupNumber'])) {
        $cupNumber = $_GET['cupNumber'];
    }
  ?>

<?php require_once('assets/header.php') ?>

  <form action="process.php" method="POST" enctype="multipart/form-data">
    <div class="mainContainer">
      
      <div class="questionContainer">
        <h1>¿Cómo te Contactamos?</h1>
      </div>

      <div class="formContainer row">
        <div class="col-lg-12">
          <label for="name" class="form-label">Nombre Completo</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="col-lg-6">
          <label for="phone" class="form-label">Celular</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="col-lg-6">
          <label for="username" class="form-label">Usuario de Instagram</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="col-lg-6">
          <label for="region" class="form-label">Región</label>
          <select id="region" name="region" class="form-select">
              <option value="Adscritos">Adscritos</option>
              <option value="Atlántico">Atlántico</option>
              <option value="Bogotá">Bogotá</option>
              <option value="Boyacá">Boyacá</option>
              <option value="Caldas">Caldas</option>
              <option value="Cauca">Cauca</option>
              <option value="Cundinamarca">Cundinamarca</option>
              <option value="Hogares Claret">Hogares Claret</option>
              <option value="Huila">Huila</option>
              <option value="Meta">Meta</option>
              <option value="Nariño">Nariño</option>
              <option value="Norte de Santander">Norte de Santander</option>
              <option value="Quindío">Quindío</option>
              <option value="Risaralda">Risaralda</option>
              <option value="Santander">Santander</option>
              <option value="Tolima">Tolima</option>
              <option value="Valle del Cauca">Valle del Cauca</option>
              <option value="Otro">Otro</option>
          </select>
        </div>

        <div class="col-lg-6">
          <label for="city" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="city" name="city" required>
        </div>

        <div class="col-lg-12">
          <label for="address" class="form-label">Dirección de Entrega</label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <div class="col-lg-12">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="col-lg-6">
          <label for="image" class="form-label">Comprobante de Pago</label>
          <input type="file" class="form-control" id="comprobante" name="comprobante" accept="image/*" required>
        </div>

        <div class="col-lg-6">
          <label for="image" class="form-label">QR para las transferencias</label>
          <button type="button" class="form-control" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver QR</button>
        </div>

        <div class="col-lg-6" id="cup">
          <div class="cupContainer">
            <div class="cupStroke">
              <div class="cupCoffee">
                <input type="text" id="cupNumber" name="cupNumber" pattern="[0-9]{2}" maxlength="2" value="<?php echo $cupNumber; ?>" required readonly><br>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <label for="upload" class="form-label">¿Todo listo?</label>
          <input type="submit" class="form-control" id="upload" name="upload">
        </div>
      </div>
    </div>
  </form>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">Métodos de Pago</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Escanenando este QR puedes hacer la transferencia desde cualquier banco.</p>
        <img src="img/QR.png" alt="QR Bancolombia">
        <p style="margin-top:5%; text-align:left;">Cuenta de Ahorros Bancolombia: 270-662850-95</p>
        <p>Titular: Camilo Agudelo Jaramillo</p>
        
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/loader.js"></script>
</body>
</html>