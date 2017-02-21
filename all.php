<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Subject"); ?>
  <body>
    <?php navbar(); ?>
    <div class="hero-banner all-subject-banner-bg">
      <div>
        <div class="text green">
          <h1>All Subjects</h1>
          <p class="lead">Choose from a variety of 500 subjects and 3000 tutors</p>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="row">
        <h1>All Subjects</h1>
        <div class="col-sm-4">
          <h3>Academics</h3>
          <img class="hero left" src="images/olevel.png">
        </div>
        <div class="col-sm-4">
          <ul>
            <li><a href="#">English (50)</a></li>
            <li><a href="#">Chinese (23)</a></li>
            <li><a href="#">Additional Mathematics (230)</a></li>
            <li><a href="#">Elementary Mathematics (400)</a></li>
            <li><a href="#">Geography (111)</a></li>
            <li><a href="#">History (58)</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul>
            <li><a href="#">English (50)</a></li>
            <li><a href="#">Chinese (23)</a></li>
            <li><a href="#">Additional Mathematics (230)</a></li>
            <li><a href="#">Elementary Mathematics (400)</a></li>
            <li><a href="#">Geography (111)</a></li>
            <li><a href="#">History (58)</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h3>Others</h3>
          <img class="hero left" src="images/others.png">
        </div>
        <div class="col-sm-4">
          <ul>
            <li><a href="#">English (50)</a></li>
            <li><a href="#">Chinese (23)</a></li>
            <li><a href="#">Additional Mathematics (230)</a></li>
            <li><a href="#">Elementary Mathematics (400)</a></li>
            <li><a href="#">Geography (111)</a></li>
            <li><a href="#">History (58)</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul>
            <li><a href="#">English (50)</a></li>
            <li><a href="#">Chinese (23)</a></li>
            <li><a href="#">Additional Mathematics (230)</a></li>
            <li><a href="#">Elementary Mathematics (400)</a></li>
            <li><a href="#">Geography (111)</a></li>
            <li><a href="#">History (58)</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h3>Aesthetics</h3>
          <img class="hero left" src="images/aesthetics.png">
        </div>
        <div class="col-sm-4">
          <ul>
            <li><a href="#">English (50)</a></li>
            <li><a href="#">Chinese (23)</a></li>
            <li><a href="#">Additional Mathematics (230)</a></li>
            <li><a href="#">Elementary Mathematics (400)</a></li>
            <li><a href="#">Geography (111)</a></li>
            <li><a href="#">History (58)</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul>
            <li><a href="#">English (50)</a></li>
            <li><a href="#">Chinese (23)</a></li>
            <li><a href="#">Additional Mathematics (230)</a></li>
            <li><a href="#">Elementary Mathematics (400)</a></li>
            <li><a href="#">Geography (111)</a></li>
            <li><a href="#">History (58)</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h3>Fitness</h3>
          <img class="hero left" src="images/fitness.png">
        </div>
        <div class="col-sm-4">
          <ul>
            <li><a href="#">English (50)</a></li>
            <li><a href="#">Chinese (23)</a></li>
            <li><a href="#">Additional Mathematics (230)</a></li>
            <li><a href="#">Elementary Mathematics (400)</a></li>
            <li><a href="#">Geography (111)</a></li>
            <li><a href="#">History (58)</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul>
            <li><a href="#">English (50)</a></li>
            <li><a href="#">Chinese (23)</a></li>
            <li><a href="#">Additional Mathematics (230)</a></li>
            <li><a href="#">Elementary Mathematics (400)</a></li>
            <li><a href="#">Geography (111)</a></li>
            <li><a href="#">History (58)</a></li>
          </ul>
        </div>
      </div>
    </div><!-- END section browse top subjects -->

    <div class="section grey-bg">
      <div class="row">
        <h1>Featured Trainers</h1>
        <div id="featured-trainers-desktop" class="hide-mobile">
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
        </div>

        <div id="featured-trainers-mobile" class="show-mobile">
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
          <div class="col-sm-3">
            <?php trainerCard(); ?>
          </div>
        </div>
      </div>
    </div>

    <?php footer(); ?>
    <script>
      $('#featured-trainers-desktop').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
      });
      $('#featured-trainers-mobile').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    </script>
  </body>
</html>
