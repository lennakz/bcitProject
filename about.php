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

    <div class="container-fluid" style="padding-top: 40px">
      <div class="row">
        <!-- Left space -->
        <div class="col-md-3"></div>
        <!-- Main part -->
        <div class="col-md-6">
          <h1>Course Information</h1>
      		<h2>Place &amp; time</h2>
      		<p>See <a href="http://www.bcit.ca/study/courses/comp1950">BCIT's COMP 1950 page</a> for the current course room and any applicable holiday schedules.</p>
      		<h2>Format</h2>
      		<p>Attendance is mandatory for all sessions of COMP 1950.</p>
      		<p>Each COMP 1950 session runs for 3 hours, and will include the following:</p>
      		<dl>
      			<dt>2.5 hours</dt>
      			<dd>
      				<ul>
      					<li>quiz</li>
      					<li>lecture</li>
      					<li>code walkthroughs</li>
      					<li>in class exercises</li>
      					<li>15 minute break</li>
      				</ul>
      			</dd>
      			<dt>.5 hours</dt>
      			<dd>
      				<ul>
      					<li>homework assignment</li>
      					<li>q &amp; a</li>
      				</ul>
      			</dd>
      		</dl>
      		<h2>Evaluation</h2>
      		<table width="60%" cellspacing="3" cellpadding="4" border="0">
      			<tr>
      			    <td><b>Description</b></td><td>&nbsp;</td><td><b>Due</b></td><td>&nbsp;</td><td><b>Worth</b></td>
      			</tr>
      			<tr>
      			    <td>Homework (9 in total)</td><td> - </td><td>Daily</td><td> - </td><td><b>35%</b></td>
      			</tr>
      			<tr>
      			    <td>Quizzes (8 in total)</td><td> - </td><td>Various</td><td> - </td><td><b>20%</b></td>
      			</tr>
      			<tr>
      			    <td>Group Project</td><td> - </td><td>Session 12</td><td> - </td><td><b>20%</b></td>
      			</tr>
      			<tr>
      			    <td>Final Exam</td><td> - </td><td>Session 12</td><td> - </td><td><b>25%</b></td>
      			</tr>
      		</table>
      		<h2>Requirements</h2>
      			<p>Completion of <a href="http://www.bcit.ca/study/courses/comp1850">COMP1850</a> or equivalent is required before beginning COMP1950.</p>
      			<p>Students taking COMP1950 must have solid foundational skills with both HTML and CSS, and some familiarity with Javascript.</p>
      			<p>Students are expected to understand the use of FTP and  basic file management, be fluent with their operating system, and be proficient with a file compression utility (.zip).</p>
      			<p>If you have a problem with code you are working on and wish to email your instructor for assistance, be sure to provide the following:</p>
      			<ul>
      				<li>a .zip or .rar compressed file as an attachment. include in it all related files and folders (HTML, CSS, and Javascript, images, etc)</li>
      				<li>in the body of the email describe your question(s) as specifically as possible</li>
      			</ul>
      		<h2>Course curriculum overview</h2>
      		<dl>
            <dt><strong>session 01</strong></dt>
              <dd>tools &amp; standards
                <ul>
                  <li>development environments</li>
                  <li>browser tools</li>
                  <li>standards</li>
                  <li>semantics</li>
                  <li>site structure</li>
                  <li>homework #1 assigned</li>
                </ul>
              </dd>
      			<dt><strong>session 02</strong></dt>
        			<dd>markup languages
          			<ul>
          				<li>quiz #1 - practical, open book</li>
          				<li>HTML</li>
          				<li>XHTML</li>
          				<li>HTML5: new tags, semantics, content models, deprecations, compatibility</li>
          				<li>CSS review</li>
          				<li>homework #2 assigned</li>
          			</ul>
        			</dd>
      			<dt><strong>session 03</strong></dt>
        			<dd>CSS techniques
          			<ul>
          				<li>quiz #2 - written, closed book</li>
          				<li>alternate stylesheets</li>
          				<li>importing</li>
          				<li>advanced selectors</li>
          				<li>the cascade, selector specificity</li>
          				<li>homework #3 assigned (completed with a partner)</li>
          			</ul>
        			</dd>
      			<dt><strong>session 04</strong></dt>
        			<dd>CSS techniques, layouts
          			<ul>
          				<li>quiz #3 - practical, open book</li>
          				<li>sprites</li>
          				<li>css resets</li>
          				<li>positioning behaviors</li>
          				<li>layout strategies</li>
          				<li>homework #4 assigned</li>
          			</ul>
        			</dd>
      			<dt><strong>session 05</strong></dt>
        			<dd>responsive design
        				<ul>
      						<li>quiz #4 - practical, open book</li>
      						<li>styling for print</li>
      						<li>media queries</li>
      						<li>scalable layout strategies</li>
      						<li>designing for handheld devices</li>
      						<li>homework #5 assigned (worth twice as much as other homeworks)</li>
        				</ul>
        			</dd>
      			<dt><strong>session 06</strong></dt>
        			<dd>CSS3
          			<ul>
          				<li>quiz #5 - written, closed book</li>
          				<li>vendor prefixing</li>
          				<li>graceful degrading</li>
          				<li>new properties</li>
          				<li>transitions, animations</li>
          			</ul>
        			</dd>
      			<dt><strong>session 07</strong></dt>
        			<dd>javascript frameworks
          			<ul>
          				<li>javascript fundamentals</li>
          				<li>jQuery framework basics</li>
          				<li>detecting user activity</li>
          				<li>reading page content</li>
          				<li>altering page content</li>
          				<li>utilizing &amp; customizing open source jQuery</li>
          				<li>homework #6 assigned</li>
          			</ul>
        			</dd>
      			<dt><strong>session 08</strong></dt>
        			<dd>dynamic content
          			<ul>
          				<li>quiz #6 - practical, open book</li>
          				<li>http server setup, basic configuration (Apache)</li>
          				<li>tokens, server side includes (SSI or PHP)</li>
          				<li>server management techniques (.htaccess)</li>
          				<li>homework #7 assigned</li>
          			</ul>
        			</dd>
      			<dt><strong>session 09</strong></dt>
        			<dd>template development
          			<ul>
          				<li>quiz #7 - written, closed book</li>
          				<li>templating fundamentals</li>
          				<li>seo strategies</li>
          				<li>homework #8 assigned</li>
          			</ul>
        			</dd>
      			<dt><strong>session 10</strong></dt>
        			<dd>methodology
          			<ul>
          				<li>quiz #8 - written, closed book</li>
          				<li>web development cycle</li>
          				<li>client questionaires</li>
          				<li>collaborative frameworks</li>
          				<li>homework #9 assigned</li>
          				<li>group project assigned</li>
          			</ul>
        			</dd>
          	<dt><strong>session 11</strong></dt>
			        <dd>group project work</dd>
          	<dt><strong>session 12</strong></dt>
      			  <dd>final exam
          			<ul>
          				<li>written, open book</li>
          				<li>practical, open book</li>
          			</ul>
      			  </dd>
      		</dl>

      	  <h2>texts</h2>
      		<p>There is no official textbook for comp1950, but if you wish to supplement the online course notes and examples you may find the following optional texts useful:</p>
      		<img src="web_dev_text.jpg" alt="CSS3 for web designers" width="100px" height="154px" style="float:left;margin-right:8px;" />
      		<p>Web Development and Design Foundations with HTML5, 7/Edition</p>
      		<p>By Terry Felke-Morris</p>
      		<p>ISBN: <code>978-0-1335717-8-3</code></p>
      		<p><a href="http://www.pearsonhighered.com/educator/product/Web-Development-and-Design-Foundations-with-HTML5-7E/9780133571783.page">Text website</a></p>
      		<div style="clear:both;"></div>
      		<br />
      		<img src="aba-html.png" alt="HTML5 for web designers" width="100px" height="154px" style="float:left;margin-right:8px;" />
      		<p>HTML5 for web designers</p>
      		<p>By Jeremy Keith</p>
      		<p>ISBN: <code>978-0-9844425-0-8</code></p>
      		<p><a href="http://www.abookapart.com/products/html5-for-web-designers">Text website</a></p>
      		<div style="clear:both;"></div>
      		<br />
      		<img src="aba-css.png" alt="CSS3 for web designers" width="100px" height="154px" style="float:left;margin-right:8px;" />
      		<p>CSS3 for web designers</p>
      		<p>By Dan Cederholm</p>
      		<p>ISBN: <code>978-0-9844425-2-2</code></p>
      		<p><a href="http://www.abookapart.com/products/css3-for-web-designers">Text website</a></p>
      		<div style="clear:both;"></div>

      		<h2>Course policies</h2>
      		<p>All students must understand and comply with the BCIT <a href="http://www.bcit.ca/files/cas/computingparttime/pdf/computing_pts_student_guide.pdf">Student Guide</a>.</p>
      		<p><b>Assignments:</b> Late assignments will not be accepted for marking. Assignments must be done on an individual basis.</p>
      		<p><b>Attendance:</b> The attendance policy as outlined in the current BCIT calendar will be enforced.</p>
      		<p><b>Course Outline Changes:</b> The material specified in the course outline may be changed by the instructor. If changes are required, they will be announced in class.</p>
      		<p><b>Ethics:</b> BCIT assumes that all students attending the Institute will follow a high standard of ethics. Incidents of cheating or plagiarism may, therefore, result in a grade of zero for the assignment, quiz, test, exam or project for all parties involved and/or expulsion from the course.</p>
      		<p><b>Illness:</b> A doctor's note is required for any illness causing you to miss assignments quizzes, tests, projects or exams. At the discretion of the instructor, you may complete the work missed or have the work prorated (i.e., an average is given according to your performance throughout the course).</p>
      		<p><b>Makeup Tests, Exams or Quizzes:</b> There will be no makeup tests, exams or quizzes. If you miss a test exam or quiz, you will receive zero marks. Exceptions <b>may</b> be made for documented medical reasons or extenuating circumstances.</p>

      		<h2>Administrivia</h2>
      		<p>If you haven't already, be sure to <a href="http://my.bcit.ca/">check out myBCIT</a> and access your free email and calendaring applications. If you're a student and BCIT, your myBCIT account should already be set up.</p>
      		<p>Also, be sure to read up on the following relevant policies:</p>
      		<ul>
        		<li> <a href="http://www.bcit.ca/files/pdf/policies/5002.pdf">5002 BCIT Student Regulations Policy</a> (PDF - 816 KB)</li>
        		<li> <a href="http://www.bcit.ca/files/pdf/policies/3501.pdf">3501 Responsible Use of Information Technology at BCIT</a> (PDF - 137 KB)</li>
      		</ul>
      		<p>By attending this course, every student acknowledges that they have been made aware of these policies and the actions that will be taken if students fail to comply.</p>

        </div>
        <!-- Right space -->
        <div class="col-md-3"></div>
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
