<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area and Perimeter of Rectangle, in PHP" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="hames.al-sharoa" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Area and Perimeter of Rectangle,in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area and Perimeter of Rectangle, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/area_of_trinagle.png">
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $lengthOfRectangle = $_POST["length-of-rectangle"];
          $widthOfRectangle = $_POST["width-of-rectangle"];


          // process
          $area = $lengthOfRectangle * $widthOfRectangle;
          $perimeter = 2 * ($lengthOfRectangle + $widthOfRectangle);

          // output
          echo "If a rectangle has length = " . $lengthOfRectangle . " cm and the width = " . $widthOfRectangle . " cm:";
          echo "<br />";
          echo "<br />";
          echo "The area of the rectangle is " . $area . " cm².";
          echo "<br />";
          echo "The perimeter of the rectangle is " . $perimeter . " cm.";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>
</html>