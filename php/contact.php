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
          <div class="col-md-2"></div>

          <!-- Main part -->
          <div class="col-md-8">
            <!-- Side (local) navigation -->
						<h1>Thank you!</h1>
						<h3>We will contact you as soon as possible.</h3>
            <!-- End Main content -->
          </div>
          <!-- Right space -->
          <div class="col-md-2"></div>
        </div>
      </div>
    </main>

		<?php
			$result = '';
			if (isset($_POST["submit"])) {
				$name = $_POST['name'];
				$student_number = $_POST['student_number'];
				$email = $_POST['email'];
				$question = $_POST['question'];
				$from = 'Website Client';
				$to = 'lennakz@gmail.com';
				$subject = 'Message from Website';

				$body = "From: $name\n\n Student Number: $student_number\n\n E-Mail: $email\n\n Question:\n $question";

				// Check if name has been entered
				if (!$_POST['name']) {
					$errName = 'Please enter your name';
				}

				// Check if email has been entered and is valid
				if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$errEmail = 'Please enter a valid email address';
				}

				//Check if student number has been entered
				if (!$_POST['student_number']) {
					$errStudentNumber = 'Please enter your message';
				}

				//Check if message has been entered
				if (!$_POST['question']) {
					$errQuestion = 'Please enter your message';
				}

				// If there are no errors, send the email
				if (!$errName && !$errEmail && !$errStudentNumber && !$errQuestion) {
					if (mail ($to, $subject, $body, $from)) {
						$result='<h1>Thank you for your business!</h1><h3>You request has been submitted.</h3><h3>We will contact you as soon as possible!</h3>';
					} else {
						$result='<h1>Sorry! We have problems.</h1><h3>We will fix it as soon as possible</h3><h3>Please try later!</h3>';
					}
				}
			}
		?>

		<!-- Footer -->
    <?php require "partials/footer.php"; ?>
    <!-- End Footer -->

	</body>

</html>
