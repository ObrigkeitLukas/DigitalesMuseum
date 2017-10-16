<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Digitales Museum</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
      require("./navbar.php");
    ?>
    <br/>
    <br/>
    <br/>


    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="#" id="personSelbst" onclick="document.location=this.id+'.php';return false;" >
            <img src="bild.jpeg" alt="Mein Bild" class="img-thumbnail">
          </a>
          <h4 align="center"> Name der Person </h4>
        </div>



        <div class="col-md-4" style="text-align: center;">
          <a href="#" id="personSelbst" onclick="document.location=this.id+'.php';return false;" >
            <img src="sdp_klein.jpg" alt="Mein Bild" class="img-thumbnail" >
          </a>
          <h4 align="center"> Name der Person </h4>
        </div>

        <div class="col-md-4">
          <a href="#" id="personSelbst" onclick="document.location=this.id+'.php';return false;" >
            <img src="sdp_klein.jpg" alt="Mein Bild" class="img-thumbnail" >
          </a>
          <h4 align="center"> Name der Person </h4>
        </div>

      </div>
      <br />

      <div class="row">
        <div class="col-md-4">
          <a href="#" id="personSelbst" onclick="document.location=this.id+'.php';return false;" >
            <img src="sdp_klein.jpg" alt="Mein Bild" class="img-thumbnail" >
          </a>
          <h4 align="center"> Name der Person </h4>
        </div>

        <div class="col-md-4">
          <a href="#" id="personSelbst" onclick="document.location=this.id+'.php';return false;" >
            <img src="bild.jpeg" alt="Mein Bild" class="img-thumbnail" >
          </a>
          <h4 align="center"> Name der Person </h4>
        </div>

        <div class="col-md-4">
          <a href="#" id="personSelbst" onclick="document.location=this.id+'.php';return false;" >
            <img src="sdp_klein.jpg" alt="Mein Bild" class="img-thumbnail" >
          </a>
          <h4 align="center"> Name der Person </h4>
        </div>

      </div>
      <br />

      <div class="row">
        <div class="col-md-4">
          <a href="#" id="personSelbst" onclick="document.location=this.id+'.php';return false;" >
            <img src="sdp_klein.jpg" alt="Mein Bild" class="img-thumbnail" >
          </a>
          <h4 align="center"> Name der Person </h4>
        </div>

        <div class="col-md-4">
          <a href="#" id="personSelbst" onclick="document.location=this.id+'.php';return false;" >
            <img src="sdp_klein.jpg" alt="Mein Bild" class="img-thumbnail" >
          </a>
          <h4 align="center"> Name der Person </h4>
        </div>

        <div class="col-md-4">
          <a href="#" id="personSelbst" onclick="document.location=this.id+'.php';return false;" >
            <img src="sdp_klein.jpg" alt="Mein Bild" class="img-thumbnail" >
          </a>
          <h4 align="center"> Name der Person </h4>
        </div>

      </div>
    </div>
  </body>
</html>
