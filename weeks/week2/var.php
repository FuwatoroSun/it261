<?PHP
//this is a comment tag

$name = 'Miho';
echo $name;
echo '<br>'; // kaigyou
$name = 'Suzuki';
echo $name;
echo '<br>';
echo 'My first name is $name';
echo '<br>';
echo "My first name is $name"; // use single quotes, not double quotes
echo '<br>';
echo 'My first name is '.$name.'';
echo '<br>';

$temp = 45; //another data type is integers
echo 'The temperature today was '.$temp.' degrees.';
echo '<br>';

$body_temp = 98.6; // anything with a decimal is called a float
echo $body_temp;
echo '<br>';

//another data type is boolean = true(1) or false(0)
//another data type is NULL
//<select><option value="" NULL>Select one</option></select>

$vehicle = 'truck';

$x = 20;
$y = 30;
$z = $x * $y;
echo $z;
echo '<br>';

// circumference of a circle  - 2 pie r
$pie = 3.14;
$radius = 10;
$circumference = 2 * $radius * $pie;
echo $circumference;
echo '<br>';

//ceil is a funtion that will round up
//floor is a funtion that will round down
$celcius = 4;
$far = ($celcius * 9/5) + 32;

// toomawari na yarikata
// $friendly_far = ceil($far);
// echo $friendly_far;

//kocchi no ga tsukau yo
echo ceil($far);

echo '<br>';

$money = 100;
$divide = 7;
$amount = $money / $divide;
echo 'I now have $'.$amount.' dollars!';
echo '<br>';

// number_format($amount, 2)
$friendly_amount = number_format($amount, 2);
echo 'I now have $'.$friendly_amount.' dollars!';
echo '<br>';
echo '<p>I now have <b>$'.number_format($amount, 2).'</b> dollars!<p>'; //kocchi noga tsukai yasusou

?>

<h1>Now we will be playing with the concatenation operator</h1>

<?php 

$first_name = 'Miho';
$last_name = 'Suzuki';
echo '<br>';
echo $first_name;
echo '<br>';
echo $last_name;
echo '<br>';

$myname = 'Miho';
$myname .= ' Suzuki';
echo $myname;
echo '<br>';

$a = 30;
$b = 3;
$c = $a / $b;
echo $c;
echo '<br>';

$a = 30;
$a /= 3;
echo $a;
echo '<br>';

$vegetables[]= 'spinach';
$vegetables[]= 'broccoli';
$vegetables[]= 'asparagus';
$vegetables[]= 'kale';
echo $vegetables;

?>