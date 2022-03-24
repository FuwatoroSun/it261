<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$success = 'You have successfully logged on!';
$errors = array();

// my php for my daily page
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday':
        $anime = '<h2 class="lightblue">Sunday is ...</h2>';
        $pic = '';
        $alt = '';
        $content = '';
        break;
    case 'Monday':
        $anime = '<h2 class="blue">Monday is ...</h2>';
        $pic = '';
        $alt = '';
        $content = '';
        break;
    case 'Tuesday':
        $anime = '<h2 class="red">Tuesday is ...</h2>';
        $pic = '';
        $alt = '';
        $content = '';
        break;
    case 'Wednesday':
        $anime = '<h2 class="purple">Wednesday is ...</h2>';
        $pic = '';
        $alt = '';
        $content = '';
        break;
    case 'Thursday':
        $anime = '<h2 class="yellow">Thursday is ...</h2>';
        $pic = '';
        $alt = '';
        $content = '';
        break;
    case 'Friday':
        $anime = '<h2 class="orange">Friday is ...</h2>';
        $pic = '';
        $alt = '';
        $content = '';
        break;
    case 'Saturday':
        $anime = '<h2 class="brown">Saturday is ...</h2>';
        $pic = '';
        $alt = '';
        $content = '';
        break;
} // end switch

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// my switch for my title, body class and possibly headline
// these are our pages!
// Home
// About
// Daily
// Mytopic
// Contact

// Register
// Login

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Our Home Page';
        $body = 'home';
        $headline = 'Welcome to our Home Page';
        break;
    case 'daily.php':
        $title = 'Our Daily Page';
        $body = 'daily inner';
        $headline = 'Welcome to our Daily page where my Homework 3 switch will display!';
        break;
    case 'contact.php':
        $title = 'Our Contact Page';
        $body = 'contact inner';
        $headline = 'Contact us today!';
        break;
    case 'thx.php':
        $title = 'Our Thanks Page';
        $body = 'thanks inner';
        $headline = 'Thank you!';
        break;
    case 'about.php':
        $title = 'About our Screenshots';
        $body = 'about inner';
        $headline = 'About out wonderful screenshots!';
        break;
    case 'register.php':
        $title = 'Register Today!';
        $body = 'register inner';
        $headline = 'Register Today!';
        break;
    case 'login.php':
        $title = 'Login Today!';
        $body = 'login inner';
        $headline = 'Login Page!';
        break;
    case 'restaurant.php':
        $title = 'Seattle\'s best restaurant!';
        $body = 'restaurant inner';
        $headline = 'Restaurant Page!';
        break;
} // closing switch for my titles, body classes etc

// my navigation and my function

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['restaurant.php'] = 'restaurant';
$nav['contact.php'] = 'Contact';

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href=" '.$key.' "> '.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href=" '.$key.' "> '.$value.'</a></li>';
        }
    } // end foreach
    return $my_return;
} // end function

function myError($myFile, $myLine, $errorMsg){
    if(defined('DEBUG') && DEBUG){
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    }  else {
        echo ' Houston, we have a problem!';
        die();
    }
}