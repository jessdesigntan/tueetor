<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Dashboard"); ?>
  <body>
    <?php navbar(); ?>
    <div class="page-container">
      <div class="row">
        <div class="col-sm-2 hide-mobile">
          <div class="dashboard-nav">
            <ul>
              <li class="active"><a href="dashboard.php">Profile</a></li>
              <li><a href="add-subject.php">Add Subject</a></li>
              <li><a href="schedule.php">Schedule</a></li>
              <li><a href="#">Messages</a></li>
              <li><a href="shortlist.php">Shortlist</a></li>
              <li><a href="review.php">Reviews</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="dashboard-content">
            <div class="primary-color uppercase mTop20">Profile</div>
            <hr/>
            <div class="profile-block no-border">
              <div class="body">
                <div class="row">
                  <div class="col-sm-2">
                    <img class="profile-img img-responsive" src="images/profile.jpg">
                  </div>
                  <div class="col-sm-10 user-info">
                    <div class="mTop20"></div>
                    <h1>Kourtney Seah, 22</h1>
                    <p>Female</p>
                    <a href="edit-profile.php" class="t-btn secondary-btn">Edit Profile</a>
                    <hr/>
                    <p>"Enjoy reading broadly, professionally and generally. My emphasis is to help students in the application side of the knowledge learned, Students learn well when presented with alternative solutions and flexibility. A relax learning atmosphere greatly improves understanding and grades, I do provide inputs to projects and assignments."</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./END of User Information -->
            <hr/>
            <table class="table table-responsive profile-table table-striped">
              <thead>
                <tr>
                  <td colspan="2">Your details</td>
                </tr>
              </thead>
              <tr>
                <td>Account Type</td>
                <td>Student</td>
              </tr>
              <tr>
                <td>Profile Link</td>
                <td><a href="#" class="secondary-color">http://tueetor.com/jesstan</a></td>
              </tr>
              <tr>
                <td>Title</td>
                <td>Student</td>
              </tr>
              <tr>
                <td>First Name</td>
                <td>Jess</td>
              </tr>
              <tr>
                <td>Last Name</td>
                <td>Tan</td>
              </tr>
              <tr>
                <td>Display Name</td>
                <td>Jess Tan</td>
              </tr>
              <tr>
                <td>Address 1</td>
                <td>Blk 111 Chong Pang</td>
              </tr>
              <tr>
                <td>Address 2</td>
                <td>#01-1222</td>
              </tr>
              <tr>
                <td>Country</td>
                <td>Singapore</td>
              </tr>
              <tr>
                <td>Postal Code</td>
                <td>760111</td>
              </tr>
              <tr>
                <td>Contact Number</td>
                <td>91165476</td>
              </tr>
              <tr>
                <td>Date of birth</td>
                <td>26 April 1994</td>
              </tr>
            </table>
            <hr/>
            <table class="table table-responsive profile-table table-striped">
              <thead>
                <tr>
                  <td colspan="2">Document Library</td>
                </tr>
              </thead>
              <tr>
                <td><a href="#">O level Cert</a></td>
                <td class="primary-color"></td>
              </tr>
              <tr>
                <td><a href="#">O level Cert</a></td>
                <td class="primary-color">Verified</td>
              </tr>
              <tr>
                <td><a href="#">O level Cert</a></td>
                <td class="primary-color"></td>
              </tr>
              <tr>
                <td><a href="#">O level Cert</a></td>
                <td class="primary-color">Verified</td>
              </tr>
            </table>
            <!-- ./END of Document Library -->
          </div>
        </div><!-- ./col-sm-10 -->
      </div><!-- ./row -->
    </div><!--./ page-container -->
    <?php footer(); ?>
  </body>

</html>
