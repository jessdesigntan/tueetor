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
              <li><a href="add-subject.php">Add Subject</a></li>
              <li><a href="schedule.php">Schedule</a></li>
              <li class="active"><a href="messages.php">Messages</a></li>
              <li><a href="shortlist.php">Shortlist</a></li>
              <li><a href="review.php">Reviews</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="dashboard-content">
            <div class="chat-container">
              <div class="side">
                <div class="search">
                  <form>
                    <input type="text" placeholder="Search a user">
                  </form>
                </div>
                <div class="users">
                  <a class="user active">
                    <div class="image">
                      <img src="images/profile.jpg">
                    </div>
                    <div class="info">
                      <div class="name">Jess Tan</div>
                      <div class="text">Hi, would like to enquire about your Monday nightHi, would like to enquire about your Monday nightHi, would like to enquire about your Monday night</div>
                    </div>
                  </a><!--./user -->
                  <?php for ($i=0; $i<9; $i++) {?>
                  <a class="user">
                    <div class="image">
                      <img src="images/profile.jpg">
                    </div>
                    <div class="info">
                      <div class="name">Jess Tan</div>
                      <div class="text">Hi, would like to enquire about your Monday nightHi, would like to enquire about your Monday nightHi, would like to enquire about your Monday night</div>
                    </div>
                  </a><!--./user -->
                  <?php } ?>
                </div>
              </div>
              <div class="main">
                <div class="header">
                  <div>Conversation with <span class="strong">Jess Tan</span></div>
                  <a href="#" class="archive">archive</a>
                </div>
                <div class="body">
                  <?php for ($i=0;$i<20;$i++) { ?>
                  <div class="message-row to">
                    <div class="message to">
                      <span>This is my seventh text message on ios7This is my seventh text message on ios7This is my seventh text message on ios7This is my seventh text message on ios7This is my seventh text message on ios7This is my seventh text message on ios7</span>
                      <span class="date">17 Jul 2017 | 2.49 PM</span>
                    </div>
                    <div class="image">
                      <img src="images/profile.jpg" width="50">
                    </div>
                  </div>
                  <div class="message-row from">
                    <div class="image">
                      <img src="images/profile.jpg" width="50">
                    </div>
                    <div class="message from">
                      <span>Hello!</span>
                      <span class="date">17 Jul 2017 | 2.49 PM</span>
                    </div>
                  </div>
                  <?php } ?>
                </div>
                <div class="footer">
                  <form class="chat-send">
                    <input type="text" placeholder="Type your message here...">
                    <button type="submit"><img src="images/send.svg"></button>
                  </form>
                </div>
              </div>
            </div>
          </div><!-- ./dashboard-content-->
        </div><!-- ./col-sm-10 -->
      </div><!-- ./row -->
    </div><!--./ page-container -->
    <?php footer(); ?>
  </body>

</html>
