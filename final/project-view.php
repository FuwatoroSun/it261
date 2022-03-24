<?php

session_start();
include('config.php');
include('./includes/header.php');

// if id has been set!
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: restaurant.php');
}

// we have to select from the table and make sure that people_id=$id

$sql = 'SELECT * FROM restaurant WHERE restaurant_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    // before we copy and paste our while loop, we cannot out anything here
    while ($row = mysqli_fetch_assoc($result)) {
        $restaurant_name = stripslashes($row['restaurant_name']);
        $restaurant_genre = stripslashes($row['restaurant_genre']);
        $restaurant_address = stripslashes($row['restaurant_address']);
        $restaurant_map = stripslashes($row['restaurant_map']);
        $restaurant_web = stripslashes($row['restaurant_web']);
        $details = stripslashes($row['details']);
        $feedback = '';
    } // closing the while loop

} else { // closing if mysql_num_rows
    $feedback = 'We have a problem!';
} // closing else

// we will 


include('header.php');

?>

<div id="wrapper">
    <main>
        <h1>Welcome to my Project Page!</h1>
        <h2>Welcome to <?php echo $restaurant_name ;?>'s Page</h2>
        <ul>
            <?php 
                echo '
                    <li><b>Restaurant Name:</b> '.$restaurant_name.'</li>
                    <li><b>Restaurant Genre:</b> '.$restaurant_genre.'</li>
                    <li><b>Restaurant Address:</b> <a href="'.$restaurant_map.'">'.$restaurant_address.'</a></li>
                    <li><b>Restaurant Website:</b> <a href="'.$restaurant_web.'">'.$restaurant_web.'</a></li>
                    <br>
                    <li class="liststyle-none"><p>'.$details.'</p></li>
                ';
            ?>
        </ul>
        <p><a href="restaurant.php">Return to the Restaurant list page!</a></p>
    </main>

    <aside>
        <h3>This is a picture that I took at this restaurant!</h3>
        <figure>
            <image src="images/project/restaurant<?php echo $id ;?>.jpg" alt="<?php echo $restaurant_name ;?>">
            <figcaption><?php echo ''.$restaurant_name.'';?></figcaption>
        </figure>
    </aside>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');