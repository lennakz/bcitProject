<!-- Load init file -->
<?php require "php/init.php"; ?>

<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php require "partials/header.php"; ?>
<!-- End Header -->

  <body>

    <header>

      <!-- Global Navigation -->
      <?php require "partials/globalNavigation.php"; ?>
      <!-- End Global Navigation -->

    </header>

    <main>
      <div class="container-fluid">
        <div class="row">
          <!-- Left space -->
          <div class="col-md-1"></div>

          <!-- Main part -->
          <div class="col-md-10">
            <!-- Side (local) navigation -->
            <div class="col-sm-3 col-xl-2 remove"></div>
            <div id="navbar">
              <?php require "partials/sideNavigation.php"; ?>
            </div>
            <!-- Main contetn -->
            <div class="col-sm-9">
              <div id="content">
                <?php require "partials/content/s" . zeroPad($pageId)  . ".php"; ?>
                <?php require "partials/comments.php"; ?>
              </div>
            </div>
            <!-- End Main content -->
          </div>
          <!-- Right space -->
          <div class="col-md-1"></div>
        </div>
      </div>
    </main>

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
