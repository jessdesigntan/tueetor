<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Subjects"); ?>
  <body>
    <?php navbar(); ?>
    <div class="page-container">
      <div class="row">
        <div class="col-sm-2 hide-mobile">
          <div class="dashboard-nav">
            <ul>
              <li><a href="dashboard.php">Profile</a></li>
              <li class="active"><a href="subjects.php">Subjects</a></li>
              <li><a href="schedule.php">Schedule</a></li>
              <li><a href="messages.php">Messages</a></li>
              <li><a href="shortlist.php">Shortlist</a></li>
              <li><a href="review.php">Reviews</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="dashboard-content">
            <div class="primary-color uppercase mTop20">Subjects</div>
            <hr/>
            <a href="add-subject.php" class="t-btn primary-btn mBottom20">Add a Subject</a>

            <table class="table table-responsive profile-table table-striped table-hover table-bordered" style="width:100%;">
              <thead>
                <tr>
                  <td>Subject</td>
                  <td>Level</td>
                  <td>Qualification</td>
                  <td>Teaching Since</td>
                  <td>Rate per Session</td>
                  <td>Rate per Month</td>
                  <td>Location</td>
                  <td>Map</td>
                  <td>Calendar</td>
                  <td></td>
                  <td></td>
                </tr>
              </thead>
              <tr class="empty">
                <td colspan="11">
                  <span>You currently have no subjects. Add one?</span>
                  <span><a href="add-subject.php" class="t-btn primary-btn">Add a Subject</a></span>
                </td>
              </tr>
            </table>
            <table class="table table-responsive profile-table table-striped table-hover table-bordered" style="width:100%;">
              <thead>
                <tr>
                  <td>Subject</td>
                  <td>Level</td>
                  <td>Qualification</td>
                  <td>Teaching Since</td>
                  <td>Rate per Session</td>
                  <td>Rate per Month</td>
                  <td>Location</td>
                  <td>Map</td>
                  <td>Calendar</td>
                  <td></td>
                  <td></td>
                </tr>
              </thead>
              <tr>
                <td>English</td>
                <td>Secondary</td>
                <td>Bachelor's</td>
                <td>2001</td>
                <td>250</td>
                <td>1000</td>
                <td>Any</td>
                <td>Map</td>
                <td class="text-center"><a href=""><img src="images/calendar.svg" width="20"></a></td>
                <td class="text-center"><a href="add-subject.php"><img src="images/edit.svg" width="20"></a></td>
                <td class="text-center"><a href=""><img src="images/delete.svg" width="20"></a></td>
              </tr>
              <tr>
                <td>English</td>
                <td>Secondary</td>
                <td>Bachelor's</td>
                <td>2001</td>
                <td>250</td>
                <td>1000</td>
                <td>Any</td>
                <td>Map</td>
                <td class="text-center"><a href=""><img src="images/calendar.svg" width="20"></a></td>
                <td class="text-center"><a href=""><img src="images/edit.svg" width="20"></a></td>
                <td class="text-center"><a href=""><img src="images/delete.svg" width="20"></a></td>
              </tr>
              <tr>
                <td>English</td>
                <td>Secondary</td>
                <td>Bachelor's</td>
                <td>2001</td>
                <td>250</td>
                <td>1000</td>
                <td>Any</td>
                <td>Map</td>
                <td class="text-center"><a href=""><img src="images/calendar.svg" width="20"></a></td>
                <td class="text-center"><a href=""><img src="images/edit.svg" width="20"></a></td>
                <td class="text-center"><a href=""><img src="images/delete.svg" width="20"></a></td>
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
