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
  <link rel="stylesheet" href="css/lottery.css">
</head>
<body>
  <?php require_once('assets/header.php'); 
  require_once('assets/connection.php');
  ?>

  <div class="mainContainer">
    <div class="secondaryContainer">
      <?php
        $sql = "SELECT `cup-number`, payment FROM contact";
        $result = $conn->query($sql);

        $paymentStatus = array();
        while ($row = $result->fetch_assoc()) {
            $paymentStatus[$row['cup-number']] = $row['payment'];
        }

        for ($row = 0; $row < 8; $row++) {
            echo '<div class="row">';
            for ($col = 0; $col < 12; $col++) {
                $number = $row * 12 + $col;
                if ($number >= 100) {
                    continue;
                }
                $padded_number = str_pad($number, 2, '0', STR_PAD_LEFT);

                echo '<div class="col-lg-1">';
                echo '<div class="cupContainer">';
                echo '<div class="cupStroke">';
                echo '<div class="cupCoffee"';

                if (isset($paymentStatus[$number]) && ($paymentStatus[$number] == 0 || $paymentStatus[$number] == 1)) {
                  echo ' style="pointer-events: none;"'; 
                }

                echo ' onclick="redirectToContact(' . $number . ')">';

                if (isset($paymentStatus[$number]) && $paymentStatus[$number] == 0) {
                    echo '<img src="img/flordelisBeige.png" alt="Image" />';
                } else if (isset($paymentStatus[$number]) && $paymentStatus[$number] == 1) {
                    echo '<img src="img/flordelisWhite.png" alt="Image" />';
                } else {
                    echo '<h3>' . $padded_number . '</h3>';
                }

                echo '</div>'; //cupCoffee
                echo '</div>'; //cupStroke
                echo '</div>'; //cupContainer
                echo '</div>'; //col-lg-1
            }
            echo '</div>'; //row
        }

        echo '<div class="row justify-content-center">';
        for ($col = 0; $col < 4; $col++) {
            $number = 96 + $col;
            $padded_number = str_pad($number, 2, '0', STR_PAD_LEFT);

            echo '<div class="col-lg-1">';
            echo '<div class="cupContainer">';
            echo '<div class="cupStroke">';
            echo '<div class="cupCoffee"';

                if (isset($paymentStatus[$number]) && ($paymentStatus[$number] == 0 || $paymentStatus[$number] == 1)) {
                  echo ' style="pointer-events: none;"'; 
                }

                echo ' onclick="redirectToContact(' . $number . ')">';

            if (isset($paymentStatus[$number]) && $paymentStatus[$number] == 0) {
              echo '<img src="img/flordelisBeige.png" alt="Image" />';
          } else if (isset($paymentStatus[$number]) && $paymentStatus[$number] == 1) {
              echo '<img src="img/flordelisWhite.png" alt="Image" />';
          } else {
              echo '<h3>' . $padded_number . '</h3>';
          }

            echo '</div>'; //cupCoffee
            echo '</div>'; //cupStroke
            echo '</div>'; //cupContainer
            echo '</div>'; //col-lg-1
        }
        echo '</div>'; // row

        $result->close();
        $conn->close();
      ?>
    </div>
  </div>

<script src="js/loader.js"></script>

<script>
    function redirectToContact(cupNumber) {
        window.location.href = "contact.php?cupNumber=" + cupNumber;
    }
</script>
</body>
</html>