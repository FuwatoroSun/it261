<?php

include('config.php');
include('./includes/header.php');

// if id has been set!
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: project.php');
}

// we have to select from the table and make sure that people_id=$id

$sql = 'SELECT * FROM ghibli WHERE ghibli_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    // before we copy and paste our while loop, we cannot out anything here
    while ($row = mysqli_fetch_assoc($result)) {
        $ghibli_name = stripslashes($row['ghibli_name']);
        $ghibli_director = stripslashes($row['ghibli_director']);
        $ghibli_producer = stripslashes($row['ghibli_producer']);
        $ghibli_year = stripslashes($row['ghibli_year']);
        $details = stripslashes($row['details']);
        $feedback = '';
    } // closing the while loop

} else { // closing if mysql_num_rows
    $feedback = 'Houston, we have a problem!';
} // closing else

// we will 


include('header.php');

?>

<div id="wrapper">
    <main>
        <h1>Welcome to my Project Page!</h1>
        <h2>Welcome to <?php echo $ghibli_name ;?>'s Page</h2>
        <ul>
            <?php 
                echo '
                    <li><b>Movie Name:</b> '.$ghibli_name.'</li>
                    <li><b>Director Name:</b> '.$ghibli_director.'</li>
                    <li><b>Producer Name:</b> '.$ghibli_producer.'</li>
                    <li><b>Released Year:</b> '.$ghibli_year.'</li>
                    <li><p>'.$details.'</p></li>
                ';
            ?>
        </ul>
        <p><a href="project.php">Return to the Ghibli list page!</a></p>
    </main>

    <aside>
        <h3>Headline three for the aside that will display the person's image</h3>
        <figure>
            <image src="images/project/ghibli<?php echo $id ;?>.jpg" alt="<?php echo $ghibli_name ;?>">
            <figcaption><?php echo ''.$ghibli_name.' '.$ghibli_year.'';?></figcaption>
        </figure>
    </aside>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');