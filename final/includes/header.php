<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <!-- <title>< ?php echo $title ;?></title> -->
</head>

<header>
<div id="inner-header">
    <a href="index.php"><img id="logo" src="images/logo.png" alt="logo"></a>

    <nav>
        <ul>

            <?php  // is our wonderful session username set??

                if(isset($_SESSION['username'])) :?>

                <li class="welcome-logout">Welcome, 
                    <?php
                        echo $_SESSION['username'];
                    ?>
                </li>
                <!-- close welcome-logout -->

            <?php endif; ?>

            <?php
                echo make_links($nav);
            ?>
            <li><a href="index.php?logout='1'">Logout</a></li>
        </ul>
    </nav>

</div> <!--end inner-header -->
</header>
