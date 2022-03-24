<?php

session_start();
include('config.php');
include('./includes/header.php');

?>

<div id="wrapper">

    <main>

        <h1>Welcome to my project page</h1>

        <?php
        $sql = 'SELECT * FROM restaurant';
        // then we are going to connect to the database!!!

        // define('DB_NAME','oshish5_winter2022');
        // define('DB_USER','oshish5_winter2022_user');
        // define('DB_PASSWORD','');
        // define('DB_HOST','localhost');

        // restaurant_id
        // restaurant_name
        // restaurant_genre
        // restaurant_address
        // restaurant_map
        // restaurant_web

        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        // we are asking if the number of rows is greater than zero, then we will be able to see the table...

        if(mysqli_num_rows($result) > 0) {
            // think about our one row being an array - an associative array $row['first_name']
            while($row = mysqli_fetch_assoc($result)) {
                echo '
                    <h2>Information about <i>'.$row['restaurant_name'].'</i></h2>
                    <ul>
                        <li><b>Restaurant Name: </b>'.$row['restaurant_name'].'</li>
                        <li><b>Restaurant Genre: </b>'.$row['restaurant_genre'].'</li>
                    </ul>
                    <p>For more information about <i>'.$row['restaurant_name'].'</i> click <a href="project-view.php?id='.$row['restaurant_id'].'">here</a></p>
                ';
            } // close while loop

        } // close if statement

        ?>

    </main>

    <aside>
        <h3>This is my aside that will be describe random images!</h3>
        <?php echo random_images($photos) ;?>
        <?php echo random_images($photos) ;?>
    </aside>

</div>
<!-- end wrapper -->

<?php

include('./includes/footer.php');