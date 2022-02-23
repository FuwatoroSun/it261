<?php
    ob_start();
    include('config.php');
    include('includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1><?php echo $headline ;?></h1>
        <p>Want to know what the coolest anime is? Welcome! These are my favorite Japanese animes!</p>
        <?php
            echo $anime;
        ?>
        <p><?php echo $content;?></p>

        <h2>Don't see your favorite anime? Check out the days below!</h2>
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
                                     echo 'rgb(0, 250, 208)';
                                 } else {
                                     echo 'blue';
                                 } ;?>" href="daily.php?today=Sunday">
                Sunday</a>
            </li>
            <li><a style="color:<?php 
                                 if($today == 'Monday') {
                                     echo 'rgb(0, 132, 255)';
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
                                     echo 'rgb(60, 0, 95)';
                                 } else {
                                     echo 'blue';
                                 } ;?>" href="daily.php?today=Wednesday">
                Wednesday</a>
            </li>
            <li><a style="color:<?php 
                                 if($today == 'Thursday') {
                                     echo 'rgb(255, 196, 0)';
                                 } else {
                                     echo 'blue';
                                 } ;?>" href="daily.php?today=Thursday">
                Thursday</a>
            </li>
            <li><a style="color:<?php 
                                 if($today == 'Friday') {
                                     echo 'rgb(255, 115, 0)';
                                 } else {
                                     echo 'blue';
                                 } ;?>" href="daily.php?today=Friday">
                Friday</a>
            </li>
            <li><a style="color:<?php 
                                 if($today == 'Saturday') {
                                     echo 'rgb(112, 60, 0)';
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
