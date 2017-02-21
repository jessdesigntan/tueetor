<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Search"); ?>
  <body>
    <?php navbar(); ?>
    <div class="search-page">
      <div id="left">
        <form class="form-inline">
          <div class="form-row">
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" class="form-control" placeholder="Search location">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Radius</label>
              <input type="text" class="form-control" placeholder="250m">
            </div>
          </div>
          <div class="row filter-option">
            <div class="col-sm-4">
              <select>
                <option>level</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select>
                <option>teaching experience</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select>
                <option>qualifications</option>
              </select>
            </div>
          </div>
        </form>
      </div><!-- end of left -->

      <div id="right" class="hide-mobile">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.837335028324!2d103.67679595!3d1.3509344500000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc981e1a4e1debbed!2sNTU+Hall+of+Residence+3!5e0!3m2!1sen!2ssg!4v1487679751040" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

  </body>
</html>
