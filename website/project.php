<?php

include('config.php');
include('./includes/header.php');

?>

<div id="wrapper">

    <main>

        <h1>Welcome to my project page</h1>

        <?php
        $sql = 'SELECT * FROM ghibli';
        // then we are going to connect to the database!!!

        // define('DB_NAME','oshish5_winter2022');
        // define('DB_USER','oshish5_winter2022_user');
        // define('DB_PASSWORD','');
        // define('DB_HOST','localhost');

        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        // we are asking if the number of rows is greater than zero, then we will be able to see the table...

        if(mysqli_num_rows($result) > 0) {
            // think about our one row being an array - an associative array $row['first_name']
            while($row = mysqli_fetch_assoc($result)) {
                echo '
                    <h2>Information about <i>'.$row['ghibli_name'].'</i></h2>
                    <ul>
                        <li><b>Movie Name:</b>'.$row['ghibli_name'].'</li>
                        <li><b>Released Year:</b>'.$row['ghibli_year'].'</li>
                    </ul><br>
                    <p>For more information about <i>'.$row['ghibli_name'].'</i> click <a href="project-view.php?id='.$row['ghibli_id'].'">here</a></p>
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