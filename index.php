<?php
$date = date('d-m-Y');
$time = date('d-m-Y H:i');

$date = date('d-m-Y H:i');
$date = str_getcsv($date, ' ');

$arr = str_getcsv($date[0], '-');
$timeArr = str_getcsv($date[1], ':');

if(count($arr) < 3) throw new Exception('Invalid Date');
$day = str_split($arr[0]);
$month = str_split($arr[1]);
$year = str_split($arr[2]);

$hour = str_split($timeArr[0]);
$min = str_split($timeArr[1]);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>HNG Internship 4</title>
<link rel="stylesheet" href="public/css/style.css" />
</head>
<body style="background-image: url('public/welcome-bg.png');" >
	<header id="header">
		HNG Internship, Stage 1
	</header>
	<br /><br /><br />
	<div style="display: inline;">
		<h3 id="datetime">Time & Date</h3>
		<div id="clock-cover" class="cover">
			<div id="time-cover">
				<div class="cover-item" id="hour">
					<p>Hour</p>
    				<div class="item"><?= $hour[0] ?></div>
    				<div class="item"><?= $hour[1] ?></div>
    			</div>
    			<div class="cover-item" id="min">
    				<p>Min</p>
    				<div class="item"><?= $min[0] ?></div>
    				<div class="item"><?= $min[1] ?></div>
    			</div>
			</div>
			<div id="date-cover">
    			<div class="cover-item" id="day">
    				<p>Day</p>
    				<div class="item"><?= $day[0] ?></div>
    				<div class="item"><?= $day[1] ?></div>
    			</div>
    			<div class="cover-item" id="month">
    				<p>Month</p>
    				<div class="item"><?= $month[0] ?></div>
    				<div class="item"><?= $month[1] ?></div>
    			</div>
    			<div class="cover-item" id="year">
    				<p>Year</p>
    				<div class="item"><?= $year[0] ?></div>
    				<div class="item"><?= $year[1] ?></div>
    				<div class="item"><?= $year[2] ?></div>
    				<div class="item"><?= $year[3] ?></div>
    			</div>
    		</div>
		</div>
	</div>
</body>
</html>