<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Shortlist"); ?>
  <body>
    <?php navbar(); ?>
    <div class="page-container">
      <div class="row">
        <div class="col-sm-2 hide-mobile">
          <div class="dashboard-nav">
            <ul>
              <li><a href="dashboard.php">Profile</a></li>
              <li><a href="add-subject.php">Add Subject</a></li>
              <li><a href="schedule.php">Schedule</a></li>
              <li><a href="#">Messages</a></li>
              <li class="active"><a href="shortlist.php">Shortlist</a></li>
              <li><a href="review.php">Reviews</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="dashboard-content">
            <div class="primary-color uppercase mTop20">shortlist</div>
            <hr/>
            <form>
              <input type="text" placeholder="Search anything" class="line-search">
            </form>

            <?php for($i = 0; $i <= 5; $i++) { ?>
              <div class="shortlist-card">
                <div class="profile">
                  <a href="profile.php"><img class="profile-img" src="images/profile.jpg"></a>
                  <div class="profile-content">
                    <a href="profile.php">
                      <div class="profile-name">Candice Koh</div>
                      <div class="profile-msg">Potential tutee for Monday night</div>
                    </a>
                  </div>
                  <div class="rate">$40</div>
                </div>
                <div class="action">
                  <a href=""><img src="images/delete.svg"></a>
                  <a href=""><img src="images/edit.svg"></a>
                </div>
                <div class="date small">
                  21 Jul 2017
                </div>
              </div>
            <?php } ?>

          </div><!-- ./dashboard-content-->
        </div><!-- ./col-sm-10 -->
      </div><!-- ./row -->
    </div><!--./ page-container -->
    <?php footer(); ?>
  </body>

</html>
