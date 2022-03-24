<?php
// our index page which must show the session_start()

session_start();
ob_start();

include('config.php');

// did the user log in correctly, and if not, the user will receive a message and will be directed back to the log in page

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_SESSION['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

include('./includes/header.php'); ?>

<header>
    
    <!-- logic - is our session success set? -->
    <?php
    if(isset($_SESSION['success'])) :?>

    <div class="success">
        <h3>
            <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <!-- close success div -->

    <?php endif; ?>

</header>
<div id="wrapper">
    <h1 class="center"><?php echo $headline ;?></h1>
    <img class="users" src="images/users.png" alt="user table screenshot">
    <img class="users" src="images/restaurant.png" alt="restaurant table screenshot">
</div>

<?php 
include('./includes/footer.php') ;