<?php

    $link = mysqli_connect('localhost', 'root', 'beer6684484', 'finalproject_db');

    mysqli_set_charset($link, 'utf8');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
