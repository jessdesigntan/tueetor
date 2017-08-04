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
              <li><a href="messages.php">Messages</a></li>
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

                <form class="mBottom20">
                  <input type="text" placeholder="Search anything" class="line-search">
                </form>

                <table class="table table-responsive profile-table table-striped table-hover table-bordered" style="width:100%;">
                  <thead>
                    <tr>
                      <td>Name</td>
                      <td>Email</td>
                      <td>Request Sent</td>
                      <td>Review Received</td>
                      <td>Status</td>
                    </tr>
                  </thead>
                  <tr>
                    <td>Candice Koh</td>
                    <td>candice@hotmail.com</td>
                    <td>17 Jul 2017</td>
                    <td>18 Jul 2017</td>
                    <td>Rated</td>
                  </tr>
                  <tr>
                    <td>Candice Koh</td>
                    <td>candice@hotmail.com</td>
                    <td>17 Jul 2017</td>
                    <td></td>
                    <td>Pending</td>
                  </tr>
                  <tr>
                    <td>Candice Koh</td>
                    <td>candice@hotmail.com</td>
                    <td>17 Jul 2017</td>
                    <td></td>
                    <td>Pending</td>
                  </tr>
                </table>
            </div>



          </div><!-- ./dashboard-content-->
        </div><!-- ./col-sm-10 -->
      </div><!-- ./row -->
    </div><!--./ page-container -->
    <?php footer(); ?>
  </body>

</html>
