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

    <div class="container-fluid" style="padding-top: 90px">
      <div class="row">
        <!-- Left space -->
        <div class="col-md-3"></div>
        <!-- Main part -->
        <div class="col-md-6">
          <h1>Exercises</h1>
      	<h3>Download Exercises for All Lectures</h3>
      	<p><a id="download-all-exercises-link" href="http://bcitcomp.ca/students/ddimchuk/homepage/project/files/exercises/bcitcomp1950.zip">Download all exercises</a></p>
      	
	<div style="padding: 5px;"></div>	
	
	<h1>Download by Lecture</h1>
     	
	
	<ul id="exercises-nav">
	  <li><a href="#lect2">Lecture 2</a></li>
	  <li><a href="#lect3">Lecture 3</a></li>
	  <li><a href="#lect4">Lecture 4</a></li>
	  <li><a href="#lect5">Lecture 5</a></li>
	  <li><a href="#lect6">Lecture 6</a></li>
	  <li><a href="#lect7">Lecture 7</a></li>
	  <li><a href="#lect8">Lecture 8</a></li>
	  <li><a href="#lect9">Lecture 9</a></li>
	  <li><a href="#lect10">Lecture 10</a></li>
	</ul>
		
		
          
          <h2 id="lect2">Lecture 2 - HTML5</h2>
          <h3>HTML5 Exercise 1</h3>
          
          <p>Thinking about the semantic tags that are available in HTML5, construct a simple page that takes advantage of some of these tags.</p>
          <p>We will use the theme of craft beer. Create the name of your own brewery and find <a href="https://www.google.com/search?site=&amp;tbm=isch&amp;tbm=isch&amp;q=craft+beer">
          an image or two of beer</a> from the interwebs.</p>
          <p>The goal is to create a page <em>quickly</em> that contains the following:</p>
          
          <ul>
            <li>Name of your brewery</li>
            <li>A description of your brewery (20 words or so)</li>
            <li>A list of three beers, which should include:
              <ul>
                <li>Beer name</li>
                <li>Beer style (IPA, Pilsner, Stout, Pale Ale, etc)</li>
                <li>Image</li>
                <li>Description</li>
              </ul>
            </li>
            <li>Links to three pages (You don't have to create the pages if you don't want - just the links)
              <ul>
                <li>About</li>
                <li>Brewery Tour</li>
                <li>Contact</li>
              </ul>
            </li>
            <li>Additional content: 
              <ul>
              <li>Links to twitter, facebook and rss (doesn't have to go anywhere, just create the links)</li>
                <li>Copyright year and name</li>
                <li>Link to email</li>

              </ul>
            </li>
          </ul>
          
          <p>Your layout can be static flow, it doesn't have to be anything special, this is 
          more about using HTML5 tags to maximize semantics than it is making it look pretty.</p>
          <p>If you'd like, you can use the <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/session02_exercise01.zip">HTML5 exercise starting files</a>
          to save you time.</p>
          <p>There are many ways to solve this challenge, but heres a <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/session02_exercise01_sample.zip">
          sample solution</a>.</p>
          
          
          <h3>HTML5 Exercise 2</h3>
          <p>Experiment with new HTML5 form features.</p>
          <p><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/session02_exercise02.zip">Download and unpack the exercise files</a>  (.zip).  
          Add several of the new HTML5 inputs to the form. Test the results in every browser you have available. Which features seem to be well supported? Which ones are poorly supported? 
          Take note of how a browser will render some of the more specialized inputs when it doesnt recognize the HTML5.</p>
      		
          <h3>Homework</h3>
          <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/comp1950_homework02.pdf">Download the homework</a>
          
          
          
          
          <br>
          <br>
          <h2 id="lect3">Lecture 3 - CSS Techniques</h2>
          <h3>Exercise 1 - Apply an Alternate Stylesheet</h3>
          <ul>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/alternate_stylesheets.zip">Download the alternate stylesheet starting files</a></li>
            <li>Make a copy of one of the current stylesheets, rename it, and change some of the styles</li>
            <li>Add this new stylesheet as an "alternate stylesheet" to the HTML page</li>
            <li>Show your instructor when complete</li>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/alternate_stylesheets_solution.zip">Download a sample solution</a><p></p></li> 
          </ul>
          
          <h3>Exercise 2 - Using @import</h3>
          <ul>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/importing_css.zip">Download the css import exercise starting files</a></li>
            <li>Use the <code>@import</code> feature to simplify the HTML file's CSS references, so that only one <code>&lt;link&gt;</code> tag is required in the HTML <code>&lt;head&gt;</code> section.</li>
            <li>Show your instructor when complete</li>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/importing_css_solution.zip">Download a sample solution</a><p></p></li>
          </ul>
          
          <h3>Exercise 3 - Advanced Selectors</h3>
          <ul>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/css_selector_exercise.zip">Download the exercise source files</a></li>
            <li>Make NO changes to the HTML file, other than adding embedded or external CSS. Do NOT add any attributes (neither class nor id) to any of the tags.</li>
            <li>Use the various available CSS selectors to style the HTML on the left side of the page so that it matches the image on the right side.</li>
            <li>Show your instructor when complete</li>
           <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/css_selector_exercise_sample.zip">Download a sample solution</a></li> 
          </ul>
          
          <h3>Homework</h3>
          <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/comp1950_homework03.pdf">Download the homework</a>
          
          
          
          
          <br>
          <br>
	<h2 id="lect4">Lecture 4 - CSS Layouts</h2>
          <h3>Exercise 1 - Sprites</h3>
          <ul>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/sprites_exercise.zip">Download</a> and extract the source files</li>
            <li>examine the source code to see how the example sprite is being used</li>
            <li>create your own css rules for displaying the second sprite images</li>
            <li>a sample solution will be available for download here later today</li>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/sprites_exercise_solution.zip">Download a sample solution</a></li>		
          </ul>
          
          
          <h3>Exercise 2 - Practice CSS Positioning</h3>
          <p>Try walking through a few <a href="http://bcitcomp.ca/1950/lectures/four/scenarios.html">positioning scenarios</a></p>
          
          <h3>Exercise 3 - Build a List-Based navigation</h3>
          <p>Try an <a href="http://bcitcomp.ca/1950/lectures/four/list_nav.html">exercise to build a vertical navigation</a> built with an unordered list and styled in CSS.</p>
          
          <h3>Exercise 4 - Implement a Commonly Used Layout</h3>
          <ul>
            <li>Imlement a popular fixed width page layout that matches the basic behavior of <a href="http://bcitcomp.ca/1950/lectures/four/layout_exercise_sample/">
            this example layout</a>. Don't spoil the exercise by copying the code from the example, use it to determine the desired 
            structure and behavior</li>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/layout_exercise.zip">download the starting files</a>	</li>
            <li>be sure to implement the following features<ul>
              <li>the header and footer should be as wide as the browser</li>
              <li>the navigation and the main section for content should be fixed width centered</li>
              <li>the navigation links should be in an HTML unordered list, displaying horizontally and styled with css. you don't need to match the exact design of the example, but try to make an appealingly styled navigation. Maybe use one of the <a href="http://css.maxdesign.com.au/listamatic/">list navigation examples</a></li>
              <li>the social media icons should NOT be used individually. use the online <a href="http://csssprites.com/">sprite genrator</a> to build a single sprite image, and use that</li>
              <li>the social media icons should include a hover effect (change the border)</li>

            </ul></li>
            <li>some of the colors used in the example:<ul>
              <li>header/footer background - <span style="background-color:#450716;color:white;">#450716</span>
              </li><li>header/footer borders: <span style="background-color:#AD6376;color:white;">#AD6376</span></li>
              <li>main content area, yellow highlights, hover effects: <span style="background-color:#FFE47C;">#FFE47C</span></li>
              <li>foreground text <span style="background-color:#444444;color:white;">#444444</span></li>
            </ul></li>
            <li>use a <a href="http://www.lipsum.com/">lorum ipsum generator</a> to create generic page content</li>
              <li>a sample solution will be available for download here later today</li>
            <li><a href="http://bcitcomp.ca/1950/lectures/four/layout_exercise_sample/">Test a sample solution</a> or <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/layout_exercise_solution.zip">download a sample solution</a>	</li>
          </ul>
          
          
          <h3>Homework</h3>
          <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/comp1950_homework04.pdf">download the homework</a>
          
          
          
          
          <br>
          <h2 id="lect5">Lecture 5 - Responsive CSS</h2>
          <h3>Exercise 1 - Print Styles Exercise</h3>
          <ul>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/styling_for_print_exercise.zip">Download the exercise starting files</a></li>
            <li>Apply a printer friendly CSS stylesheet using <code>media="print"</code> in the link tag</li>
            <li>Style a printer appropriate stylesheet:
              <ul>
                <li>Hide parts of the page of no use to a printout (eg: site navigation)</li>
                <li>Every time a new <code>section</code> occurs, start a new page</li>
                <li>If needed, re-position content appropriately: avoid using <code>float</code></li>
                <li>Display the full text URL of hyperlinks</li>
                <li>For an additional challenge, use attribute selectors to only output the text URL of hyperlinks that are absolute, don't bother for relative links (since they aren't much use to the printout)</li>
              </ul>
            </li>
            <li>Use your browser's "Print Preview" to test the styles (no need to actually print)</li>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/styling_for_print_solution.zip">Download a sample solution</a></li>
          </ul>
          
          <h3>Exercise 2 - Media Queries Examples and Exercise</h3>
          <ul>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/media_query_example.zip">Download some media query examples</a>
            and unzip the contents</li>
            <li>Examine the CSS, and test the HTML in a varying sized browser</li>
            <li>Add 2 new media queries after the ones already declared. Use them to determine the <code>min-height</code>/<code>max-height</code>
            of the viewport and hide (with <code>display:none;</code>) one of the two spans <code>#tall</code> or <code>#short</code></li>
            <li>Copy the first media query rule (the one that applies to small screens) and paste it at the end of all the media queries, so that 
            it is the last of the media queries. How does this change the browser behavior? What kind of compound media query could fix this?</li>
            <li>Investigate the <code>orientation</code> feature, and add similar functionality to demonstrate you can detect the difference 
            between <code>portrait</code> and <code>landscape</code></li>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/media_query_example_solution.zip">Download a sample solution</a></li>
          </ul>
          
          
          
          <h3>Fluid Fonts and Images Examples</h3>
          <ul>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/responsive_sizing.zip">Download a responsive font and image example</a> and unzip the contents</li>
            <li>Examine the HTML and CSS source code and test the HTML page in a varying sized web browser</li>
            <li>Try changing the <code>font-size</code> property assigned near the top of the CSS file. Note how changing one value can affect all textual content</li>
          </ul>
          <p>There are also some popular template systems that provide fluid layout possibilities:</p>
          <ul>
            <li><a href="https://html5boilerplate.com/">HTML Boilerplate</a></li>
            <li><a href="http://getbootstrap.com/">HTML Bootstrap</a></li>
          </ul>	
          
          
          <h3>Exercise 3 - Responsive Layout Exercise</h3>
          <ul>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/responsive_layout_exercise.zip">Download the exercise</a> and unzip the contents </li>
            <li>Examine the code and note how media queries are already being applied at a 800px width breakpoint</li>
            <li>If the page is wider than 800px then you want to use the current layout, but if it is less than 800px wide, apply a fluid, one column stacked layout: header at top, then vertical navigation, then content</li>
            <li>Ensure fonts and images scale fluidly</li>
            <li>Test your layout in a varying sized browser</li>
            <li>If you own a smartphone or tablet, try uploading your files to your students webspace on <code>bcitcomp.ca</code> and see what it looks like when browsing on the smaller devices</li>
            <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/responsive_layout_exercise_solution.zip">Download a sample solution</a></li> 
          </ul>
          
          
          <h3>Homework</h3>
          <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/comp1950_homework05.pdf">Download the homework</a> 
          
          
          
          
          
          <br>
          <h2 id="lect6">Lecture 6 - CSS3</h2>
          <h3>Exercise 1 - Better Box Model</h3>
          	<ul>
              <li>Experiment with the new box model properties using your preferred web browser diagnostic tool (such as Firefox's Firebug)</li>
              <li>The box below is <code>id="better_box_model"</code></li>
              <li>Apply border-radius, text-shadow and box-shadow effects.</li>
            </ul>
            <div id="better_box_model">
              <p>CSS3, a better box model</p>
            </div>
          
          <br>
          <h3>Exercise 2 - CSS Transitions Exercise</h3>
          
          <p><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/transitions_exercise.zip">Download the transitions exercise starting files.</a></p>

        <div id="transition_image">
          <img src="http://bcitcomp.ca/1950/lectures/six/images/button_green.png" id="image_bottom" alt="yellow button" width="100px" height="100px">	
          <img src="http://bcitcomp.ca/1950/lectures/six/images/button_yellow.png" id="image_top" alt="yellow button" width="100px" height="100px">	
    	  </div>
      
        <h4>Challenge A:</h4>
        <p>The yellow button image is absolutely positioned so that it overlaps a green button image beneath it.</p>	<ul>
          <li>First add a :hover pseudoclass to the <code>id="image_top"</code> that will set it's <code>opacity</code> to 0;</li>
          <li>Then add the transition states: First apply a transition to the opacity of <code>#image_top</code>. Note how the transtion is applied to both the :hover and non-hover states.</li>
          <li>Relocate the transition code from <code>#image_top</code> to <code>#image_top:hover</code>. Note how the transtion is applied to only the change from non-hover to :hover.</li>
          <li>For full control over this behavior, define transition code in both the before (#image_top) and after (#image_top:hover) rules.</li>

          <li>Follow the pattern:<br>
          <code>-vendorprefix-transition:property duration timing-function;</code></li>
          <li>use the notes below to guide to on the syntax</li>
          <li>demonstrate the finished transition to your instructor</li>
        </ul>

        <h4>Challenge B:</h4>

        <p>Add transtion code that will alter the width or the height of the form inputs when they are in the 	<code>focus</code> state.</p>
        <ul>
          <li>transition either the width or the height. note how you will need to set the width in CSS for both the :focus and not :focused states.</li>
          <li>try transitioning several CSS properties (<code>width</code>, <code>height</code> and <code>border</code>) at once by using <code>all</code> as the assigned transitional property, eg: <code>transition:all 1s ease;</code></li>

        </ul>
        <form>
        <label for="username">Username</label>	
        <input type="text" name="username" id="username">
        <label for="password">Password</label>	
        <input type="text" name="password" id="password">
        </form>
        <h3>Challenges A &amp; B:</h3>
        <p><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/transitions_exercise_solution.zip">Download a sample solution</a></p> 
	
          
          
        <h3>Exercise 3 - Animations and Keyframes</h3>
        <ul>
          <li>Download and examine these <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/animation_keyframes_exercise.zip">example animations</a></li>
          <li>Try adding or changing some of the properties being animated</li>
          <li>Create a new animation to change the width and height of one of the images used on these pages</li>	
          <li>Download  a <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/animation_keyframes_solution.zip">sample solution</a></li>
        </ul>
          
        
        
        <h3>Exercise 4 - Multiple Backgrounds</h3>
        <p>Experiment with multiple backgrounds, gradients, and hover effects in this CSS3 background demo and exercise.</p>
        <ul>
          <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/multiple_background_exercise.zip">Download the source files</a></li>
          <li>Change the <code>cornflowerblue</code> background color to a <code>linear-gradient</code></li>
          <li>Add a <code>:hover</code> effect so that fewer 'layers' of clouds are displayed </li>
          <li>How can we apply the various vendor prefixes in this context?</li>
          <li>Try applying a <code>transition</code> effect on the <code>:hover</code>. How does the browser handle this?</li>
           <li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/multiple_background_exercise_solution.zip">Download a sample solution</a></li> 
        </ul>
        
        
        <h3>Homework</h3>
        <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/comp1950_homework05.pdf">Download the homework</a>
        
        
        
        
          
          
          
        <br>
        <h2 id="lect7">Lecture 7 - JavaScript Frameworks</h2>
        <h3>Exercise 1 - Run a Simple JQuery Script</h3>
		<ol>
		  <li>Include the jQuery library codebase using the <code>&lt;script src=""&gt;&lt;/script&gt;</code> tag in the <code>&lt;head&gt;</code> section of an HTML page. Load either a local copy obtained from the <a href="http://docs.jquery.com/Downloading_jQuery" title="Download from jQuery">jQuery downloads page</a>, or link to a copy on a Content Delivery Network (CDN).</li>
		  <li>Add an additional <code>&lt;script&gt;&lt;/script&gt;</code> tag to the <code>&lt;head&gt;</code> section of the document, and place the following code inside:
		<pre><code> $(document).ready(function(){
		   //your javascript code
		 });</code></pre></li>
		  <li>Alternatively, you can omit the <code>(document).ready</code> section if all the jQuery code is located at the bottom of the HTML page, just before the <code>body</code> tag closes</li>
		  <li>Instead of the comment <code>//your javascript code</code>, write javascript instructions, such as <code>alert("Hello World!");</code></li>
		  <li>Test the page</li>
		</ol>
		
		
        <h3>Exercise 2 - Use an Event to Trigger a Message</h3>
		<p>Try creating a click event for div tags by adding the following code to an HTML page:</p>
		<pre><code>$(document).ready(function(){
			$("div").click(function(event){
				alert("Hello World");
			});
		 });</code></pre>
	<ul>
		<li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/session07_exercise02.zip">Download the starting files</a> for exercise 2</li>
		<li><strong>Challenge A</strong>: Implement the code above for a "div" click event, then test the results in a browser</li>
		<li><strong>Challenge B</strong>: Add an id or class selector to an element in your HTML</li>
		<li>Change the jQuery selector "div" to match your selector, eg "#my_unique_id"</li>
		<li><strong>Challenge C</strong>: Change the event from "click" to one that will only trigger when the user mouses over top of the element. Use this <a href="http://api.jquery.com/category/events/">list of jQuery events</a></li>
		<li>Note there is more than one event that might work in this case. are some better than others?</li>
		<li>Add a new tag of your choosing. Assign it a new class or id. Add another jQuery click event to make an alert popup if the user clicks this tag.</li>
		<li><strong>Bonus Challenge D</strong>: investigate the <a href="http://api.jquery.com/event.pageX/">event.pageX</a> and <a href="http://api.jquery.com/event.pageY/">event.PageY</a> events. Use them to change the alert message so that it reports exactly where the mouse was clicked</li>
		<li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/session07_exercise02_solution.zip">Download a sample solution</a></li>
	</ul>	
		
	<h3>Exercise 3 - Alter HTML using JQuery</h3>
		<p>Download a copy of this <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/session07_exercise03.zip">jQuery exercise file</a>. Use this file as a test bed for experimenting with the jQuery techniques described throughout session #7. 
	</p><p>Don't spoil the fun before you try it yourself, but you can <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/session07_exercise03_solution.zip">download a completed sample solution</a> of the exercise file. </p>  
	
	<h3>Exercise 4 - Create a 'sticky' nav bar when the user scrolls away from the nav</h3>
	<p>Try creating a click event for div tags by adding the following code to an HTML page:</p>
	<ul>
		<li>Several interesting interface techniques may involve scroll detection. In this exercise, you can examine an example of how scroll detection works, and use it to create a navigation bar that will always be visible, even as the user scrolls down the page</li>
		<li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/sticky_nav_exercise.zip">Download the exercise starting files</a></li>
		<li>Examine the behavior and source code of the starting files</li>
		<li>Exercise challenges are detailed in the .html and .js files</li>		
		<li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/sticky_nav_exercise_solution.zip">Download a sample solution</a></li>
	</ul>	
	
	<h3>Exercise 5 - Enable menu vector icon functionality</h3>
	<ul>
		<li>The menu vector icon (eg: <img src="http://bcitcomp.ca/_shared_resources_1950/images/menu.png" alt="menu vector icon" style="width:15px;display:inline;">) is commonly used to 'hide' the full display of a menu. Users can click the icon to toggle the visibility of the menu options.</li>
		<li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/jquery_menu_exercise.zip">Download the exercise starting files</a></li>
		<li>Load the jQuery library files using the <code>script</code> tag</li>
		<li>Add another <code>script</code> tag to link to a <code>.js</code> file that you create</li>		
		<li>Contain all your jQuery code within <code>$(document).ready(function(){ });</code></li>		
		<li>Add a click event to the <code>#nav_icon</code> so that clicking it toggles the visibility of the <code>#nav</code></li>
		<li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/jquery_menu_exercise_solution.zip">Download a sample solution</a> and examine the code for details</li>
	</ul>
		
	<h3>Homework</h3>
        <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/comp1950_homework06.pdf">Download the homework</a>      
	
		
		
	
        <br>
        <h2 id="lect8">Lecture 8 - Dynamic Content</h2>
        <h3>Exercise 1 - Install and Run and HTTP Server</h3>
	<p>Install a web server environment on your client machine.</p>
	<ol>
		<li>Download an open source server package for your operating system:
		<ul>
			<li><a href="http://www.wampserver.com/en/">WAMP</a> - windows (<a href="http://bcitcomp.ca/_shared_resources_1950/downloads/wampserver3.0.6_x64_apache2.4.23_mysql5.7.14_php5.6.25-7.0.10.exe">alternative WAMP download link</a><a>)</a></li><a>
			</a><li><a></a><a href="http://www.mamp.info/en/">MAMP</a> - macintosh</li>
		</ul>
		</li>	
		<li><strong>Important:</strong> if using BCIT lab computers, install the server to the C: drive</li>
		<li>Install the downloaded package with default settings</li>
		<li>Start the HTTP server</li>
		<li>Visit <code>http://localhost</code> in your web browser. Mac users visit visit <code>http://localhost:8888</code></li>
	</ol>
	
	
        <h3>Exercise 2 - Server Root based Pathing</h3>
	<p>Server root based paths can allow more portable code. Paths that begin with a <code>/</code> (forward slash) will begin at the server root. For example, if your server root folder is <code>www</code> and is located at <code>C:/wamp/www</code>, then the following address <code>/css/styles.css</code> will be mapped to <code>C:/wamp/www/css/styles.css</code></p>
	<ol>
		<li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/apache_server_exercise.zip">Download the exercise starting files</a></li>
		<li>Uncompress the contents of the exercise download</li>
		<li>Place all files and folders in your server root (<code>css</code>, <code>images</code> and <code>errors</code> folders)</li>
		<li>Update the HTML file <code>sample_file.html</code> wherever it references images or css files: Currently relative paths are used. Change these to server-based relative paths</li>
		<li>Request this page on localhost to confirm the stylesheet and images are loading</li>
		<li>Make a copy of the HTML page and place it in a subfolder created by you. Test this page via localhost to demonstrate the increased portability of your HTML code</li>
	</ol>
	
	
	<h3>Exercise 3 - Use .htaccess</h3>
	
	<p>Edit and apply and .htaccess file to customize server behavior.</p>
	<ul>
		<li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/htaccess.zip">Download this .htaccess file.</a> Note it is a .zip file, so you will need to extract it before use. If using a Mac, the .htaccess file may be hidden. If so, follow these <a href="http://www.turnwall.com/articles/show-hidden-files-in-mac-os-x/">Mac instructions for enabling the editing of 'hidden' files</a></li>
		<li>Open the .htaccess in your text editor.</li>
		<li>Use <code>.htaccess</code> to assign default error message pages. Open the included <code>.htaccess</code> file, and add the following directives:
		<ul>
			<li><code>ErrorDocument 404 /errors/file_not_found.html</code></li>
			<li>Trigger an error by requesting over <code>localhost</code> a page that doesn't exist. Does <code>file_not_found.html</code> display and use the warning image? If not, examine <code>file_not_found.html</code>s paths, and ensure they match the file locations on your server</li>
		</ul></li>
	</ul>
	
	<h3>Exercise 4 - Run an Example SSI</h3>
        <ul>
		<li>Download a <a href="http://bcitcomp.ca/_shared_resources_1950/downloads/htaccess.zip">.zip file containing an .htaccess</a> and, after uncompressing it, place the <code>.htaccess</code> file in your server root.</li>
		<li>Create an HTML page using the extension <code>.shtml</code></li>
		<li>Add the following lines in the body of the page:<br><code>&lt;!--#echo var="DOCUMENT_NAME"--&gt;</code> </li>
		<li>Place your <code>.shtml</code> file in your server root and test it using localhost. The page should display it's file name. If not, see your instructor. If so, proceed to the next step...</li>
		<li>Make a copy of your <code>.shtml</code> page, but this time change the extension to the more standard <code>.html</code> or <code>.htm</code>. Test this new page via localhost. The SSI will not run, since the server only parses file extensions defined by the developer.</li>
		<li>Update the <code>.htaccess</code> file by adding more extensions to it's SSI parsing. For example: 
		<h4>Before</h4><pre><code>AddType text/html .shtml 
		AddHandler server-parsed .shtml 
		Options Indexes FollowSymLinks Includes</code></pre><h4>After</h4><pre><code>#note the space delimited list of file extensions added...
		AddType text/html .shtml .html .htm
		AddHandler server-parsed .shtml .html .htm 
		Options Indexes FollowSymLinks Includes 
		</code></pre>
		</li>
		<li>Retest the page. SSIs should now work on pages that end with <code>.html</code> and <code>.htm</code></li>
	</ul>
	
	<h3>Exercise 5 - Formatting</h3>
	<p>Use SSI to add a formatted date to an HTML page matching this pattern: 
		<pre><code> &lt;!--#config timefmt="%A, %B %e" --&gt;&lt;!--#echo var="DATE_LOCAL" --&gt;</code></pre></p>
	<h4>Formatting</h4>
	<ul>
		<li>Showing the raw date isn't always the attractive option</li>
		<li>Formatting the date to show in a configurable manner is required</li>
		<li>This is done through the <code>config timefmt</code> command</li>
	</ul>
	<p>For a hint, check this page:<br>
	<a href="http://www.htmlite.com/SSI005.shtml">http://www.htmlite.com/SSI005.shtml</a>
	<br>Lots of examples on how to <a href="http://www.zytrax.com/tech/web/ssi.htm#time">configure time and date with SSIs</a></p>
	
	<h3>Exercise 6a - Dynamic Navigation</h3>
	<p>Deploy a navigation using SSI. </p>
	<ul>
		<li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/server_side_includes.zip">Download the exercise source files</a>.</li>
		<li>Extract the navigation related code from each html file</li>
		<li>Place the navigation code in one external file</li>
		<li>Use the server side includes 'include' token to load the navigation on each page. EG:<br><code>&lt;!--#include file="inc/nav.inc" --&gt;</code></li>
		<li><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/server_side_includes_solution_a.zip">Download a sample solution</a></li>
	</ul>
	
	
	<h3>Exercise 6b - Dynamic Navigation</h3>	
	<p>Update your code from the previous SSI Navigation exercise.</p>
	<p>Use the if control structure to enhance your SSI navigation code. Create a unique styled version of the nav option for the page the user is currently viewing.</p>
	<p><a href="http://bcitcomp.ca/_shared_resources_1950/downloads/server_side_includes_solution_b.zip">Download a sample solution</a></p>
	
		
	<h3>Homework</h3>
	<a href="http://bcitcomp.ca/_shared_resources_1950/downloads/comp1950_homework07.pdf">download the homework</a>
	
	
	      
	      
        <br>
        <h2 id="lect9">Lecture 9 - Templating, SEO</h2>
        <h3>Exercise 1 - SEO Exercise</h3>
	<p>Examine the pages on your student webspace on <code>bcitcomp.ca</code> and make a list of the additions or alterations that could be applied to improve search engine results. Let your instructor know what your recommendations are.</p>
	<ul>
		<li>are you using the <code>meta description</code> attribute?</li>
		<li>do your pages each have a useful and descriptive title, and does each page have a obvious main heading?</li>
		<li>does your page contain additional headings that accurately summarize content?</li>
		<li>do the (non lorum-ipsum) pages have content that is on-topic? is there a decent, reasonable quantity of content on each page? is the content thoughtfully composed? does it contain words and phrases that an interested user might search with?</li>
		<li>are you using the best filenames? folder names? site structure?</li>
		<li>are your hyperlinks contextual, including descriptive link text?</li>
		<li>would any resources be candidates for caching?</li>
	</ul>
	
        <h3>Exercise 2</h3>
	<p>Everyone will work with a Template using Tumblr as our Content Management System.</p>
	<p>Please follow these steps:</p>
	<ul>
		<li>Go to <a href="http://tumblr.com/">Tumblr</a> and create an account or log in to your existing account</li>
		<li>If you already have an account, create a new blog by clicking the bulleted list icon at the top of your dashboard and selecting "Create new blog"</li>
		<li>Choose a basic, pre-created theme (template)</li>
		<li>Write some detailed content:
			<ul>
				<li>Three text posts</li>
				<li>Three photo posts</li>
				<li>Three link posts</li>
				<li>Any order is fine</li>
				<li>Please include some level of detail, or select a topic (like dogs, or beer) and find some relevant photos and links</li>
			</ul>
		
		</li>
		<li>Publish the content and see how it looks</li>
		<li>Examine the template (right click on your dashboard icon and choose 'Open link in new window' or just visit http://yourTumblrSiteName.tumblr.com/)</li>
			
	</ul>
	
	<h3>Homework</h3>
	<a href="http://bcitcomp.ca/_shared_resources_1950/downloads/comp1950_homework08.pdf">download the homework</a>
	
	<br>
        <h2 id="lect10">Lecture 10 - Methodology</h2>
	<h3>Exercise</h3>
	<ul>
		<li>Mingle with your classmates to see examples of each other's work</li>
		<li>Interview each other to assess skill sets</li>
		<li>Be prepared to form a project group (two or three students per group)</li>
	</ul>
	<h3>Homework</h3>
	<a href="http://bcitcomp.ca/_shared_resources_1950/downloads/comp1950_homework09.pdf">download the homework</a>
	
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
