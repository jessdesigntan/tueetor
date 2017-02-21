<?php
  function head($title) {
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="http://imgur.com/a/qtFfN">
    <meta property="og:title" content="Dear Carrie is a community of readers and writers offering unique perspectives on mental-health related issues." />
    <title><?=$title;?></title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>


    <!-- Own style & js -->
    <link href="css/style.css" rel="stylesheet">

    <!-- wow.js for css animations & initialization -->
    <script src="js/wow.js"></script>
    <script src="js/pace.js"></script>
    <script>new WOW().init();</script>
  </head>
<?php
}

function navbar() {
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/logo.jpg" width="70"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!--<form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
        <li><a href="#">Sign Up</a></li>
        <button type="button" class="btn btn-success navbar-btn">Become a Trainer</button>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
}

function trainerCard() {
?>
  <div class="trainer-card">
    <a href="#">
      <img class="profile-img" src="images/profile.jpg">
      <h1>Kourtney Seah</h1>
      <h2>Tutor</h2>
    </a>
    <div class="review">
      <div>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </div>
      <div>
        12 reviews
      </div>
    </div>
    <div class="tag">
      <span class="label label-default">Math</span>
      <span class="label label-default">POA</span>
      <span class="label label-default">Biology</span>
    </div>
    <div class="btn">
      <a class="line-btn line-btn-green">View Profile</a>
    </div>
  </div><!-- end of card -->
<?php
}

function footer() {
?>
  <div class="footer">
    <div>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <ul>
            <li>Company</li>
            <li><a href="#">About</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Affliates</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <ul>
            <li>Teaching</li>
            <li><a href="#">About</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Affliates</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <ul>
            <li>Tueetor</li>
            <li><a href="#">About</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Affliates</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <ul>
            <li>Mobile</li>
            <li><a href="#">About</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Affliates</a></li>
          </ul>
        </div>
      </div>
      <p class="text-center">© Tueetor 2017</p>
    </div>
  </div>
<?php
}
?>
