<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor"); ?>
  <body>
    <?php navbar(); ?>
    <div class="hero-banner main-banner-bg">
      <div>
        <div class="text">
          <h1>Connect Learners and Trainers</h1>
        </div>
        <div class="form">
          <form class="search-bar" role="search" action="search.php">
            <div class="input-group">
              <div class="input-group-btn">
                <label>I'm looking for</label>
                <button type = "button" class = "btn btn-default" tabindex = "-1">Trainers</button>
                <button style="float:right; width:20px;" type = "button" class = "btn btn-default dropdown-toggle" data-toggle = "dropdown" tabindex = "-1">
                   <span class = "caret"></span>
                   <span class = "sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                   <li><a href="#">Trainers</a></li>
                   <li><a href="#">Learners</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div>
                <label>What do you want to learn?</label>
                <input type = "text" class = "form-control" placeholder="Maths, English, Chemistry ...">
                <button type="submit" class="hidden-submit"></button>
              </div>
            </div><!-- /input-group -->
          </form>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="row">
        <h1>Browse Top Subjects</h1>
        <div class="col-sm-3">
          <img class="hero" src="images/olevel.png">
          <div class="list">
            <p>Academics</p>
            <div><img src="images/soccer.svg"><a href="search.php">English</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Chinese</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Additional Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Elementary Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Geography</a></div>
            <a href="subject.php">Show more</a>
          </div>
        </div>
        <div class="col-sm-3">
          <img class="hero" src="images/fitness.png">
          <div class="list">
            <p>Fitness</p>
            <div><img src="images/soccer.svg"><a href="search.php">English</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Chinese</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Additional Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Elementary Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Geography</a></div>
            <a href="subject.php">Show more</a>
          </div>
        </div>
        <div class="col-sm-3">
          <img class="hero" src="images/aesthetics.png">
          <div class="list">
            <p>Aesthetics</p>
            <div><img src="images/soccer.svg"><a href="search.php">English</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Chinese</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Additional Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Elementary Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Geography</a></div>
            <a href="subject.php">Show more</a>
          </div>
        </div>
        <div class="col-sm-3">
          <img class="hero" src="images/others.png">
          <div class="list">
            <p>Others</p>
            <div><img src="images/soccer.svg"><a href="search.php">English</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Chinese</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Additional Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Elementary Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="search.php">Geography</a></div>
            <a href="subject.php">Show more</a>
          </div>
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

    <div class="section mobile-app-section">
      <img src="images/phone.png" width="300" class="hide-mobile wow fadeInLeft">
      <div class="wow fadeInDown">
        <h2>Tueetor in your pocket!</h2>
        <p class="lead">Get our app, it's the fastest way start connecting to tutors.</p>
        <div class="buttons">
          <a target="_blank" href="https://itunes.apple.com/in/app/tueetor-find-trainer-and-learner-instantly-24x7/id1228694515?mt=8"><img src="images/app-icon-ios.png" width="150"></a>
          <a target="_blank" href="https://play.google.com/store/apps/details?id=com.tueetor&hl=en"><img src="images/app-icon-android.png" width="150"></a>
        </div>
      </div>
      <img src="images/phone.png" width="300" class="show-mobile">
    </div>

    <div class="tutor-banner">
      <div class="text">
        <h1>Share your knowledge</h1>
        <p>Everyone has a skill to share with the world. Earn money doing it on Tueetor.</p>
        <a href="trainerSignup.php" class="line-btn line-btn-white">Become a tutor</a>
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
