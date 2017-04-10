<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Trainer Sign up"); ?>
  <body>
    <?php navbar(); ?>
    <div class="page-container register-container">
      <p class="lead">You are signing up as a <strong><span class="primary-color">Trainer</span></strong></p>

      <form action="index.php" class="form-style">
        <div>
          <label>Email Address</label>
          <input type="text" class="form-control">
        </div>

        <div>
          <label>Password</label>
          <input type="password" class="form-control">
        </div>

        <div>
          <label>Confirm Password</label>
          <input type="password" class="form-control">
        </div>

        <div>
          <label>Title</label>
          <select class="form-control">
            <option>Mr.</option>
          </select>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <label>First Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-sm-6">
            <label>Last Name</label>
            <input type="text" class="form-control">
          </div>
        </div>

        <div>
          <label>Display Name</label>
          <input type="text" class="form-control">
        </div>
        <hr/>
        <div>
          <label>Address 1</label>
          <input type="text" class="form-control">
        </div>

        <div>
          <label>Address 2</label>
          <input type="text" class="form-control">
        </div>

        <div>
          <label>Country</label>
          <select class="form-control">
            <option>Select Country</option>
            <option>Singapore</option>
          </select>
        </div>

        <div>
          <label>Postal Code</label>
          <input type="text" class="form-control">
        </div>
        <hr/>
        <div>
          <label>Contact Number</label>
          <input type="text" class="form-control">
        </div>

        <div class="row">
          <div class="col-sm-12">
            <label>Date of Birth</label>
          </div>
          <div class="col-sm-3">
            <select class="form-control">
              <option>Day</option>
            </select>
          </div>
          <div class="col-sm-6">
            <select class="form-control">
              <option>Month</option>
            </select>
          </div>
          <div class="col-sm-3">
            <select class="form-control">
              <option>Year</option>
            </select>
          </div>
        </div>

        <div>
          <label>Gender</label><br/>
          <input type="radio" name="gender"> Male<br/>
          <input type="radio" name="gender"> Female
        </div>
        <hr/>
        <div>
          <label>Profile Image</label>
          <input type="file">
        </div>
        <hr/>
        <label><input type="checkbox"> By creating the account, I under and agree with Tueetor.com's <a href="#" class="primary-color">Terms of Service</a> & <a href="#" class="primary-color">Privacy Policy</a>.</label>

        <button type="submit" class="btn primary-btn btn-block">Sign Up</button>
      </form>
    </div>
  </body>

</html>
