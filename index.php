<html>
<head>    
<link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
include 'calendar.php';
$calendar = new Calendar();

//un comment below to use plugin
/*
include 'highlight_today.php';
$highlightToday = new HighlightToday();
$calendar->attachObserver('showCell',$highlightToday);
*/

echo $calendar->show();
?>
</body>
</html>