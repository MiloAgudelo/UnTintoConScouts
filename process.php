<?php
require_once('assets/connection.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$region = $_POST['region'];
$city = $_POST['city'];
$address = $_POST['address'];
$email = $_POST['email'];
$cupNumber = $_POST['cupNumber'];

if ($_FILES["comprobante"]["error"] == UPLOAD_ERR_OK) {
  $maxFileSize = 20 * 1024 * 1024;
  $fileSize = $_FILES["comprobante"]["size"];

  if ($fileSize <= $maxFileSize) {
    $extension = pathinfo($_FILES["comprobante"]["name"], PATHINFO_EXTENSION);

    $allowedExtensions = array("jpg", "jpeg", "png", "gif", "heic");

    if (in_array(strtolower($extension), $allowedExtensions)) {
      $nombreImagen = $cupNumber . "." . $extension;
      $rutaDestino = "uploads/" . $nombreImagen;
      move_uploaded_file($_FILES["comprobante"]["tmp_name"], $rutaDestino);

      $sqlCheckIndex = "SELECT * FROM contact WHERE `cup-number` = ?";
      $stmtCheckIndex = $conn->prepare($sqlCheckIndex);
      $stmtCheckIndex->bind_param("s", $cupNumber);
      $stmtCheckIndex->execute();
      $resultCheckIndex = $stmtCheckIndex->get_result();

      if ($resultCheckIndex->num_rows > 0) {
        echo "Error: The index already exists in the database.";
      } else {
        $sqlInsert = "INSERT INTO contact (`cup-number`, `name`, `phone`, `username`, `region`, `city`, `address`, `email`, `img_path`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmtInsert = $conn->prepare($sqlInsert);
        $stmtInsert->bind_param("sssssssss", $cupNumber, $name, $phone, $username, $region, $city, $address, $email, $rutaDestino);

        if ($stmtInsert->execute()) {
          header("Location: confirmation.php?cupNumber=$cupNumber");
          exit();
        } else {
          echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }

        $stmtInsert->close();
      }

      $stmtCheckIndex->close();
    } else {
      echo "Error: Solo se permiten archivos de imagen (jpg, jpeg, png, gif, heic).";
    }
  } else {
    echo "Error: El tamaño del archivo no puede ser mayor a 20 MB.";
  }
} else {
  echo "Error al subir el archivo.";
}

$conn->close();
