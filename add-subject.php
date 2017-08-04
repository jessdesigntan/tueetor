<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Add Subject"); ?>
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
            <a href="subjects.php" class="back-link small uppercase">Back to subjects</a>
            <div class="primary-color uppercase mTop20">Add Subject</div>
            <hr/>

            <form class="form-style add-subject">
              <div class="row">
                <div class="col-sm-6">
                  <div>
                    <label>Subject</label>
                    <div class="tooltip">
                      <span class="glyphicon glyphicon-info-sign"></span>
                      <span class="tooltiptext">Select a subject you would like to teach. To add a new subject, click “+”.</span>
                    </div>
                    <input type="text">
                  </div>
                  <div>
                    <label>Level</label>
                    <div class="tooltip">
                      <span class="glyphicon glyphicon-info-sign"></span>
                      <span class="tooltiptext">Select the level of this subject you would like to teach.</span>
                    </div>
                    <select>
                      <option>level</option>
                    </select>
                  </div>
                  <div>
                    <label>Qualification</label>
                    <div class="tooltip">
                      <span class="glyphicon glyphicon-info-sign"></span>
                      <span class="tooltiptext">Select the highest qualification you have attained or like to be recognised for this subject. A well-qualified tutor may be more sought after.</span>
                    </div>
                    <select>
                      <option>Qualification</option>
                    </select>
                  </div>
                  <div>
                    <label>Teaching Since</label>
                    <div class="tooltip">
                      <span class="glyphicon glyphicon-info-sign"></span>
                      <span class="tooltiptext">Select the year you first taught this subject. An experienced tutor may be more sought after.</span>
                    </div>
                    <select>
                      <option>Teaching Since</option>
                    </select>
                  </div>
                  <div>
                    <label>Rate (in your currency)</label>
                    <div class="tooltip">
                      <span class="glyphicon glyphicon-info-sign"></span>
                      <span class="tooltiptext">Enter the minimum amount you are able to accept for this subject. You may specify per session, per month, or both.</span>
                    </div>
                    <br/>
                    <input type="text" class="inline-input" placeholder="Per Session">
                    -
                    <input type="text" class="inline-input" placeholder="Per Month">
                  </div>
                </div><!-- ./col-sm-6 left side of form-->

                <div class="col-sm-6">
                  <div>
                    <label>Preferred Location</label>
                    <div class="tooltip">
                      <span class="glyphicon glyphicon-info-sign"></span>
                      <span class="tooltiptext">Enter the location you would like to teach at: “Any Location”, if you do not mind travelling; “Set Location”, if you prefer a particular venue (eg. home), and enter the maximum distance you are able to travel from this venue (“0” = unable to). Usually, the more flexible you are, the sooner you would find THAT student. For privacy reasons, Tueetor never discloses your exact address.</span>
                    </div>
                    <br/>
                    <div class="row">
                      <div class="col-sm-6">
                        <label class="radio"><input type="radio" id="anyLocation" name="location"><span class="outer"><span class="inner"></span></span>Any Location</label>
                      </div>
                      <div class="col-sm-6">
                        <label class="radio"><input type="radio" id="setLocation" name="location"><span class="outer"><span class="inner"></span></span>Set Location</label>
                      </div>
                    </div>
                  </div><!-- ./ location -->

                  <div id="setLocationDiv">
                    <label>Address</label>
                    <a class="glyphicon glyphicon-map-marker"></a>
                    <textarea rows="3" placeholder="Enter Postal Code, Street, Building Name, etc"></textarea>

                    <input type="text" placeholder="Enter Distance (in Meter). 0 = Unable to Travel">
                  </div>

                  <div class="timeslot">
                    <label>Preferred Time</label>
                    <div class="tooltip">
                      <span class="glyphicon glyphicon-info-sign"></span>
                      <span class="tooltiptext">Enter the location you would like to teach at: “Any Location”, if you do not mind travelling; “Set Location”, if you prefer a particular venue (eg. home), and enter the maximum distance you are able to travel from this venue (“0” = unable to). Usually, the more flexible you are, the sooner you would find THAT student. For privacy reasons, Tueetor never discloses your exact address.</span>
                    </div>
                    <input type="text" readonly="readonly" placeholder="0 Slots selected">
                    <a href="#"></a>
                  </div>

                  <div>
                    <label><input type="checkbox" value="active">Active</label>
                    <div class="tooltip">
                      <span class="glyphicon glyphicon-info-sign"></span>
                      <span class="tooltiptext">Enter the location you would like to teach at: “Any Location”, if you do not mind travelling; “Set Location”, if you prefer a particular venue (eg. home), and enter the maximum distance you are able to travel from this venue (“0” = unable to). Usually, the more flexible you are, the sooner you would find THAT student. For privacy reasons, Tueetor never discloses your exact address.</span>
                    </div>
                  </div>
                  <button type="submit" class="btn primary-btn">Submit</button>
                </div><!-- ./col-sm-6 right side of form-->
              </div>
            </form>
          </div>
        </div><!-- ./col-sm-10 -->
      </div><!-- ./row -->
    </div><!--./ page-container -->
    <?php footer(); ?>

    <script>
      $("#setLocationDiv").hide();

      $("#setLocation").click(function() {
        $("#setLocationDiv").fadeIn();
      });

      $("#anyLocation").click(function() {
        $("#setLocationDiv").fadeOut();
      });
    </script>
  </body>

</html>
