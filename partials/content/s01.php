<h1>lecture one: course introduction</h1>
<h2>Agenda</h2>
<ul>
	<li>introductions</li>
	<li>orientation</li>
	<li>web development tools</li>
	<li>standards based development</li>
</ul>
<br>

<!-- Main content Tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="?id=3#lecture">Lecture</a></li>
  <li><a data-toggle="tab" href="?id=3#summary">Summary</a></li>
  <li><a data-toggle="tab" href="?id=3#resources">Resourses</a></li>
  <li><a data-toggle="tab" href="?id=3#homework">Homework</a></li>
</ul>
<!-- End Main content Tabs -->

<!-- Main content -->
<div class="tab-content">

  <div id="lecture" class="tab-pane fade in active">
    <h2>Introductions</h2>
		<ul>
			<li> <b>instructors:</b> Jeff Parker (<a href="mailto:jeffrey_parker@bcit.ca">jeffrey_parker@bcit.ca</a>), Lynda Williams (<a href="mailto:lynda_williams@bcit.ca">lynda_williams@bcit.ca</a>)</li>
			<li> <b>web site:</b> this is it </li>
			<li> <b>all about you...</b>
  			<ul>
  				<li> your name </li>
  				<li> your background</li>
  				<li> what do you hope to achieve in this course? Be specific!</li>
  			</ul>
      </li>
		</ul>
		<h2>Orientation: Course overview</h2>
		<p>Learn <a href="/comp1950/courseinfo/">about the course</a> to help you determine if this is the right class for you.</p>
	  <h2>BCIT network: sharefile</h2>
		<p>BCIT lab computers are re-imaged each day, meaning you will lose any files you save on the local C: drive of a lab computer.</p>
		<h4>Choose ONE of the folowing:</h4>
		<ul>
			<li>Use <a href="http://kb.bcit.ca/sr/sharefile/2052.shtml">BCIT Sharefile</a> to save your work</li>
			<li>Save your work to your personal USB or cloud storage account</li>
			<li>Use your own laptop in class, and dont use the BCIT lab computers</li>
		</ul>

    <h2>Orientation: Web space</h2>
    <p>Each student will get personal webspace. This is not a continuation of your COMP1850 site (if you had one).  This site is primarily for you to house your exercises, assignments, group work and more.  Make it a site that is usable and functional.</p>
		<ul>
			<li>Your instructor will create webspaces for each of you.</li>
			<li>Email your instructor this information:
			<ul>
				<li>your myBCIT email name - eg: youname123@my.bcit.ca</li>
				<li>your student number - eg: A00123456</li>
				<li>a case sensitive password you will remember - ???</li>
			</ul>
			</li>
			<li>Your URL will be: <strong>http://bcitcomp.ca/students/{your_mybcit_email_name}</strong></li>
		</ul>

		<h2>Connect to your bcitcomp.ca account via FTP</h2>
		<p>Use Filezilla, or any FTP client to connect to bcitcomp.ca. The bcitcomp.ca server provides you with a space on the internet where you can publish your homework and assignments.</p>
		<ol>
      <li>choose: File->SiteManager->New Site, then describe the FTP server, eg "bcitcomp.ca"</li>
      <li>Host:   bcitcomp.ca </li>
      <li>Port:   21</li>
      <li>User:   {yourStudentNumberUsingAnUppercaseA}@bcitcomp.ca </li>
      <li>Password:  {determined by you via email to your instructor} </li>
      <li>Servertype:  FTP File Transfer Protocol </li>
      <li>LogonType:  Normal </li>
      <li>click: Connect</li>
		</ol>
		<img src="/1950/images/filezilla_signalflare.jpg" alt="filezilla FTP login screenshot" width="512px" height="438px" />
    <p>If you experience connectivity problems, re-check your input, or ask your instructor for assistance.</p>

    <h1>lecture one: tools &amp; standards</h1>
    <h2>Tools: Web Development</h2>
  	<p>There are a LOT of tools to choose from these days. Desktop and mobile apps, online tools and services, etc. </p>
  	<p><strong>What kind of tools do you use?</strong></p>
  	<p>Workflow is defined as the process you take getting from start to completion on a task or series of tasks. For web development, it generally results in a page that has been created or updated by the use some kind of tool.</p>
  	<p>There is no perfect platform or workflow, there is only <strong>your</strong> platform and workflow that matters.  Once you can get the job done, you are off to the races, so find a workflow that suits you the best.</p>
  	<p>Some of the tools used by web developers...</p>
    <h3>Text Editors</h3>
  	<ul>
  		<li><a href="http://notepad-plus-plus.org/">Notepad++</a> - Text Editor (Win) * installed in BCIT lab computers *</li>
  		<li><a href="http://www.sublimetext.com/2">Sublime Text 2</a> - Text Editor (Mac/Win)</li>
  		<li><a href="http://www.barebones.com/products/textwrangler/">Text Wrangler</a> - Text Editor (Mac)</li>
  	</ul>
    <h3>FTP (File Transfer Protocol) Clients</h3>
  	<ul>
      <li><a href="http://filezilla-project.org">Filezilla</a> - FTP tool (Win) * installed in BCIT lab computers *</li>
  		<li><a href="http://cyberduck.ch/">Cyberduck FTP</a> - FTP tool (Mac)</li>
  	  <li><a href="http://www.wsftple.com/">WS FTP</a> - FTP tool (Win)</li>
    </ul>
    <h3>IDEs (Integrated Development Environments)</h3>
  	<ul>
  		<li><a href="http://www.panic.com/coda/">Coda</a> - Web Dev IDE (Mac)</li>
  		<li><a href="http://www.adobe.com/products/dreamweaver.html">Dreamweaver</a> - Web Dev IDE (Mac/Win)</li>
  		<li><a href="http://www.aptana.com/">Aptana</a> - Web Dev IDE (Win/Mac)</li>
  		<li><a href="http://www.htmlkit.com/">HTMLKit</a> - Web Dev IDE (Win)</li>
  		<li><a href="http://www.textasticapp.com/">Textastic</a> - Web Dev IDE (iPad)</li>
  		<li><a href="http://www.activestate.com/komodo-edit">Komodo</a> - Web Dev IDE (Mac/Win)</li>
    </ul>
    <h3>Team Development</h3>
  	<ul>
  		<li><a href="http://dropbox.com">Dropbox</a> - File Sharing (Web)</li>
  		<li><a href="https://github.com/">GitHub</a> - Collaborative Development (Web/Client)</li>
  	</ul>

    <h2>Tools: Browser-based development</h2>
  	<p>Today, most modern browsers have some kind of development environment that can be turned on or triggered via extensions and/or plug-ins.</p>
  	<p>There are presently two major development platforms, with a few variations for examining and developing web pages.</p>
		<ul>
      <li><a href="http://www.mozilla.org/en-US/firefox/new/">Firefox</a>
        <ul>
          <li>Mozilla Foundation's web platform created by web developers</li>
          <li>Gecko rendering engine: fast and progressive</li>
          <li>Excellent level of standards compliance</li>
          <li>Corporate independence</li>
          <li>No built-in development tools</li>
          <li>Plethora of add-ons that make web development easy</li>
          <li>Add-ons have a downside: bloat</li>
        </ul>
      </li>
    </ul>
    <ul>
      <li><a href="http://www.webkit.org/">WebKit</a>
        <ul>
          <li>This is the platform that gives us <a href="http://www.google.com/chrome">Chrome</a>, <a href="http://www.apple.com/safari/">Safari</a> and <a href="http://www.opera.com/">Opera</a>, with a few other smaller browsers out there as well.</li>
          <li>Excellent platform that is very fast and standards compliant</li>
          <li>Third parties can download the source, make local adjustments and release their own version, as Google and Apple have both done</li>
          <li>Standalone version can be downloaded at any time for the latest release</li>
          <li>Development is done via the built-in Developer Tools</li>
          <li>Initially a thin environment, recent releases have made Webkit-based browsers excellent for developers</li>
          <li>Macintosh based developers may need to <a href="http://www.jonhartmann.com/index.cfm/2011/4/28/Enabling-Safari-Developer-Tools">enable web developer options</a> in Safari before accessing the devloper tools</li>
        </ul>
      </li>
    </ul>
  	<p><strong>Remember to test in as many browsers as you can! Useful tools for this are <a href="http://browsershots.org/">BrowserShots</a> (Chrome, Firefox, Safari, Opera) and <a href="http://netrenderer.com/">Netrenderer</a> (For IE)</strong></p>

    <h2>Tools: Firefox Extensions</h2>
    <p>Extensions are a big part of Firefox, especially considering the background the browser has in web development.</p>
    <p>In fact, web development even has it's own category dedicated to <a href="https://addons.mozilla.org/en-US/firefox/browse/type:1/cat:4">Web and Developer Tools</a></p>
    <p>One of the best tools for Web Developers is the <a href="https://addons.mozilla.org/en-US/firefox/addon/web-developer/?src=search">Web Developer toolbar</a></p>
    <p>The author, Chris Pedrick, maintains a <a href="http://chrispederick.com/work/webdeveloper/">site for the Web Developer extension</a>. He has even created a version for seeral other browsers, though it isn't quite as full-featured.</p>
    <p>Some of the amazing tools this has to offer web developers:</p>
    <ul>
    	<li>Disable styles - by embedded/linked/inline as well as all styles, or just a single sheet</li>
    	<li>Edit CSS &amp; HTML - Make live changes to your CSS or HTML!</li>
    	<li>Images - outlining, file sizes, alt information... lots more</li>
    	<li>Form detail - useful for working with form elements</li>
    	<li>Cookie examination and manipulation</li>
    	<li>Built in validators</li>
    	<li>Line Guides &amp; Rulers</li>
    	<li>Element inspector</li>
    </ul>
    <p><strong>Let's take a quick look at the Web Developer Toolbar</strong></p>
    <ul>
    	<li>Install it if you have not already done so</li>
    	<li>Validate the HTML of this page with the Tools tab (Tools &gt; Validate HTML)</li>
    	<li>Validate the CSS of this page with the Tools tab (Tools &gt; Validate CSS)</li>
    	<li>View the CSS of the page (CSS &gt; View)</li>
    </ul>

    <h2>Browser Based Diagnostic Tools</h2>
    <p>As web pages get more complex, it can become difficult figuring out what is going on. For example, CSS rules that override other CSS rules, if spread across several files, can be challenge to make sense of. Having a diagnostic tool to assist in developing will make it easier to examine every detail of web pages. </p>
    <ul>
    	<li><a href="http://www.getfirebug.com/" title="Get Firebug!">Diagnostic Tool: Firefox Firebug</a></li>
    	<li><a href="https://developers.google.com/chrome-developer-tools/">Diagnostic Tool: Chrome</a></li>
    	<li> <a href="https://developer.apple.com/safari/tools/" >Diagnostic Tool: Safari</a></li>
    	<li><a href="http://msdn.microsoft.com/en-ca/library/gg589507(v=vs.85).aspx" >Diagnostic Tool: Internet Explorer</a></li>
    </ul>
  	<p>Get familiar with using one of these tools. You will be required to use them in the classes ahead.</p>
  	<p><strong>NOTE:</strong> changes you make with the tool are <strong>client based</strong>, this does not actually affect the HTML/CSS files</p>
  	<p>These tools go beyond outlining, examining and editing into deep troubleshooting of network, javascript and even XHR (XMLHttpRequest).</p>

    <h2>Exercise: Work with a broswer diagnotic tool</h2>
  	<ul>
  		<li>open or install one of the browser diagnostic tools</li>
  		<li>use the element selector to inspect parts of the page. take note if there is a color coded display for determining margin, padding, etc</li>
  		<li>select elements and examine the CSS cascade affecting them</li>
  		<li>enable or disable some CSS rules</li>
  		<li>add a new CSS rule of your own</li>
  		<li>add or change some of the HTML</li>
  		<li>refresh your browser... and watch all your alterations turn into nothing but sweet memories!</li>
  	</ul>

    <h2>Developer Tools Wrap up</h2>
  	<ul>
  		<li>Firefox was the first browser to have real tools embedded and, with extensions, it's a real powerhouse now</li>
  		<li>The last few years have seen a constant progression of improved tools in other browsers, bringing everything up a significant notch</li>
  		<li>Not a bad idea to have a &quot;dev browser&quot; that can be weighted down with tools</li>
  	</ul>

    <h2>Standards</h2>
    <h3>What are standards?</h3>
    <ul>
    	<li>Definition of standards?</li>
    	<li>What are some examples of standards in real life?
        <ul>
        	<li>	Lightbulbs</li>
        	<li>	Grades of gasoline</li>
        	<li>	Train rail widths</li>
        	<li>	TV Broadcast signals</li>
        </ul>
      </li>
    </ul>
    <h3>Why use them?</h3>
    <ul>
    	<li>Interoperability</li>
    	<li>Predictable results/dimensions/values</li>
    	<li>A new specification is not needed for each new manufacturing run</li>
    	<li>Need a new microwave? You can count on:
    		<ul>
      		<li>Plug/Voltage/Power</li>
      		<li>Unit size</li>
      		<li>Operation</li>
        </ul>
      </li>
    </ul>
    <h3>Web Standards</h3>
    <p>When you build without standards, you are investing in the here and now, without thinking of tomorrow.</p>
    <ul>
    	<li>Code that doesnt follow standards cannot be expected to behave predictably in the various web browsers</li>
    	<li>Non standard code is hard to support</li>
    	<li>Re-engineering and/or maintaining poorly coded websites can be very difficult, costly and time consuming</li>
    </ul>

    <h2>Standards: Web</h2>
    <h3>ISO: International Organization for Standards ( <a href="http://www.iso.org/">http://www.iso.org</a> )</h3>
    <ul>
    	<li><strong>1906</strong>: As the Intn'l Electrotechnical Commission (IEC): in order to better access pre-determined equipment that was interchangeable and interoperable</li>
    	<li><strong>1947</strong>: 25 countries got together to form ISO: "to facilitate the international coordination and unification of industrial standards"</li>
    	<li>Companies agree to become a part of ISO, and gain access to the complete library of standards set by the organization in concert with their many members</li>
    	<li>While it started slowly, many companies ignored standards, in favor of their own "proprietary" methods</li>
    	<li>Momentum, corporate marketing (companies advertising that their product or method conforms with ISO XXXX), and some government legislation (forcing the adoption of certain standards) led to a larger adoption of standards</li>
    </ul>
    <h3>W3C: World Wide Web Consortium ( <a href="http://www.w3.org/">http://www.w3.org</a> )</h3>
    <ul>
    	<li>Web standards are going through the same process that the ISO went through</li>
    	<li>Many companies see the benefits of interoperability - many are still "forging their own"</li>
    	<li>Many companies have standards: Adobe, Microsoft, Apple, Ford, GM</li>
    	<li>Many are proprietary standards, and are not supported by many companies</li>
    	<li>W3C - World Wide Web Consortium: founded by Tim Berners-Lee to try and uniformly put forward standards through a single communication vehicle</li>
    	<li>Leading browser makers did not follow, initially</li>
    	<li>Designers were 'taking sides' in the browser wars: users were losers</li>
    </ul>
    <h3>W3C Goals</h3>
    <ol>
    	<li><strong>Universal Access</strong>: To make the Web accessible to all by promoting technologies that take into account the vast differences in culture, languages, education, ability, material resources, access devices, and physical limitations of users on all continents;</li>
    	<li><strong>Semantic Web</strong>: To develop a software environment that permits each user to make the best use of the resources available on the Web;</li>
    	<li><strong>Web of Trust</strong>: To guide the Web's development with careful consideration for the novel legal, commercial, and social issues raised by this technology.</li>
    </ol>
    <h3>Making Progress</h3>
    <ul>
    	<li>Eventually, the drive towards standards began to win out</li>
    	<li>Users made their voices known and momentum started to slowly shift toward supporting standards</li>
    	<li>Seen as a marketing opportunity: <em>Our browser supports standards!</em></li>
    	<li>Mozilla Project emerged after a large number of Netscape developers were let go upon the acquisition by AOL</li>
    	<li>Mozilla is now a standards-compliant browser with many features</li>
    	<li>Microsoft and AOL followed shortly with adoption of W3C standards (with limitations)</li>
    	<li>Large companies started joining the W3C to be seen as part of the Standards game</li>
    </ul>
    <h3>For Web Developers</h3>
    <p>Designing to current W3C specifications means that:</p>
    <ul>
    	<li>your pages will be viewable in the largest number of browsers, </li>
    	<li>the largest number of devices </li>
    	<li>and (if used correctly) will gracefully degrade as support for CSS or other presentation layers are absent.</li>
    </ul>
    <p>Some more words about <a href="http://www.webstandards.org/learn/faq/">Web Standards</a> worth reading</p>
    <h3>Discussion:</h3>
    <ul>
      <li>what is the current W3C recommended version for HTML?</li>
      <li>what is the current W3C recommended version for CSS?</li>
      <li>what are the consequences of using a non-standard version?</li>
      <li>Include a <a href="http://validator.w3.org/check?uri=referer">referer link</a> on all your COMP1950 pages: <br /><code>&lt;a href="http://validator.w3.org/check?uri=referer"&gt;validate&lt;/a&gt;</code>.</li>
    </ul>

    <h2>Details of Standards-Driven Development</h2>
    <h3>Three goals of standards-driven development:</h3>
    <ol>
    	<li>compatibility (creating web pages that work well in all browsers)</li>
    	<li>portability (writing code that works well in any computing environment/operating system)</li>
    	<li>accessibility (produce web pages that are optimized for search engines, screen readers, etc)</li>
    </ol>
    <h3>Requirements</h3>
    <ul>
    	<li>HTML + CSS + DOM = Agile Web Sites</li>
    	<li>Structurally valid HTML code (eg: tags that open are closed. parent-child tag relationships are valid, etc)</li>
    	<li>Logically valid HTML code (eg: ids are not applied more than once per page)</li>
    	<li>Use CSS to develop sites that separate content (HTML) from presentation (CSS)</li>
    	<li>Using Semantic Markup to establish content relationships and logical deployment of content</li>
    </ul>
    <h3>Future Compatibility</h3>
    <ul>
    	<li>Code is easier to use for future developers</li>
    	<li>Less presentational HTML means easier design changes</li>
    	<li>Keep the same code for longer periods of time</li>
    	<li>Optimally, <strong>never</strong> change your code (if all presentation is gone)</li>
    </ul>
    <h3>Reduced Development Costs</h3>
    <ul>
    	<li>Shorter development times for style changes</li>
    	<li>CSS based layouts are easier to redesign, superior to HTML table layouts</li>
    	<li>Easier to integrate with CMS (Content Management System) tools</li>
    </ul>
    <h3>Special Needs</h3>
    <ul>
    	<li>HTML lends itself to assistive readers (low vision, etc)</li>
    	<li>Can support multiple stylesheets for different user needs</li>
    	<li>An eye-opening exercise: try browsing with <a href="http://www.webbie.org.uk/">Webbie</a>, a browser for the blind</li>
    </ul>
    <h3>Single Codebase</h3>
    <ul>
    	<li>No complex browser sniffing scripts</li>
    	<li>Avoid having to support multiple browsers with multiple home/site pages (code forking)</li>
    	<li>Much less upkeep (only one source to update)</li>
    </ul>
    <h3>Moving Forward</h3>
    <ul>
    	<li>HTML5: utilize the new tags to further increase semantic meaning of our web pages</li>
    	<li>The better your HTML elements, classes and IDs, the easier it will be to manipulate them with advanced frameworks such as jQuery</li>
    </ul>

    <h2>Standards: file and folder naming</h2>
  	There are a few things that bear remembering:
  	<ul>
  		<li>file and folder names should <strong>NOT</strong> contain:
    		<ul>
      		<li>capital letters</li>
  	      <li>spaces</li>
  	      <li>special characters: <strong>! @ # $ % ^ &amp; * ( ) + { } [ ] : ; " &lt; &gt; ? |</strong> etc...</li>
  			</ul>
      </li>
      <li>acceptable non-alphanumeric characters: <strong>.  _  -  ~</strong></li>
  	  <li>simple default page: <code>index.htm</code>, <code>index.html</code> or <code>index.shtml</code> (or whatever your server default is)</li>
   </ul>

    <h2>Standards: file management</h2>
    <ul>
    	<li>including an <code>index.html</code> file in every folder on your server will ensure users cannot go snooping around your filesystem. the index.html file can be a blank HTML page if you like, as long as the user does not see a list of files when they request a folder </li>
    	<li>browser caching can reduce excessive request/response transactions between client and server. however, some browsers may cache things like the CSS, so if the styles have changed since caching the client may not get the latest styles.
        <ul>
        	<li><code>Ctrl + F5</code> (<code>Cmd + F5</code> for Mac) will force a page reload, but what if you users don't think to do so?</li>
        	<li>if a file name has changed, the browser will have to make a new request from the server. versioning your file names will ensure users always have the latest version of any file (for example <code>styles_1.0.css, styles_1.1.css, styles_1.2.css, styles_2.0.css</code> etc)</li>
        </ul>
      </li>
    	<li>if there are files/pages on your server no longer being used, be sure to either remove them or locate them in a place where users are not going to accidentally find them</li>
    </ul>

    <h2>Semantic Markup</h2>
    <h3>What is Semantic Markup?</h3>
    <ul>
    	<li>The practice of organizing your content into a structured hierarchy</li>
    	<li>Using appropriate tags for the content</li>
    	<li>H1 ... 6 tags for summary headings</li>
    	<li>UL tags for unsorted, unranked, related points</li>
    	<li>OL tags for sorted, ranked, related points</li>
    	<li>Paragraph tags instead of double BR tags</li>
    	<li>CSS instead of FONT</li>
    	<li>HTML tables used for semantic value (tabular data), not for layouts</li>
    	<li>Key: Separate Content (HTML) from Presentation (CSS)</li>
    </ul>
    <h3>Building Content Relationships</h3>
    <ul>
    	<li>Use appropriate tags for headings, content, sub-content, lists</li>
    	<li>This builds a relationship that descends from the title of the page</li>
    	<li>Each section is a discrete piece of information</li>
    	<li>Headings are related to following paragraphs</li>
    	<li>Citations, quotes, code samples can be contextualized by nearest heading</li>
    </ul>
    <h3>Logical vs. Physical Styles</h3>
    <ul>
    	<li>Tend to display identically in browsers, but are fundamentally different</li>
    	<li>Physical styles define what content <em>looks like</em></li>
    	<li>Logical styles define what content <em>is</em></li>
    	<li>Logical styles are important for screen readers, physical styles are not</li>
    	<li>Given a choice, logical styles are usually preferred</li>
    	<li>Some physical styles:
    	<ul>
    	<li><code>b</code> - Bold</li>
    	<li><code>i</code> - Italic</li>
    	<li><code>s</code> - Strikethrough</li>
    	<li><code>u</code> - Underline</li>
    	</ul></li>
    </ul>
    <h3>Logical Styling</h3>
    <ul>
    	<li>Best way to markup content for long-term usage</li>
    	<li>Use CSS to change style (and some behaviour)</li>
    	<li>Use DOM to change behaviour (via scripting)</li>
    	<li>Requires thinking ahead</li>
    	<li>Examples of logical styles:
    	<ul>
    	<li><code>code</code> - <code>Code sample</code></li>
    	<li><code>kbd</code> - <kbd>Keyboard entry</kbd></li>
    	<li><code>samp</code> - <samp>Programming sample</samp></li>
    	<li><code>var</code> - <var>Variable</var></li>
    	<li><code>cite</code> - <cite>Citation</cite></li>
    	<li><code>dfn</code> - <dfn>Definition</dfn></li>
    	<li><code>abbr</code> - <abbr title="Abbreviation definition here">Abbreviation</abbr></li>
    	<li><code>acronym</code> - <acronym title="This is an acronym">Acronym</acronym></li>
    	<li><code>del</code> - <del>Deleted text</del></li>
    	<li><code>ins</code> - <ins>Inserted text</ins></li></ul></li>
    </ul>
    <h3>Key Advantages Of Semantic Content</h3>
    <ul>
    	<li>Content is relational - context can be determined easily</li>
    	<li>Extracting important pieces of information is simple (CITE or CODE tags for example)</li>
    	<li>Search engine optimization  (SEO)</li>
    	<li>Syndication  (RSS)</li>
    	<li>Big win for frameworks such as jQuery (again)!</li>
    	<li>Screen reader friendly</li>
    	<li>Separates style (CSS) from structure (HTML), making it easier to maintain</li>
    </ul>
  </div>

  <div id="summary" class="tab-pane fade">
    <h2>Summary</h2>
    <h3>Prerequisites</h3>
  	<p>While there is plenty of individual homework to do, there will be several team oriented exercises in this class. Be sure to build pages you are proud of, and be ready and willing to share the them with your colleagues. All COMP1950 students must verify they are capable of connecting to their course webspace via FTP. Students are expected to be fluent with the use of FTP, so be sure to remember your connectivity information.</p>
    <h3>COMP1950 Best Practices</h3>
    <ul>
    	<li>get acquainted with a browser based developer tool(s). they are crucial to making your development more efficient and effective</li>
    	<li>practice standards based development at all times:
    		<ul>
      		<li>encourage user trust by building pages that are coherent and well presented</li>
      		<li>facillitate accessibility options for the disabled</li>
      		<li>HTML: used for describing the <strong>semantics</strong> and <strong>structure</strong> of page content</li>
      		<li>CSS: used for applying <strong>presentation</strong> rules (colors, fonts, content location/position)</li>
      		<li>Javascript: enables page <strong>behavior</strong>, response to user interactions</li>
    		</ul>
    	</li>
    	<li>recognize that only structuraly valid code can be expected to operate predictably
    		<ul>
    			<li><a href="http://validator.w3.org/">W3C HTML validator</a></li>
    			<li><a href="http://jigsaw.w3.org/css-validator/">W3C CSS validator</a></li>
    			<li>Include a <a href="http://validator.w3.org/check?uri=referer">referer link</a> on all your COMP1950 pages: <br /><code>&lt;a href="http://validator.w3.org/check?uri=referer"&gt;validate&lt;/a&gt;</code>.</li>
    		</ul>
    	</li>
    </ul>
  	<p>...and yes, there will be a practical, open book quiz at the start of session #2! (hint: practice using a browser based diagnostic tool like we did during todays exercise)</p>
  </div>

  <div id="resources" class="tab-pane fade">
    <h2>Standards Resources</h2>
    <ul>
    	<li>WASP <a href="http://www.webstandards.org/">http://www.webstandards.org/</a></li>
    	<li>W3C <a href="http://www.w3c.org/">http://www.w3c.org</a></li>
    	<li>W3C Sites <a href="http://www.w3csites.com/">http://www.w3csites.com/</a></li>
    </ul>
  </div>

  <div id="homework" class="tab-pane fade">
    <h2>Homework</h2>
    <ul>
    	<li>due to be published to the class server by midnight, the night before the next class</li>
    	<li><a href="/_shared_resources_1950/downloads/comp1950homework01.pdf">download the homework</a></li>
    </ul>
  </div>

</div>
