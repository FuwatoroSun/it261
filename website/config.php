<?php
// We need to define the page that we are on as the page
ob_start();

define('DEBUG', 'TRUE');  // We want to see our errors

include('credential.php');

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday':
        $anime = '<h2 class="lightblue">Sunday is reserved for <i>Sword Art Online</i></h2>';
        $pic = 'sword-art-online.jpg';
        $alt = 'Sword Art Online';
        $content = '<b><i>Sword Art Online</i></b> is a Japanese light novel series written by Reki Kawahara and illustrated by abec. The series takes place in the near future and focuses on protagonist Kazuto "Kirito" Kirigaya and Asuna Yuuki as they play through various virtual reality MMORPG worlds.';
        break;
    case 'Monday':
        $anime = '<h2 class="blue">Monday is reserved for <i>The Irregular at Magic High School</i></h2>';
        $pic = 'irregular.png';
        $alt = 'The Irregular at Magic High School';
        $content = '<b><i>The Irregular at Magic High School</i></b> is a Japanese web novel series by Tsutomu Satō. The story takes place in an alternate history where magic exists and is polished through technology, and follows Tatsuya and Miyuki Shiba, siblings who enroll into First High magic high school. While keeping their connections to the infamous Yotsuba clan secret, they attempt to live their daily life in peace, but Tatsuya is shunned for his apparent ineptness and Miyuki is validated for her magical abilities.';
        break;
    case 'Tuesday':
        $anime = '<h2 class="red">Tuesday is reserved for <i>Arifureta: From Commonplace to World\'s Strongest</i></h2>';
        $pic = 'arifureta.jpg';
        $alt = 'Arifureta: From Commonplace to World\'s Strongest';
        $content = '<b><i>Arifureta: From Commonplace to World\'s Strongest</i></b> is a Japanese light novel series written by Ryo Shirakome and illustrated by Takayaki. The series follows Hajime Nagumo, who is transported to another world with the rest of his class but receives only the most average of magical abilities, forcing him to fight to improve himself.';
        break;
    case 'Wednesday':
        $anime = '<h2 class="purple">Wednesday is reserved for <i>That Time I Got Reincarnated as a Slime</i></h2>';
        $pic = 'slime.jpg';
        $alt = 'That Time I Got Reincarnated as a Slime';
        $content = '<b><i>That Time I Got Reincarnated as a Slime</i></b> is a Japanese fantasy light novel series written by Fuse. The story is about a salaryman who is murdered and reincarnates in a sword and sorcery world as a slime with unique powers and gathers allies to build his own nation of monsters.';
        break;
    case 'Thursday':
        $anime = '<h2 class="yellow">Thursday is reserved for <i>Dr. Stone</i></h2>';
        $pic = 'dr_stone.jpg';
        $alt = 'Dr. Stone';
        $content = '<b><i>Dr. Stone</i></b> is a Japanese manga series written by Riichiro Inagaki and illustrated by the South Korean artist Boichi. The story follows teenage scientific genius Senku Ishigami, who plans to rebuild civilization after humanity was mysteriously petrified for 3,700 years.';
        break;
    case 'Friday':
        $anime = '<h2 class="orange">Friday is reserved for <i>Mushoku Tensei</i></h2>';
        $pic = 'mushoku_tensei.png';
        $alt = 'Mushoku Tensei';
        $content = '<b><i>Mushoku Tensei</i></b> is a Japanese light novel series by Rifujin na Magonote about a jobless and hopeless man who dies after having a sad and reclusive life and reincarnates in a fantasy world while keeping his memories, determined to enjoy his new life without regrets under the name Rudeus Greyrat.';
        break;
    case 'Saturday':
        $anime = '<h2 class="brown">Saturday is reserved for <i>Detective Conan</i></h2>';
        $pic = 'conan.png';
        $alt = 'Detective Conan';
        $content = '<b><i>Detective Conan</i></b> is a Japanese detective manga series written and illustrated by Gosho Aoyama. The story follows the high school detective Shinichi Kudo (renamed as Jimmy Kudo in several English translations) who was transformed into a child while investigating a mysterious organization and generally solved a multitude of cases by impersonating his childhood best friend\'s father and various other characters.';
        break;
}

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
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
    case 'gallery.php':
        $title = 'Our Gallery Page';
        $body = 'gallery inner';
        $headline = 'Welcome to our Gallery!';
        break;
    case 'project.php':
        $title = 'Our Project Page';
        $body = 'project inner';
        $headline = 'Welcome to our Project Page!';
        break;
}

// my navigation and my function

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

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

// BELOW IS MY PHP FOR MY FORM
// Please do not use regions - use your own select option values
// Please do not use wines - use your own checkbox options

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
        $genres_err = 'Which genres do you prefer?';
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

// BELOW IS MY PHP FOR MY GALLERY

$people['Edogawa_Conan'] = 'edoga_Main character_edoga2.';
$people['Shinichi_Kudo'] = 'shini_Real figure of conan_shini2.';
$people['Ran_Mouri'] = 'ranmo_Shinichi\'s Girlfriend_ranmo2.';
$people['Kogoro_Mouri'] = 'kogor_Ran\'s father_kogor2.';
$people['Heiji_Hattori'] = 'heiji_Shinichi\'s best friend_heiji2.';
$people['Kazuha_Toyama'] = 'kazuh_Heiji\'s Girlfriend_kazuh2.';
$people['Ai_Haibara'] = 'haiba_Conan\'s best friend_haiba2.';
$people['Sonoko_Suzuki'] = 'sonok_Ran\'s best friend_sonok2.';

// BELOW IS MY PHP FOR MY PROJECT

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

function random_images($photos) {
    $my_return = '';
    $i = rand(0,21);
    $my_return = '<img class="img" src="images/project/ghibli'.$i.'.jpg" alt="ghibli'.$i.'">';
    return $my_return;
}