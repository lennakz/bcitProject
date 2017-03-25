<div id="gloabalNavbar">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php"><img class="img-responsive" src="images/bcit-logo.png" alt="BCIT Logo" width="40"></a>
      </div>
      <div class="global-links">
        <ul class="nav navbar-nav">
          <li><a href="about.php">About</a></li>
          <li><a href="lectures.php">Lectures</a></li>
          <li><a href="resources.php">Resources</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">BCIT Links <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://www.bcit.ca/">BCIT</a></li>
              <li><a href="https://learn.bcit.ca/">D2L</a></li>
              <li><a href="http://www.bcit.ca/mybcit/login/">myBCIT</a></li>
              <li><a href="http://www.bcit.ca/about/locations.shtml">Campuses</a></li>
              <li><a href="http://www.bcit.ca/contacts/">Contacts</a></li>
              <li><a href="http://www.bcit.ca/calendar/">Calendar</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>

      <form class="navbar-form navbar-right">
        <div class="input-group">
          <!-- Search input -->
          <script>
            (function() {
              var cx = '003121848754179133006:hfuvuhvjmta';
              var gcse = document.createElement('script');
              gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          <gcse:search></gcse:search>
          <!-- End Search input -->
        </div>
      </form>

    </div>
  </nav>

  <script>
  function triggerPrint() {
      window.print();
  }
  </script>

  <nav class="navbar" style="background-color: transparent">
    <div class="container-fluid">
      <div class="global-links">
        <ul id="change-view-nav" class="nav navbar-nav">
          <li><button id="print-button"  onclick="triggerPrint()"><a id="print-link" href="#"><i class="fa fa-print"></i> Print Lecture</a></button></li>
          <li><a id="projector" href="#"><i class="fa fa-square-o" aria-hidden="true"></i> Projector View</a></li>
        </ul>
      </div>
    </div>
  </nav>

</div>
