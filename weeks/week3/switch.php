<?php
// class coffee exercise
// if today is Thursday, it will be pumpkin latte day
// we will start with the isset() function
// then we will introduce our first GLOBAL variable
// our switch

// $variable = 'Life is good!';
// if (isset($variable)) {
//     echo 'Yippy-skippy!';
// } else {
//     echo 'Not';
// }

date_default_timezone_set('America/Los_Angeles');

// starting the switch
// if something is set, $today, then all is well
// else, today is TODAY

// GLOBAL VATIABLES are capitalized and start with $_GET

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch

switch($today) {
    case 'Thursday':
        $coffee = '<h2>Thursday is our Cap Day!</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappacino';
        $content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in Austria with later development taking place in Italy, and is prepared with steamed milk foam (microfoam).';
        break;
    case 'Friday':
        $coffee = '<h2>Friday is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = 'An <b>Americano</b> is an espresso-based drink designed to resemble coffee brewed in a drip filter, considered popular in the United States of America.';
        break;
    case 'Saturday':
        $coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Coffee';
        $content = '<b>Coffee</b> is a drink made from coffee beans, which are the roasted fruit of the Coffea arabica bush.';
        break;
    case 'Sunday':
        $coffee = '<h2>Thursday is our Green Tea Day!</h2>';
        $pic = 'green-tea.jpg';
        $alt = 'Green-tea';
        $content = '<b>Green tea</b> is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas.';
        break;
    case 'Monday':
        $coffee = '<h2>Monday is our Oolng Tea Day!</h2>';
        $pic = 'oolong-tea.jpg';
        $alt = 'Oolng-tea';
        $content = '<b>Oolng</b> is a traditional semi-oxidized Chinese tea (Camellia sinensis) produced through a process including withering the plant under strong sun and oxidation before curling and twisting.';
        break;
    case 'Tuesday':
        $coffee = '<h2>Tuesday is our Frappuccino Day!</h2>';
        $pic = 'frappuccino.jpg';
        $alt = 'Frappuccino';
        $content = '<b>Frappuccino</b> is a line of blended iced coffee drinks sold by Starbucks. It consists of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices.';
        break;
    case 'Wednesday':
        $coffee = '<h2>Wednesday is our Smoothie Day!</h2>';
        $pic = 'smoothie.jpg';
        $alt = 'Smoothie';
        $content = 'A <b>smoothie</b> is a drink made by puréeing fruit and vegetables in a blender. A smoothie often has a liquid base such as fruit juice, dairy products, such as milk, yogurt, ice cream or cottage cheese.';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Exercise</title>
    <style>
        #wrapper {
            width: 940px;
            margin: 290px auto;
        }
        img {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <h1>My Wonderful Switch Classwork Exercise!</h1>
        <?php
            echo $coffee;
        ?>
        <img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
        <p><?php echo $content;?></p>
        
        <h2>Check out our daily specials</h2>
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
    </div>
</body>
</html>