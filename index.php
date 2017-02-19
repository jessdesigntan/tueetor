<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor"); ?>
  <body>
    <?php navbar(); ?>
    <div class="hero-banner">
      <div class="text">
        <h1>Connect Learners and Trainers</h1>
      </div>
    </div>

    <div class="section">
      <div class="row">
        <h1>Browse Top Subjects</h1>

        <div class="col-sm-3">
          <img class="hero" src="images/olevel.png">
          <div class="list">
            <p>Academics</p>
            <div><img src="images/soccer.svg"><a href="#">English</a></div>
            <div><img src="images/soccer.svg"><a href="#">Chinese</a></div>
            <div><img src="images/soccer.svg"><a href="#">Additional Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="#">Elementary Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="#">Geography</a></div>
            <a href="#">Show more</a>
          </div>
        </div>
        <div class="col-sm-3">
          <img class="hero" src="images/fitness.png">
          <div class="list">
            <p>Fitness</p>
            <div><img src="images/soccer.svg"><a href="#">English</a></div>
            <div><img src="images/soccer.svg"><a href="#">Chinese</a></div>
            <div><img src="images/soccer.svg"><a href="#">Additional Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="#">Elementary Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="#">Geography</a></div>
            <a href="#">Show more</a>
          </div>
        </div>
        <div class="col-sm-3">
          <img class="hero" src="images/aesthetics.png">
          <div class="list">
            <p>Aesthetics</p>
            <div><img src="images/soccer.svg"><a href="#">English</a></div>
            <div><img src="images/soccer.svg"><a href="#">Chinese</a></div>
            <div><img src="images/soccer.svg"><a href="#">Additional Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="#">Elementary Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="#">Geography</a></div>
            <a href="#">Show more</a>
          </div>
        </div>
        <div class="col-sm-3">
          <img class="hero" src="images/others.png">
          <div class="list">
            <p>Others</p>
            <div><img src="images/soccer.svg"><a href="#">English</a></div>
            <div><img src="images/soccer.svg"><a href="#">Chinese</a></div>
            <div><img src="images/soccer.svg"><a href="#">Additional Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="#">Elementary Mathematics</a></div>
            <div><img src="images/soccer.svg"><a href="#">Geography</a></div>
            <a href="#">Show more</a>
          </div>
        </div>

      </div>
    </div><!-- END section browse top subjects -->

    <div class="section grey-bg">
      <div class="row">
        <h1>Featured Trainers</h1>
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

    <div class="section how-it-works">
      <div class="row">
        <h1>How it works</h1>
        <div class="col-sm-4">
          <img src="images/subject-search.png">
          <h1>1. Add Subject</h1>
          <p>Tell us what you need,<br/>and we find you an instructor.</p>
        </div>
        <div class="col-sm-4">
          <img src="images/chat.png">
          <h1>2. Chat</h1>
          <p>Talk to potential tutors<br/>and arrange a schedule</p>
        </div>
        <div class="col-sm-4">
          <img src="images/learn.png">
          <h1>3. Learn</h1>
          <p>Lorem ipsum dolor sit amet,<br/>consectetuer adipiscing elit</p>
        </div>
      </div>
    </div>

    <div class="tutor-banner">
      <div class="text">
        <h1>Share your knowledge</h1>
        <p>Everyone has a skill to share with the world. Earn money doing it on Tueetor.</p>
        <a class="line-btn line-btn-white">Become a tutor</a>
      </div>
    </div>

    <?php footer(); ?>
  </body>
</html>
