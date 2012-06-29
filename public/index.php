<?php
$created = strtotime("2012-05-22 21:30:00");
$now = time();
$daylength = 60*60*24;
$timeago = round(($now - $created) / $daylength, 2);
?>
<h1>I registered this domain <?php echo $timeago; ?> days ago</h1>
If that seems like a long time, bug me at <a href="http://www.twitter.com/ReactiveRaven">@reactiveraven</a>
