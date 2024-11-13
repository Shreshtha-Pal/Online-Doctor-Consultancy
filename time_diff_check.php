<?php
$start = strtotime('12:01:00');
$end = strtotime('13:16:00');
$mins = ($end - $start) / 60;
//echo $mins;

echo "<br>";
echo date("g:i a", strtotime("13:30:00"));



$time = strtotime('10:00:00');
$startTime = date("H:i", strtotime('-30 minutes', $time));
$endTime = date("H:i", strtotime('+30 minutes', $time));


echo "<br>";

echo $startTime;

echo "<br>";


echo $endTime;
echo "<br>";

echo date("H:i",strtotime('+10 minutes', $time ));



?>
