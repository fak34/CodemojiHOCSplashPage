<!DOCTYPE html>
<head>
  <title>Welcome Page for Livio</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="styles/stylesheet.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
  <script src="scripts/jquery.js"></script>
  <script src="scripts/bootstrap.min.js"></script>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >Hour of Code Project</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <div id = "navRight"> 
        <ul class="nav navbar-nav navbar-right">
          <li><a class = "option1" href="#about">About</a></li>
          <li><a class = "option2" href="#GetStart">Getting Started</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <img src="img/smiley_logo.png" class="img-responsive img" style="display:inline" alt="Logo" width="420" height="450">
  <div id ="floated-imgs">
    <img src = "img/panda.png">
    <img src = "img/burger.png"> 
  </div>
  <div id="floated-imgsl">
    <img src = "img/turtle.jpg">
    <img src = "img/camera.png"> 
  </div>
  <div id="header2">
    <h2> HOUR of CODE</h2>
  </div>
  <div class="tpbutton">
  <a href="https://www.codemoji.com/hourofcode/js/1.php"><span>Start Lessons</span></div></a>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center" id = "about">
  <h3 class="margin">What is Codemoji?</h3>
  <p>Codemoji is a tool that implements a unique approach to teaching programming ensures that the user has fun while learning basic coding skills applicable to all areas of STEM. 
Codemoji fast-tracks learning by eliminating pesky code syntax and typing hurdles, focusing on intuitive, relatable emoji that represent and function as standard tags in HTML and CSS code. </p>
  <a href="https://codemoji.com/about" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-plus"></span> Learn More</a>
</div>

<!-- Third Container -->
<div class="container-fluid bg-3 text-center" id="GetStart">
  <h3 class="margin">Getting Started</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Instructional Video to help familarize yourself with the lessons</p>
      <iframe width="400" height="300" src="https://www.youtube.com/embed/SSvk7S3jGBc" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-sm-4">
      <p> Why learn to code?</p>
      <br>
      <iframe width="400" height="310" src="https://www.youtube.com/embed/_IiPLtP-jm8" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-sm-4">
      <p>Mark Zuckerberg explaining the importance of learning computer programming</p>
     <iframe width="400" height="300" src="https://www.youtube.com/embed/pvAsqPbz9Ro" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
  <hr>
    <div class="col-md-12">
      <div class="col-md-4">
        <p class="muted pull-left" id="botFoot">© 2016 Codemoji. All rights reserved</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

