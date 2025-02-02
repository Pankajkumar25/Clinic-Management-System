<?php

/*$date1 = "2018-03-24";
$date2 = "2019-05-31";

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days\n", $years, $months, $days);*/





$date1 = date_create("2018-03-24");
echo "Start date: ".$date1->format("Y-m-d")."<br>";
$date2 = date_create("2019-05-31");
echo "End date: ".$date2->format("Y-m-d")."<br>";
$diff = date_diff($date1,$date2);
echo "Difference between start date and end date: ".$diff->format("%y years, %m months and %d days");
?>