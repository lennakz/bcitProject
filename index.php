
<!DOCTYPE html>

<html>

<head>
	<title>Project Introduction - bcitcomp 1950</title>
	<meta charset = "utf-8">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="css/html5reset.css">

	<style>

	html, body, .wrapper{
		height: 100%;
		min-height: 100%;
		margin: 0;

		letter-spacing: 1px;
		font-size: 20px;
		font-family: sans-serif;
	}

	.parallax{
		position: relative;
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;

		transform: translateZ(0);
	}


	.parallax_1{
		min-height: 100%;
		background-image: url('http://bcitcomp.ca/students/ddimchuk/homepage/project/meta/images/bcit-transparent.jpg');
	}

	.parallax_2{
		min-height: 50%;
		background-image: url('http://bcitcomp.ca/students/ddimchuk/homepage/project/meta/images/code-transparent.jpg');

	}


	.parallax_3{
		min-height: 50%;
		background-image: url('http://bcitcomp.ca/students/ddimchuk/homepage/project/meta/images/connection-transparent.jpg');

	}

	.parallax_4{
		min-height: 50%;
		background-image: url('http://bcitcomp.ca/students/ddimchuk/homepage/project/meta/images/contact-img-transparent.jpg');
	}

	.parallax_5{
		min-height: 50%;
		background-image: url('http://bcitcomp.ca/students/ddimchuk/homepage/project/meta/images/project-sample-transparent.jpg');
	}

	img{
		left: 0;
		right: 0;
		margin: auto;
	}

	#intro-img{
		max-height: 450px;
		position: absolute;
		top: 10%;
		bottom: 0;
	}


	#sitemap-img{
	    width: auto;
		max-width: 95%;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		margin-top: 30px;
	}


	#menu{
		display: block;
		background: white;
		position: absolute;
		width: 100%;
		left: 0px;
		height: 55px;
		overflow: hidden;
	}

	#menu a{
		padding: 20px 10px;
		margin-right: 15px;
		color: rgb(68, 135, 219);
		font-size: 15px;
		font-weight: bold;
		font-family: arial,sans-serif;
		letter-spacing: 0.5px;
	}

	#menu a:visited{
		color: rgb(41, 96, 167);
	}


	#menu a:hover{
		background-color: #e6e6e6;
		transition: background-color 0.8s;
	}

	.caption{
		font-size: 40px;
		letter-spacing: 6px;
		background-color: rgb(0, 62, 107);
		padding: 15px;
		text-align: center;

		font-family:'Calibri Light','Gill Sans','Open Sans',Geneva,Helvetica,Arial,sans-serif;
		color: white;
	}

	.caption.intro{
		position: absolute;
		top: 40%;
		left: 35%;
		width: 30%;
		font-size: 50px;
	}

	.caption.heading h1{
		font-size: 50px;
		padding: 25px;
		font-family: 'Calibri Light','Gill Sans','Open Sans',Geneva,Helvetica,Arial,sans-serif;
		font-weight: normal;
	}

	.section-title h1{
		font-weight: normal;
	}


	.content{
		background-color: white;
		padding-right: 15%;
		padding-left: 15%;
		padding-top: 5%;
		padding-bottom: 5%;
		text-align: center;
		position: relative;
		font-family:'Calibri Light','Gill Sans','Open Sans',Geneva,Helvetica,Arial,sans-serif;

	}


	footer{
		position: fixed;
		height: 45px;
		width: 100%;
		text-align: center;
		font-size: 15px;
		padding: 15px 0 4px 0;
		background-color: rgb(0, 62, 107);

		bottom: 0;

	}

	footer a{
		padding-right: 30px;
		text-align: center;
		font-family:'Calibri Light','Gill Sans','Open Sans',Geneva,Helvetica,Arial,sans-serif;
		color: white;
	}


	.section-title{
		position: absolute;
		padding: 20px;
		width: 100%;
		left: 0;
		top: 92%;

		font-size: 40px;
		letter-spacing: 6px;
		background-color: rgb(0, 62, 107);
		text-align: center;
		font-family:'Calibri Light','Gill Sans','Open Sans',Geneva,Helvetica,Arial,sans-serif;
		color: white;

	}


	table {
		font-family: 'Calibri Light','Gill Sans','Open Sans',Geneva,Helvetica,Arial,sans-serif;
		border-collapse: collapse;
		text-align: center;

		width: auto;
		left: 0;
		right: 0;
		margin: auto;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	#improvements-table td, th{
		text-align: center;
	}

	#about-table  tr:nth-child(odd), #improvements-table tr:nth-child(odd) {
		background-color: #f2f2f2;
	}

	#contact-table * td, th {
		border: 1px solid white;
		text-align: center;
	}

	</style>


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

			<img id="intro-img" draggable="false" src="http://bcitcomp.ca/students/ddimchuk/homepage/project/meta/images/img-test.png" alt="Simple effective design by Mykola, Daria, Ken - BCIT COMP 1950">

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
					<td>Client website additional CSS</td>
					<td>ken placeholder</td>
				  </tr>
				  <tr>
					<td>mykola placeholder</td>
					<td>daria placeholder</td>
					<td>ken placeholder</td>
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

				<a href="https://bcit-project.herokuapp.com/">https://bcit-project.herokuapp.com/</a>
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
				<!--
				<p>More whitespace allows for easier readability by users and students.</p>
				<br>
				<p>More modern design, without dotted borders or background images, gives the website a sleek look.</p>
				<br>
				<p>Easier navigation menus break up the content and make it more accessible. <br> Removes the need for endless scrolling with the content tabs. Allows instant access to lecture content, homework, exercises, and code examples.</p>

				-->
				<table id="improvements-table">
				  <tr style="background-color: #cccccc;">
					<th>Improvements</th>
				  </tr>
				  <tr>
					<td>More whitespace allows for easier readability by users and students.</td>
				  </tr>
				  <tr>
					<td>More modern design, without dotted borders or background images, gives the website a sleek look.</td>
				  </tr>
				  <tr>
					<td>Easier navigation menus break up the content and make it more accessible. <br> Removes the need for endless scrolling with the content tabs. Allows instant access to lecture content, homework, exercises, and code examples.</td>
				  </tr>
				</table>


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

				<img id = "sitemap-img" src="http://bcitcomp.ca/students/ddimchuk/homepage/project/meta/images/sitemap-sample.jpg" alt="site map for bcitcomp.ca/1950">
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
						<td>ken placeholder</td>
					  </tr>

					</table>
				</div>



			</div>


		</div>


		<div class="parallax parallax_1" style="min-height: 500px;">

		</div>





	</div>

	<footer>
		<a href="https://validator.w3.org/check?uri=http%3A%2F%2Fbcitcomp.ca%2Fstudents%2Fddimchuk%2Fhomepage%2Fproject%2Fmeta%2Fproject-introduction.html&charset=%28detect+automatically%29&doctype=Inline&group=0">HTML validator</a>
		<a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fbcitcomp.ca%2Fstudents%2Fddimchuk%2Fhomepage%2Fproject%2Fmeta%2Fproject-introduction.html&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en">CSS validator</a>
	</footer>


</body>




</html>
