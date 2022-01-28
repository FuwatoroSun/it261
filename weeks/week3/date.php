<?php
// Playing with our date function!!

// date
echo date("l")."<br>";

// day, month date year time
echo date("l, F j, Y h:i")."<br>";

// set timezone into php
date_default_timezone_set('America/Los_Angeles');
echo date("l")."<br>";
echo date("l, F j, Y h:i")."<br>";

echo '<br>';

// h: max 12 hours, H: max 24 hours / A: AM or PM
$our_date = date('H:i A');
echo $our_date;

echo '<br>';

if ($our_date <= 11) {
    echo '<h1>Good Morning!</h1> <img>';
} elseif ($our_date <= 17) {
    echo 'Good Afternoon!';
} else {
    echo 'Good Evening!';
}