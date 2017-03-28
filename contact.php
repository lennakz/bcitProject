<!-- Load init file -->
<?php require "php/init.php"; ?>

<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php require "partials/header.php"; ?>
<!-- End Header -->

  <body>

    <!-- Global Navigation -->
    <?php require "partials/globalNavigation.php"; ?>
    <!-- End Global Navigation -->

    <div class="container-fluid" style="padding-top: 70px">
      <div class="row">
        <!-- Left space -->
        <div class="col-md-1"></div>

        <!-- Main part -->
        <div class="col-md-10">
          <h1 class="text-center contact-text">Contact Teachers</h1>
          <div class="container">
            <p class="text-center">If you have any question you can contact your teacher using phone/email or you can fill out this form.</p>
            <br><br>
            <form class="form-horizontal" action="php/contact.php">
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="student_number">Student #:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="student_number" name="student_number" placeholder="Enter your student number">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="question">Question:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="question" name="question" placeholder="Enter your questions/comments">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Send Email</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- Right space -->
        <div class="col-md-1"></div>
      </div>
    </div>

    <!-- Scroll to top button -->
    <div class="scroll-to-top">
      <a href="#"><span class="glyphicon glyphicon-upload"></span></a>
    </div>
    <!-- End Scroll to top button -->

    <!-- Footer -->
    <?php require "partials/footer.php"; ?>
    <!-- End Footer -->

  </body>

</html>
