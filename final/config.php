<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

date_default_timezone_set('America/Los_Angeles');

$success = 'You have successfully logged on!';
$errors = array();

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
        $headline = 'Welcome to my Home Page!';
        break;
    case 'daily.php':
        $title = 'My Daily Page';
        $body = 'daily inner';
        $headline = 'Welcome to my daily restaurant recommendations page!';
        break;
    case 'contact.php':
        $title = 'My Contact Page';
        $body = 'contact inner';
        $headline = 'Contact me today!';
        break;
    case 'thx.php':
        $title = 'My Thanks Page';
        $body = 'thanks inner';
        $headline = 'Thank you!';
        break;
    case 'about.php':
        $title = 'About My Screenshots';
        $body = 'about inner';
        $headline = 'About my wonderful screenshots!';
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
$nav['restaurant.php'] = 'Restaurant';
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

//  BELOW IS MY PHP FOR MY FDAILY PAGE

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday':
        $dish_name = '<h2 class="brown">Sunday is Steak Day!</h2>';
        $pic = 'steak.jpg';
        $alt = 'Steak';
        $content = '<b>A steak</b> is a meat generally sliced across the muscle fibers, potentially including a bone. It is normally grilled, though it can also be pan-fried. Steak can also be cooked in sauce, such as in steak and kidney pie, or minced and formed into patties, such as hamburgers.';
        break;
    case 'Monday':
        $dish_name = '<h2 class="green">Monday is Ramen Day!</h2>';
        $pic = 'ramen.jpg';
        $alt = 'Ramen';
        $content = '<b>Ramen</b> is a Japanese noodle soup. It consists of Chinese-style wheat noodles served in a meat or (occasionally) fish-based broth, often flavored with soy sauce or miso, and uses toppings such as sliced pork, nori (dried seaweed), menma, and scallions. Nearly every region in Japan has its own variation of ramen, such as the tonkotsu (pork bone broth) ramen of Kyushu, and the miso ramen of Hokkaido. Mazemen is a ramen dish that is not served in a soup, but rather with a sauce (such as tare).';
        break;
    case 'Tuesday':
        $dish_name = '<h2 class="red">Tuesday is Kimuchi Day!</h2>';
        $pic = 'kimuchi.jpg';
        $alt = 'Kimuchi';
        $content = '<b>Kimchi</b>is a traditional Korean side dish of salted and fermented vegetables, such as napa cabbage and Korean radish. A wide selection of seasonings are used, including gochugaru (Korean chili powder), spring onions, garlic, ginger, and jeotgal (salted seafood), etc. Kimchi is also used in a variety of soups and stews. As a staple food in Korean cuisine, it is eaten as a side dish with almost every Korean meal.';
        break;
    case 'Wednesday':
        $dish_name = '<h2 class="orange">Wednesday is Pizza Day!</h2>';
        $pic = 'pizza.jpg';
        $alt = 'Pizza';
        $content = '<b>Pizza</b> is a dish of Italian origin consisting of a usually round, flat base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients (such as anchovies, mushrooms, onions, olives, pineapple, meat, etc.), which is then baked at a high temperature, traditionally in a wood-fired oven. A small pizza is sometimes called a pizzetta. A person who makes pizza is known as a pizzaiolo.';
        break;
    case 'Thursday':
        $dish_name = '<h2 class="yellow">Thursday is Pad thai Day!</h2>';
        $pic = 'padthai.jpg';
        $alt = 'Padthai';
        $content = '<b>Pad thai</b> is a stir-fried rice noodle dish commonly served as a street food in Thailand as part of the country\'s cuisine. It is typically made with rice noodles, shrimp, peanuts, a scrambled egg, and bean sprouts, among other vegetables. The ingredients are fried in a wok. Once the dish is completed it is tossed in pad thai sauce, which gives the dish its signature tangy salty flavor with a hint of sweetness.';
        break;
    case 'Friday':
        $dish_name = '<h2 class="pink">Friday is Sushi Day!</h2>';
        $pic = 'sushi.jpg';
        $alt = 'Sushi';
        $content = '<b>Sushi</b> is a Japanese dish of prepared vinegared rice, usually with some sugar and salt, accompanied by a variety of ingredients, such as seafood, often raw, and vegetables. Styles of sushi and its presentation vary widely, but the one key ingredient is "sushi rice", also referred to as <i>shari</i>, or <i>sumeshi</i>.';
        break;
    case 'Saturday':
        $dish_name = '<h2 class="lightbrown">Saturday is Enchilada Day!</h2>';
        $pic = 'enchilada.jpg';
        $alt = 'Enchilada';
        $content = '<b>Enchilada</b> is a corn tortilla rolled around a filling and covered with a savory sauce. Originally from Mexican cuisine, enchiladas can be filled with various ingredients, including meats, cheese, beans, potatoes, vegetables, or combinations. Enchilada sauces include chili-based sauces, such as salsa roja, various moles, or cheese-based sauces, such as chile con queso.';
        break;
}

