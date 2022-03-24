<?php
// our index page which must show the session_start()

session_start();
include('config.php');

// did the user log in correctly, and if not, the user will receive a message and will be directed back to the log in page

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
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

    <p class="center">
        This is my final project website for IT261!<br>My topic is the best restaurants in Seattle. All of the restaurants listed here are places I have been to during my life in Seattle.<br>
        For more information about this website, please visit <a href="about.php">about</a> page.<br>
        Confused about what to have for dinner today? There is a <a href="daily.php">daily</a> page with daily restaurant recommendations.<br>
        Or, you wanna know a list of restaurant? <a href="restaurant.php">Restaurant</a> page is ready for you!<br>
        If you have any questions about this page, please <a href="contact.php">contact</a> me.<br>
        All done? Here is a link to <a href="index.php?logout='1'">logout</a>!
    </p>

    <img class="seattle" src="images/seattle.jpg" alt="seattle">
</div>

<?php 
include('./includes/footer.php') ;