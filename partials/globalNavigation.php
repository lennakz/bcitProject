<div id="gloabalNavbar">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img class="img-responsive" src="images/bcit-logo.png" alt="BCIT Logo" width="40"></a>
      </div>
      <div class="global-links collapse navbar-collapse" id="myNavbar">
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
        <ul class="nav navbar-nav navbar-right">
          <<li><button id="print-button"  onclick="triggerPrint()"><a id="print-link" href="#"><i class="fa fa-print"></i> Print</a></button></li>
          <li><a id="projector" href="#"><i class="fa fa-square-o" aria-hidden="true"></i> Projector</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <script>
  function triggerPrint() {
      window.print();
  }
  </script>

</div>
