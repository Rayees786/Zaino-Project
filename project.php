<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: log.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: log.php");
  }
  ?>



<!doctype html>
<html>
    <meta charset ="utf-8">
    <meta name ="viewport" content="width=device-width, intial-scale=1">
    <title>Custom Coding</title>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<script src="project.js"></script>
<script src="demo.js"></script>
<link rel="stylesheet" href="demo.css">


 

     <link rel="stylesheet" href="project.css">
    
    </head>
    <body>
    <div id="wrap">
    
        <header>
            <h1 href="#">ZAINO </h1>
            <!-- <img src="logo4.jpg" style="width: 200px; height: 100px; margin-left:-300px; "> -->
            <nav>
               <li> <a href="#">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href=".html">Bike convertibles</a></li>
<li><a href="php-everything/index.php">Back packs</a></li>
<li><a href="contactus.html">Contact</a></li>
                
            </nav>
            </header>


<div style="float: right !important; position: absolute; margin-left: 1250px; margin-top: 105px; font-size: 12px !important;
}">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p style="font-size: 10px; color: #3f51b5; font-family: verdana;">Hola! <strong><?php echo $_SESSION['username']; ?></strong></p></div>
      
      <p> <strong><a href="ind.php?logout='1'" style="color: red !important; margin-left:495px; margin-top:-230px; position: absolute; font-size: 12px;">logout</a> </strong> </p>
    <?php endif ?>
 
            <section class="hero">
            <div class="background-image" style="background-image: url(hiking.jpg)"></div>
                <div class="hero-content-area">
                <h1>Back Pack Hiking Adventures</h1>
                    <h3> Unmissable Adventure Tours Around the World</h3>
                <a href="cart/backpacks.html" class="btn">Shop Now</a>
                </div>
                
            </section>
            </div>
        </div>

    <div id="title" class="slide header">
  <h1>Pure CSS Parallax</h1>
</div>

<div id="slide1" class="slide">
  <div class="title">
    <h1>Slide 1</h1>
    <p>Lorem ipsum dolor sit amet, in velit iudico mandamus sit, persius dolorum in per, postulant mnesarchum cu nam. Malis movet ornatus id vim, feugait detracto est ea, eam eruditi conceptam in. Ne sit explicari interesset. Labores perpetua cum at. Id viris docendi denique vim.</p>
  </div>
</div>

<div id="slide2" class="slide">
  <div class="title">
    <h1>Slide 2</h1>
    <p>Lorem ipsum dolor sit amet, in velit iudico mandamus sit, persius dolorum in per, postulant mnesarchum cu nam. Malis movet ornatus id vim, feugait detracto est ea, eam eruditi conceptam in. Ne sit explicari interesset. Labores perpetua cum at. Id viris docendi denique vim.</p>
  </div>
  <img src="bag5.jpg">
  <img src="bag6.jpg"> 
</div>

<div id="slide3" class="slide">
  <div class="title">
    <h1>Slide 3</h1>
    <p>Lorem ipsum dolor sit amet, in velit iudico mandamus sit, persius dolorum in per, postulant mnesarchum cu nam. Malis movet ornatus id vim, feugait detracto est ea, eam eruditi conceptam in. Ne sit explicari interesset. Labores perpetua cum at. Id viris docendi denique vim.</p>
  </div>
</div>

<div id="slide4" class="slide">

  <div id="Followtitle" >
  <h1>FOLLOW US</h1>
  </div>
    
   <ol>
<li><a href="https://www.facebook.com/profile.php?id=100012512077239"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

<li><a href="https://www.linkedin.com/in/raj-kumar-web-designer/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

</ol>

  </div>
  <!-- <img src="bag7.jpg">
  <img src="bag8.jpg"> --> 
</div>

	<footer>
		
		<p>Made by Rayees Malik</p>
	</footer>

    </body>
</html>