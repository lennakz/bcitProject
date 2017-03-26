<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
        <span>Lectures</span>
      </button>
    </div>
    <div class="global-links collapse navbar-collapse" id="myNavbar1">
      <ul class="nav nav-pills nav-stacked">
      <?php
        require "php/data.php";
        foreach ($links as $id => $text)
        {
          echo "<li><a href='?id={$id}' class='list-group-item";

          if ($pageId == $id)
            echo " active";

          echo "'>";
          echo zeroPad($id) . " - {$text}";
          echo "</li></a>";
        }
      ?>
      </ul>
    </div>
  </div>
</nav>
<br><br>


<!-- <iframe src="https://calendar.google.com/calendar/embed?src=en.canadian%23holiday%40group.v.calendar.google.com&ctz=America/Vancouver" style="border: 0" width="100%" height="300" frameborder="0" scrolling="no"></iframe> -->
