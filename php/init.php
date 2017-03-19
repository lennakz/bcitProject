<?php

  function zeroPad($text)
  {
    return str_pad($text, 2, '0', STR_PAD_LEFT);
  }

  if (empty($_GET['id']))
    $pageId = '1';
  else
    $pageId = $_GET['id'];
