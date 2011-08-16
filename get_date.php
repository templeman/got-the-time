<?php
$time = date('U');
$date = date('l \t\h\e jS \of F Y h:i A');
$myArray = array(
   'time' => $time,
   'date' => $date
);

// echo $myArray['time'];

$JSONobject = json_encode($myArray);

echo $JSONobject;

?>
