<?php
// Prints the day, i.e. Monday (the lowercase letter L)
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
echo '<br>';

$time = idate("H");
if($time < 11) {
    echo 'It is morning';
} elseif($time < 16) {
    echo 'It\'s afternoon';
}else {
    echo 'It\'s evening';
}
?>
