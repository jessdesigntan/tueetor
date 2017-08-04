<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Edit Profile"); ?>
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
            <div class="primary-color uppercase mTop20">Edit Profile</div>
            <!-- ./END of User Information -->
            <hr/>
            <form class="form-style add-subject">
              <div class="row">
                <div class="col-sm-6">
                  <img class="profile-img thumb100-round" src="images/profile.jpg">
                  <div class="form-group">
                    <input type="file" name="img[]" class="file">
                    <div class="input-group col-xs-12">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                      <input type="text" class="form-control input" disabled placeholder="Upload Image">
                      <span class="input-group-btn">
                        <button class="browse btn btn-success input" type="button">Browse</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <label>Description</label>
                  <textarea rows="5">Enjoy reading broadly, professionally and generally. My emphasis is to help students in the application side of the knowledge learned, Students learn well when presented with alternative solutions and flexibility. A relax learning atmosphere greatly improves understanding and grades, I do provide inputs to projects and assignments.</textarea>
                </div>
              </div>
              <hr/>
              <div class="row">
                <div class="col-sm-6">
                  <div>
                    <label>First Name</label>
                    <input type="text">
                  </div>
                  <div>
                    <label>Last Name</label>
                    <input type="text">
                  </div>
                  <div>
                    <label>Display Name</label>
                    <input type="text">
                  </div>
                  <div>
                    <label>Contact Number</label>
                    <input type="text">
                  </div>
                  <div>
                    <label>Date of Birth</label>
                    <div class="row">
                      <div class="col-sm-4">
                        <select>
                          <option>Day</option>
                        </select>
                      </div>
                      <div class="col-sm-4">
                        <select>
                          <option>Month</option>
                        </select>
                      </div>
                      <div class="col-sm-4">
                        <select>
                          <option>Year</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div>
                    <label>Gender</label>
                    <div class="row">
                      <div class="col-sm-6">
                        <label class="radio"><input type="radio" name="gender"><span class="outer"><span class="inner"></span></span>Female</label>
                      </div>
                      <div class="col-sm-6">
                        <label class="radio"><input type="radio" name="gender"><span class="outer"><span class="inner"></span></span>Male</label>
                      </div>
                    </div>
                  </div><!-- ./ location -->
                  <div>
                    <label>Address 1</label>
                    <input type="text">
                  </div>
                  <div>
                    <label>Address 2</label>
                    <input type="text">
                  </div>
                  <div>
                    <label>Country</label>
                    <select>
                      <option>Singapore</option>
                    </select>
                  </div>
                  <div>
                    <label>Postal Code</label>
                    <input type="text">
                  </div>
                </div>
              </div><!-- ./row -->
            <hr/>
            <div class="row">
              <div class="col-sm-6">
                <div class="primary-color uppercase mBottom20">Upload Documents</div>
                <div class="form-group">
                  <input type="file" name="img[]" class="file">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control input" disabled placeholder="Upload Supporting Document">
                    <span class="input-group-btn">
                      <button class="browse btn btn-success input" type="button">Browse</button>
                    </span>
                  </div>
                </div>
                <input type="text" placeholder="Description here">
                <button type="button" class="t-btn btn secondary-btn mTop20">Add</button>
              </div>
              <div class="col-sm-6">
                <table class="table table-responsive profile-table table-striped" style="width:100%">
                  <thead>
                    <tr>
                      <td colspan="3">Document Library</td>
                    </tr>
                  </thead>
                  <tr>
                    <td><a href="#">O level Cert</a></td>
                    <td class="primary-color"></td>
                    <td><a href="#">Delete</a></td>
                    <td>
                  </tr>
                  <tr>
                    <td><a href="#">O level Cert</a></td>
                    <td class="primary-color">Verified</td>
                    <td><a href="#">Delete</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">O level Cert</a></td>
                    <td class="primary-color"></td>
                    <td><a href="#">Delete</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">O level Cert</a></td>
                    <td class="primary-color">Verified</td>
                    <td><a href="#">Delete</a></td>
                  </tr>
                </table>
                <!-- ./END of Document Library -->
              </div><!-- ./col-sm-6-->
              <hr/>
            </div><!--./row-->
            <div class="row">
              <div class="col-sm-12 no-border">
                <hr/>
                <button type="submit" class="btn primary-btn float-right">Save Changes</button>
              </div>
            </div>
          </form>
        </div><!-- ./col-sm-10 -->
      </div><!-- ./row -->
    </div><!--./ page-container -->
    <?php footer(); ?>
    <script>
    $(document).on('click', '.browse', function(){
      var file = $(this).parent().parent().parent().find('.file');
      file.trigger('click');
    });
    $(document).on('change', '.file', function(){
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
    </script>
  </body>

</html>
