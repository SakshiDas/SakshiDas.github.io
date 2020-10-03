<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset = "50">


<?php
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $name = test_input($_POST["fname"]);
    $prof = test_input($_POST["prof"]);
    $biohead = test_input($_POST["biohead"]);

    $bio = test_input($_POST["bio"]);
    $skill1 = test_input($_POST["skill1"]);
    $skill2 = test_input($_POST["skill2"]);
    $skill3 = test_input($_POST["skill3"]);
    $skill4 = test_input($_POST["skill4"]);

    $sfile1 = $_FILES["skimg1"]["name"];
    $stempfile1 = $_FILES["skimg1"]["tmp_name"];
    $sfile2 = $_FILES["skimg2"]["name"];
    $stempfile2 = $_FILES["skimg2"]["tmp_name"];
    $sfile3 = $_FILES["skimg3"]["name"];
    $stempfile3 = $_FILES["skimg3"]["tmp_name"];
    $sfile4 = $_FILES["skimg4"]["name"];
    $stempfile4 = $_FILES["skimg4"]["tmp_name"];

    $sfolder1 = "gallery/" . $sfile1 ;
    $sfolder2 = "gallery/" . $sfile2 ;
    $sfolder3 = "gallery/" . $sfile3 ;
    $sfolder4 = "gallery/" . $sfile4 ;

    move_uploaded_file($stempfile1,$sfolder1);
    move_uploaded_file($stempfile2,$sfolder2);
    move_uploaded_file($stempfile3,$sfolder3);
    move_uploaded_file($stempfile4,$sfolder4);


    $file1 = $_FILES["img1"]["name"];
    $tempfile1 = $_FILES["img1"]["tmp_name"];

    $file2 = $_FILES["img2"]["name"];
    $tempfile2 = $_FILES["img2"]["tmp_name"];

    $file3 = $_FILES["img3"]["name"];
    $tempfile3 = $_FILES["img3"]["tmp_name"];

    $file4 = $_FILES["img4"]["name"];
    $tempfile4 = $_FILES["img4"]["tmp_name"];

    $file5 = $_FILES["img5"]["name"];
    $tempfile5 = $_FILES["img5"]["tmp_name"];

    $file6 = $_FILES["img6"]["name"];
    $tempfile6 = $_FILES["img6"]["tmp_name"];


    $folder1 = "gallery/" . $file1 ;
    $folder2 = "gallery/" . $file2 ;
    $folder3 = "gallery/" . $file3 ;
    $folder4 = "gallery/" . $file4 ;
    $folder5 = "gallery/" . $file5 ;
    $folder6 = "gallery/" . $file6 ;


    move_uploaded_file($tempfile1,$folder1);
    move_uploaded_file($tempfile2,$folder2);
    move_uploaded_file($tempfile3,$folder3);
    move_uploaded_file($tempfile4,$folder4);
    move_uploaded_file($tempfile5,$folder5);
    move_uploaded_file($tempfile6,$folder6);



    $insta = test_input($_POST["insta"]);
    $fb = test_input($_POST["fb"]);
    $lnkdn = test_input($_POST["ldin"]);
    $git = test_input($_POST["git"]);
    $cont = test_input($_POST["cont"]);


?>









  <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center fixed-top">

<a class="navbar-brand" href="in1.html"><?php echo $name ?></a>
  <ul class="navbar-nav">



      <li class="nav-item ">
        <a class="nav-link" href="#gallery">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact-footer">Contact</a>
      </li>
    </ul>
  </nav>
  <br>

  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cd7.jpg" alt="L" width="1920" height = "650px">
      <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span>Welcome to <strong>MY WEBSITE</strong></span>
                            </h2>
                            <br>
                            <h3>
                            	<span><?php echo $name .", " . $prof ?></span>
                            </h3>
                            <br>

                        </div>
                    </div><!-- /header-text -->

    </div>
    <div class="carousel-item">
      <img src="img/cd5.jpg" alt="C" width="1920" height = "650px">
      <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span>Welcome to <strong>MY WEBSITE</strong></span>
                            </h2>
                            <br>
                            <h3>
                            	<span><?php echo $name .", " . $prof ?></span>
                            </h3>
                            <br>

                        </div>
                    </div><!-- /header-text -->
    </div>
    <div class="carousel-item">
      <img src="img/cd6.jpg" alt="N" width="1920" height = "650px">
      <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span>Welcome to <strong>MY WEBSITE</strong></span>
                            </h2>
                            <br>
                            <h3>
                            	<span><?php echo $name .", " . $prof ?></span>
                            </h3>
                            <br>

                        </div>
                    </div><!-- /header-text -->
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br><br>

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Favorites</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">profiles</button>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="<?php echo $folder1 ?>" alt="Card image 1">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="<?php echo $folder2 ?>" alt="Card image 2">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="<?php echo $folder3 ?>" alt="Card image 3">
  </div>
  <!-- Grid column -->

  <!-- Grid column
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="i<?php echo $folder4 ?>" alt="Card image 4">
  </div>
  <Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="<?php echo $folder5 ?>" alt="Card image 5">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="<?php echo $folder6 ?>" alt="Card image 6">
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->
<br><br>

<div id="about" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
  <div class ="row">
    <div class="col-sm-3"> </div>
    <div class="col-sm-6" id = "Para1">
      <h3><?php echo $biohead ?> </h3>

      <p><?php echo $bio ?></p>


    </div>
    <div class="col-sm-3"> </div>
  </div>
</div>

<div class="container">
<div class="row">
  <div class="column">
    <div class="content">
      <img src="<?php echo $sfolder1 ?>" alt="skills 1" style="width:60%">
      <h3></h3>
      <p><?php echo $skill1 ?></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?php echo $sfolder2 ?>" alt="skills 2" style="width:60%">
      <h3></h3>
      <p><?php echo $skill2 ?></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?php echo $sfolder3 ?>" alt="skills 3" style="width:60%">
      <h3></h3>
      <p><?php echo $skill3 ?></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?php echo $sfolder4 ?>" alt="skills 4" style="width:60%">
      <h3></h3>
      <p><?php echo $skill4 ?> </p>
    </div>
  </div>
<!-- END GRID -->
</div>
</div>
<br><br><br><br>


<!-- footer -->
<div  class="footer" id="contact-footer">
  <div class = "container" >

    <div class= "row">
    <div class="col-sm-4" id ="cont">
      <p> <?php echo $cont ?> </p>
    </div>
    <div class="col-sm-4" >
      <a href="https://www.instagram.com/laughingminion98/" target="_blank"><img src="img/insta.jpg" id ="img" alt="instagram" width ="50px"></a>
      <a href="https://www.facebook.com/sakshi.das.507/" target="_blank"><img src="img/face.png" id ="img" alt="facebook" width ="50px"></a>
      <a href="https://www.linkedin.com/in/sakshi-das-3029b4158/" target="_blank"><img src="img/linkdn.jpg" id ="img" alt="linkdn" width ="50px"></a>
      <a href="https://www.linkedin.com/in/sakshi-das-3029b4158/" target="_blank"><img src="img/git.png" id ="img" alt="linkdn" width ="50px"></a>

    </div>
    <div class="col-sm-4" id ="cont">
      <p><center><a href="index.html"style="">This website is made my Sakshi Das<a></center> </p>
    </div>

    </div>
  </div>
</div>


<script>
$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>

</body>
</html>
