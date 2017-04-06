<?php include("controllers/template.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <?php head("Tueetor - Search"); ?>
  <body>
    <?php navbar(); ?>
    <div class="search-page">
      <div id="left">
        <div class="lightbg">

          <form class="form-inline">
            <div class="filter-option">
              <div class="row">
                <div class="col-sm-4">
                  <label>I'm looking for</label>
                  <select id="typeSelect" onchange="typeSelected(this);" >
                    <option value="trainers">Trainers</option>
                    <option value="learners">Learners</option>
                  </select>
                </div>
                <div class="col-sm-4">
                  <label>Subject</label>
                  <select>
                    <option>Mathematics</option>
                    <option>English</option>
                  </select>
                </div>
                <div class="col-sm-4">
                  <label>Level</label>
                  <select>
                    <option>Secondary</option>
                  </select>
                </div>
              </div>
            </div><!-- ./row filter-option -->

            <div class="filter-option">
              <div class="row">
                <div class="col-sm-6">
                  <label>Qualification</label>
                  <select>
                    <option>Bachelor's Degree</option>
                    <option>PHD</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label>Teaching Experience</label>
                  <select>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
              </div>
            </div><!-- ./row filter-option -->

            <div class="filter-option budget-row">
              <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <label id="perSession">Budget Per Session</label>
                </div>
                <div class="col-sm-4 col-xs-6 input-field">
                  <input type="text" class="form-control" placeholder="Min">
                </div>
                <div class="col-sm-4 col-xs-6">
                  <input type="text" class="form-control" placeholder="Max">
                </div>
              </div>
            </div>

            <div class="filter-option budget-row">
              <div class="row">
                <div class="col-sm-4 col-xs-12">
                  <label id="perMonth">Budget Per Month</label>
                </div>
                <div class="col-sm-4 col-xs-6 input-field">
                  <input type="text" class="form-control" placeholder="Min">
                </div>
                <div class="col-sm-4 col-xs-6">
                  <input type="text" class="form-control" placeholder="Max">
                </div>
              </div>
            </div>

            <div class="filter-option">
              <div class="row">
                <div class="col-sm-6">
                  <label for="location">Location</label>
                  <input type="text" class="form-control" placeholder="Search location">
                </div>
                <div class="col-sm-6">
                  <label for="exampleInputEmail2">Radius</label>
                  <input type="text" class="form-control" placeholder="250m">
                </div>
              </div>
            </div><!-- ./form-row -->

            <div class="row filter-option button">
              <div class="col-sm-12">
                <a class="primary-btn">Apply Filter</a>
                <a class="secondary-btn">Clear Filters</a>
              </div>
            </div><!-- ./row filter-option -->
          </form>

        </div><!-- end of filters -->
        <div class="listing">
          <h4>Showing 24 <span id="resultsLabel">trainers</span> available</h4>
          <?php listingCard(0); ?>
          <?php listingCard(3); ?>
          <?php listingCard(4); ?>
          <?php listingCard(0); ?>
          <?php listingCard(5); ?>
        </div>


      </div><!-- end of left -->

      <div id="right" class="hide-mobile">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.837335028324!2d103.67679595!3d1.3509344500000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc981e1a4e1debbed!2sNTU+Hall+of+Residence+3!5e0!3m2!1sen!2ssg!4v1487679751040" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    <script>
      $(document).ready(function() {
        var typeSelected = $("#typeSelect").val();
        if (typeSelected == "trainers") {
          trainerSelected();
        }
        else {
          learnerSelected();
        }
      });

      function typeSelected(e) {
        if (e.value == "trainers") {
          trainerSelected();
        }
        else {
          learnerSelected();
        }
      }

      function trainerSelected() {
        $("#perSession").text("Rates Per Session");
        $("#perMonth").text("Rates Per Month");
        $("#resultsLabel").text("trainers");
      }

      function learnerSelected() {
        $("#perSession").text("Budget Per Session");
        $("#perMonth").text("Budget Per Month");
        $("#resultsLabel").text("learners");
      }


    </script>

  </body>
</html>