// BELOW IS MY PHP FOR MY FORM

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$phone = '';
$genres = '';
$states = '';
$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$genres_err = '';
$states_err = '';
$comments_err = '';
$privacy_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please enter your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please enter your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $gender_err = 'Please choose your gender';
    } else {
        $gender = $_POST['gender'];
    }

    // if (empty($_POST['phone'])) {
    //     $phone_err = 'Please enter your phone number';
    // } else {
    //     $phone = $_POST['phone'];
    // }

    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        } // end else
    } // end main if

    if (empty($_POST['genres'])) {
        $genres_err = 'Which cuisines do you prefer?';
    } else {
        $genres = $_POST['genres'];
    }

    if ($_POST['states'] == NULL) {
        $states_err = 'Please select your states';
    } else {
        $states = $_POST['states'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = 'Your comments, please!';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'You cannot pass go!';
    } else {
        $privacy = $_POST['privacy'];
    }

    // our lines functions
    function my_genres($genres) {
        $my_return = '';
        if(!empty($_POST['genres'])) {
            $my_return = implode(', ',$_POST['genres']);
        } else {
            $genres_err = 'Please check your genres';
        }
        return $my_return;
    } // end genres functions


    if(isset($_POST['first_name'],
             $_POST['last_name'],
             $_POST['email'],
             $_POST['gender'],
             $_POST['phone'],
             $_POST['genres'],
             $_POST['states'],
             $_POST['comments'],
             $_POST['privacy'])) {
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email'.date('m/d/y, h i A');
        $body = '
            First name : '.$first_name.' '.PHP_EOL.'
            Last name : '.$last_name.' '.PHP_EOL.'
            Email : '.$email.' '.PHP_EOL.'
            Gender : '.$gender.' '.PHP_EOL.'
            Phone number : '.$phone.' '.PHP_EOL.'
            States : '.$states.' '.PHP_EOL.'
            Genres : '.my_genres($genres).' '.PHP_EOL.'
            Comments : '.$comments.' '.PHP_EOL.'
        ';

        if(!empty($first_name &&
                  $last_name &&
                  $email &&
                  $gender &&
                  $phone &&
                  $genres &&
                  $states &&
                  $comments &&
                  $privacy)) {
            
            $headers = array(
                'From' => 'mh.io.c1211216@gmail.com',
                'Reply to:' => ''.$email.''
            );

            mail($to, $subject, $body,$headers);
            header('Location: thx.php');

        } // close if not empty statement

    } // close isset

} // end server request

// BELOW IS MY PHP FOR MY PROJECT

function random_images($photos) {
    $my_return = '';
    $i = rand(1,9);
    $my_return = '<img class="img" src="images/project/restaurant'.$i.'.jpg" alt="restaurant'.$i.'">';
    return $my_return;
}