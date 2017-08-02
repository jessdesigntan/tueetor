<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Schedule"); ?>
  <body>
    <?php navbar(); ?>
    <div class="page-container">
      <div class="row">
        <div class="col-sm-2 hide-mobile">
          <div class="dashboard-nav">
            <ul>
              <li><a href="dashboard.php">Profile</a></li>
              <li><a href="add-subject.php">Add Subject</a></li>
              <li class="active"><a href="schedule.php">Schedule</a></li>
              <li><a href="#">Messages</a></li>
              <li><a href="shortlist.php">Shortlist</a></li>
              <li><a href="review.php">Reviews</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="dashboard-content">
            <div class="primary-color uppercase mTop20">Schedule</div>
            <hr/>
            <div class="profile-block table">
              <div class="title">
                Available Schedule
              </div>
              <table class="table table-hover table-bordered">
                <thead class="primary-color">
                  <td>Time</td>
                  <td>MON</td>
                  <td>TUES</td>
                  <td>WED</td>
                  <td>THURS</td>
                  <td>FRI</td>
                  <td>SAT</td>
                  <td>SUN</td>
                </thead>
                <tr>
                  <td>00:00</td>
                  <td></td>
                  <td></td>
                  <td class="success">Maths</td>
                  <td></td>
                  <td class="success">Economics</td>
                  <td class="success">English</td>
                  <td></td>
                </tr>
                <tr>
                  <td>01:00</td>
                  <td></td>
                  <td></td>
                  <td class="success">Maths</td>
                  <td></td>
                  <td class="success">Economics</td>
                  <td class="success">English</td>
                  <td></td>
                </tr>
                <tr>
                  <td>02:00</td>
                  <td class="success">Maths</td>
                  <td class="success">Economics</td>
                  <td class="success">English</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
          </div><!-- ./dashboard-content -->
        </div><!-- ./col-sm-10 -->
      </div><!-- ./row -->
    </div><!--./ page-container -->
    <?php footer(); ?>
  </body>

</html>
