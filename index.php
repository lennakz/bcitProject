
<!DOCTYPE html>

<html>

<head>
	<title>Project Introduction - bcitcomp 1950</title>
	<meta charset = "utf-8">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="css/html5reset.css">
	<link rel="stylesheet" type="text/css" href="css/metaStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('nav a').click(function(){
		    $('html, body').stop().animate({
		        scrollTop: $( $(this).attr('href') ).offset().top
		      }, 800);
		    return false;
		  });
		});
	</script>
</head>


<body>
	<div class="wrapper">

		<div class="parallax parallax_1">

			<div class="caption heading">
				<h1>INTRODUCTION SITE</h1>

				<nav id="menu">
					<a href=#about-heading>About Us</a>
					<a href=#project-sample-heading>Project Sample</a>
					<a href=#improvements-heading>Improvements</a>
					<a href=#sitemap-heading>Site Map</a>
					<a href=#contact-heading>Contact</a>
				</nav>
			</div>

			<img id="intro-img" draggable="false" src="http://bcitcomp.ca/students/ddimchuk/homepage/project/meta/images/meta-img.png" alt="Simple effective design by Mykola, Daria, Ken - BCIT COMP 1950">

			<div id="about-heading" class="section-title"  style="top: 92%;">
				<h1>ABOUT THE TEAM</h1>
			</div>
		</div>


		<div class="content">

			<div>
				<h2>About the Team</h2>
				<br><hr>

				<p>Mykola Kotok, Daria Dimchuk, Ken Li</p>
				<br>
				<p>Together we created a new modern design for BCIT's 1950 website. <br>Below you will find the distribution of work, and what design element each developer was responsible for.</p>
				<br><br>

				<table id="about-table">
				  <tr style="background-color: #cccccc;">
					<th>Mykola</th>
					<th>Daria</th>
					<th>Ken</th>
				  </tr>
				  <tr>
					<td>Bootstrap client website</td>
					<td>Meta website HTML and CSS</td>
					<td>Site Map Design</td>
				  </tr>
				  <tr>
					<td>PHP website programming</td>
					<td>Client website CSS</td>
					<td>JavaScript / JQuery functionality</td>
				  </tr>
				  <tr>
					<td>Menu design for web/mobile</td>
					<td>Layout design / bug fixes</td>
					<td style="text-align: center;">--</td>
				  </tr>
					<tr>
					<td>Projector View design</td>
					<td>Print View CSS/button functionality</td>
					<td style="text-align: center;">--</td>
				  </tr>
				</table>
			</div>
		</div>


		<div class="parallax parallax_5">

			<div id="project-sample-heading" class="section-title" style="top: 84%;">
				<h1>PROJECT SAMPLE</h1>
			</div>

		</div>


		<div class="content">
			<div>
				<p>Below is the link to an improved bcitcomp1950 website.</p>
				<br>

				<a href="https://bcit-project.herokuapp.com/about.php">https://bcit-project.herokuapp.com/about.php</a>
				<br><br>

				<p>Alternative link.</p>
				<br>

				<a href="http://bcitcomp.ca/students/mkotok/bcitProject/about.php">http://bcitcomp.ca/students/mkotok/bcitProject/about.php</a>

				<br><br><p>As a sample, we've completed 5 pages: About, Resources, Contact, and Lectures 1 and 3.
				<br><br>Additionally, we've included a print style and a projector-view option.</p>
				<br><br><br>
				<p>To see the developing process check our <a href="https://github.com/lennakz/bcitProject" target="_blank">GitHub</a> account.</p>
			</div>
		</div>


		<div class="parallax parallax_2">

			<div id="improvements-heading" class="section-title" style="top: 84%;">
				<h1>IMPROVEMENTS</h1>
			</div>
		</div>


		<div class="content">

			<div>
				<p>Here we would like to detail the improvements we've made to your website.</p>
				<br><br>

				<table id="improvements-table">

				  <tr style="background-color: #cccccc;"><th>Improvements</th></tr>

				  <tr><td>A simple modern design, without dotted borders or background images, gives the website a sleek look.</td></tr>

				  <tr><td>More whitespace allows for easier readability by users and students.</td></tr>

				  <tr><td>Easier navigation menus break up the content and make it more accessible.</td></tr>

				  <tr><td>Lectures now have content tabs, which allow users to quickly switch between the lecture content, exercises, homework, a summary, and resources without the need for scrolling.</td></tr>

				  <tr><td>Menu includes links to other BCIT sites, allowing students to quickly navigate back to D2L, or the main BCIT website.</td></tr>

				  <tr><td>Print and Projector buttons allow students to quickly print a lecture, or for instructors to show the lecture in a projector view for the whole class.</td></tr>

					<tr>
						<td>All webpages made with small pieces of php code, so if you need to make any changes to menus, you need to change only one file. Tryed to apply DRY principle.</td>
					</tr>

					<tr>
						<td>For Projector view we used jQuery plugin called Reveal.js. It makes presentation nice and easy.</td>
					</tr>

				</table>

				<br><br>
				<h3>Additional Information</h3>
				<br>
				<ul style="text-align: left">
					<li>All website parts placed in Partials folder. It contains menus, content for each lecture</li>
					<br>
					<li>Php folder contains data.php, which includes array with lecture number and lecture name, contact.php, which is action for the form from contact page. If you change email in $to variable to your email you will recieve emails from this form.</li>
					<br>
					<li>To apply jQuery plugin Reveal.js we have to use jQuery and delete some tags after you click on Projector button.</li>
					<br>
					<li>We used GitHub and Heroku for developing and hosting website during developing.</li>

				</ul>

			</div>
		</div>



		<div class="parallax parallax_3">

			<div id="sitemap-heading" class="section-title" style="top: 84%;">
				<h1>SITE MAP</h1>
			</div>
		</div>


		<div class="content">

			<div>

				<p>Here, you will find the site map for www.bcitcomp.ca/1950</p>
				<br>
				<p>All the links, and connections in the menu are shown below.</p>

				<br>

				<img id="sitemap-img" src="http://bcitcomp.ca/students/ddimchuk/homepage/project/meta/images/SiteMap-bcitcomp1950.jpg" alt="site map for bcitcomp.ca/1950">
			</div>

		</div>


		<div class="parallax parallax_4">

			<div id="contact-heading" class="section-title" style="top: 84%;">
				<h1>CONTACT</h1>
			</div>
		</div>


		<div class="content">
			<div>

				<p>Contact us if you have any questions regarding our design, or would like to see our other projects.</p>
				<br><br>

				<div>
					<table id="contact-table">
					  <tr>
						<th>Mykola</th>
						<th>Daria</th>
						<th>Ken</th>
					  </tr>
					  <tr>
						<td><a href="https://mail.google.com/mail/?view=cm&fs=1&to=mykola.kotok@gmail.com">Email Mykola</a></td>
						<td><a href="https://mail.google.com/mail/?view=cm&fs=1&to=daria.dimchuk@gmail.com">Email Daria</a></td>
						<td><a href="https://mail.google.com/mail/?view=cm&fs=1&to=kenli778879@gmail.com">Email Ken</a></td>
					  </tr>
					  <tr>
						<td><a href="https://github.com/lennakz">Mykola Github</a></td>
						<td><a href="https://github.com/DariaDimchuk">Daria Github</a></td>
						<td><a href="https://github.com/lzklb">Ken Github</a></td>
					  </tr>

					</table>
				</div>

			</div>
		</div>


		<div class="parallax parallax_1" style="min-height: 500px;">

		</div>
	</div>



	<footer>
		<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fbcit-project.herokuapp.com%2F">HTML validator</a>
		<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fbcit-project.herokuapp.com%2F&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en">CSS validator</a>
	</footer>

</body>


</html>
