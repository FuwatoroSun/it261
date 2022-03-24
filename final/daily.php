<?php
    session_start();
    ob_start();
    include('config.php');
    include('includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1><?php echo $headline ;?></h1>
        <p>Confused about what to have for dinner today? Welcome! These are my favorite dishes!</p>
        <?php
            echo $dish_name;
        ?>
        <p><?php echo $content;?></p>

        <h2>Don't see your favorite dishes? Check out the days below!</h2>
        <ul>
            <!-- <li><a href="daily.php?today=Sunday">Sunday</a></li>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li> -->
            <li><a style="color:<?php 
                                    if($today == 'Sunday') {
                                        echo 'rgb(166, 54, 13)';
                                    } else {
                                        echo 'blue';
                                    } ;?>" href="daily.php?today=Sunday">
                Sunday</a>
            </li>
            <li><a style="color:<?php 
                                    if($today == 'Monday') {
                                        echo 'rgb(111, 148, 6)';
                                    } else {
                                        echo 'blue';
                                    } ;?>" href="daily.php?today=Monday">
                Monday</a>
            </li>
            <li><a style="color:<?php 
                                    if($today == 'Tuesday') {
                                        echo 'rgb(255, 72, 0)';
                                    } else {
                                        echo 'blue';
                                    } ;?>" href="daily.php?today=Tuesday">
                Tuesday</a>
            </li>
            <li><a style="color:<?php 
                                    if($today == 'Wednesday') {
                                        echo 'rgb(208, 96, 23)';
                                    } else {
                                        echo 'blue';
                                    } ;?>" href="daily.php?today=Wednesday">
                Wednesday</a>
            </li>
            <li><a style="color:<?php 
                                    if($today == 'Thursday') {
                                        echo 'rgb(223, 172, 0)';
                                    } else {
                                        echo 'blue';
                                    } ;?>" href="daily.php?today=Thursday">
                Thursday</a>
            </li>
            <li><a style="color:<?php 
                                    if($today == 'Friday') {
                                        echo 'rgb(183, 84, 93)';
                                    } else {
                                        echo 'blue';
                                    } ;?>" href="daily.php?today=Friday">
                Friday</a>
            </li>
            <li><a style="color:<?php 
                                    if($today == 'Saturday') {
                                        echo 'rgb(171, 115, 24)';
                                    } else {
                                        echo 'blue';
                                    } ;?>" href="daily.php?today=Saturday">
                Saturday</a>
            </li>
        </ul>
    </main>
    <aside>
        <img class="img" src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    </aside>

 </div> <!--end wrapper -->

<?php
    include('includes/footer.php');
?>
