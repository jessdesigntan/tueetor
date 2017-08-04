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
              <li><a href="subjects.php">Subjects</a></li>
              <li><a href="schedule.php">Schedule</a></li>
              <li><a href="#">Messages</a></li>
              <li><a href="shortlist.php">Shortlist</a></li>
              <li class="active"><a href="review.php">Reviews</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="dashboard-content">
                <div class="primary-color uppercase">Request for a review</div>
                <hr/>
                <p class="box small">
                  Instructors with good reviews are generally more sought after. Invite students past and present - even if you did not find them through Tueetor - to help build your scorecard.<br/><br/>
                  For authentication purposes, we only accept reviews from registered users. If the student you are inviting does not have a Tueetor account, he or she will be required to register one (for free). A gentle reminder: location-related and/or device information is collected during account registration and we conduct checks regularly. Tueetor is committed to the credentials of its tutors.
                </p>

                <form class="form-style">
                  <div class="row">
                    <div class="col-sm-6">
                      <label>Student Name</label>
                      <input type="text">
                    </div>
                    <div class="col-sm-6">
                      <label>Student Email Address</label>
                      <input type="text">
                    </div>
                  </div>
                  <button type="submit" class="btn primary-btn">Submit</button>
                </form>

                <div class="review-average">
                  <div class="primary-color uppercase mTop20">Current Rating</div>
                  <hr/>
                  <p class="review-grade">
                    Excellent
                    <div class="review">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </div>
                  </p>
                </div>

                <form>
                  <input type="text" placeholder="Search anything" class="line-search">
                </form>

                <?php for ($i = 0; $i <= 3; $i++) { ?>
                <div class="shortlist-card">
                  <div class="profile">
                    <a href="profile.php"><img class="profile-img" src="images/profile.jpg"></a>
                    <div class="profile-content">
                      <a href="profile.php">
                        <div class="profile-name">Candice Koh</div>
                        <div class="profile-msg">Potential tutee for Monday night</div>
                      </a>
                    </div>
                  </div>
                  <div class="date small">
                    Rated<br/>
                    21 Jul 2017
                  </div>
                </div>
                <?php } ?>
            </div>



          </div><!-- ./dashboard-content-->
        </div><!-- ./col-sm-10 -->
      </div><!-- ./row -->
    </div><!--./ page-container -->
    <?php footer(); ?>
  </body>

</html>
