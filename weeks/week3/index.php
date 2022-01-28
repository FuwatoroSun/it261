<?php
// arrays reminds me of a category, a category of druits, names,
// navigation

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// one way
$fruits = array(
    'bananas',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pineapple'
);

// another way
$fruits = [
    'bananas',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pineapple'
];

// another way(index array)
$fruits[0] = 'bananas';
$fruits[1] = 'strawberries';
$fruits[2] = 'blueberries';
$fruits[3] = 'oranges';
$fruits[4] = 'apples';
$fruits[5] = 'pineapple';

// we can't echo an array
// echo $fruits;

// we can echo an array with []
echo $fruits[2]; //2kome wo toridasu
echo '<br>';

print_r($fruits); //hairetu nomamma hyouji
echo '<br>';

var_dump($fruits); //hairetu to kata wo hyouji
echo '<br>';

echo '<pre>';
var_dump($fruits); //tatenaga ni hyouji
echo '</pre>';


// sorezore no atai wo array ni shitai
$title = 'The Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

$book = array(
    'title' => 'The Handmaid\'s Tale',
    'author' => 'Margaret Atwood',
    'character' => 'June',
    'actor' => 'Elizabeth Moss'
);

// associative array
//$nav $key         $value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

echo '<br>';

// you can echo an associative array by using a foreach loop
foreach($nav as $key => $value) {
    echo 'Link '.$key.' Visual '.$value.'<br> ';
}

echo '<br>';

foreach($nav as $key => $value) {
    echo '<a href=" '.$key.' "> '.$value.'</a><br> ';
}

?>

<!-- If we are on the home page of our website, home will display diffirentiatly -->
<!-- If we are on THIS_PAGE, we will be styling for this page -->
<!-- If THI_PAGE == $key -->
<html>
    <head>
        <style>
            .current {
                color: red;
            }
        </style>
    </head>
    <body>
        <nav>
            <ul>
                <?php
                    foreach($nav as $key => $value) {
                        if(THIS_PAGE == $key) {
                            echo '<li><a class="current" href=" '.$key.' "> '.$value.'</a></li>';
                        } else {
                            echo '<li><a href=" '.$key.' "> '.$value.'</a></li>';
                        }
                    } // end foreach
                ?>
            </ul>
        </nav>
    </body>
</html>