<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Profile"); ?>
  <body>
    <?php navbar(); ?>
    <div class="page-container">
      <div class="profile-block">
        <div class="title">
        <div class="trainer label">Trainer's Profile</div></div>
        <div class="body">
          <div class="row">
            <div class="col-sm-2">
              <img class="profile-img img-responsive" src="images/profile.jpg">
            </div>
            <div class="col-sm-10 user-info">
              <div class="mTop20"></div>
              <h1>Kourtney Seah, 22</h1>
              <p>Female</p>
              <a href="#" class="t-btn secondary-btn">Message Tutor</a>
              <hr/>
              <p>"Enjoy reading broadly, professionally and generally. My emphasis is to help students in the application side of the knowledge learned, Students learn well when presented with alternative solutions and flexibility. A relax learning atmosphere greatly improves understanding and grades, I do provide inputs to projects and assignments."</p>
              <hr/>
            </div>
          </div>
        </div>
      </div>
      <!-- ./END of User Information -->

      <div class="profile-block">
        <div class="title">Document Library</div>
        <div class="body">
          <div class="row">
            <div class="col-sm-12 section">
              <ul>
                <li><a href="#">O level Cert</a></li>
                <li><a href="#">O level Cert</a></li>
                <li><a href="#">O level Cert</a></li>
                <li class="verified"><a href="#">O level Cert</a></li>
                <li><a href="#">O level Cert</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- ./END of Document Library -->

      <div class="profile-block table">
        <div class="title">Subject Offered</div>
        <table class="table table-hover table-bordered">
          <thead class="primary-color">
            <td>SUBJECT</td>
            <td>LEVEL</td>
            <td>QUALIFICATION</td>
            <td>TEACHING</td>
            <td>EXPERIENCE (Y)</td>
            <td>PER SESSION</td>
            <td>PER MONTH</td>
            <td>ABILITY TO TRAVEL</td>
            <td>MAP</td>
            <td>SCHEDULE</td>
          </thead>
          <tr>
            <td>Economics</td>
            <td>Polytechnic</td>
            <td>Degree</td>
            <td>5</td>
            <td>5 (Y)</td>
            <td>70</td>
            <td>280</td>
            <td>Anywhere</td>
            <td><a href="#" class="glyphicon glyphicon-map-marker"></a></td>
            <td><a href="#" class="glyphicon glyphicon-calendar"></a></td>
          </tr>
          <tr>
            <td>Economics</td>
            <td>Polytechnic</td>
            <td>Degree</td>
            <td>5</td>
            <td>5 (Y)</td>
            <td>70</td>
            <td>280</td>
            <td>Anywhere</td>
            <td><a href="#" class="glyphicon glyphicon-map-marker"></a></td>
            <td><a href="#" class="glyphicon glyphicon-calendar"></a></td>
          </tr>
          <tr>
            <td>Economics</td>
            <td>Polytechnic</td>
            <td>Degree</td>
            <td>5</td>
            <td>5 (Y)</td>
            <td>70</td>
            <td>280</td>
            <td>Anywhere</td>
            <td><a href="#" class="glyphicon glyphicon-map-marker"></a></td>
            <td><a href="#" class="glyphicon glyphicon-calendar"></a></td>
          </tr>
        </table>
      </div>
      <!-- ./END of Subject Offered -->


      <div class="profile-block table">
        <div class="title">
          Available Schedule
          <a style="marign-left:10px;" href="#" class="glyphicon glyphicon-info-sign"></a>
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

      <div class="text-center">
        <a href="#" class="t-btn secondary-btn">Message Tutor</a>
        <a href="#" class="t-btn light-btn">Report Inappropriate</a>
      </div>
      <!-- ./END of Available Schedule -->

    </div><!--./ page-container -->
    <?php footer(); ?>
  </body>

</html>
