<?php
$created = strtotime("2012-05-22 21:30:00");
$now = time();
$daylength = 60*60*24;
$timeago = round(($now - $created) / $daylength, 2);
?><!DOCTYPE html>
<html>
  <head>
    <title>ReactiveRaven.co.uk</title>
    <style>
      body
      {
        background: black;
        color: white;
      }
      
      a, a:visited, a:active
      {
        color: yellow;
      }
      
      a:hover
      {
        color: white;
      }
      
      .logo
      {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 500px;
        margin-left: -250px;
        margin-top: -250px;
      }
    </style>
  </head>
  <body>
    <img src="/images/rrlogowhite.svg" class="logo" />
    <!-- 
      much better, no?
      A nice, oblique logo.
    
      by the way, if you want to contact me try:
      twitter @reactiveraven
      email   reactiveraven @gmail.com
    -->
  </body>
</html>
