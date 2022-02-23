<?php
    ob_start();
    include('config.php');
    include('includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1><?php echo $headline ;?></h1>
        <p>Want to know what the coolest anime is? Welcome! These are my favorite Japanese animes!</p>
        
    </main>
    <aside>
        <h3>This is my wonderful aside container!</h3>
        <p>This will be a paragraph of information on my gallery page</p>
    </aside>
 </div> <!--end wrapper -->

<?php
    include('includes/footer.php');
?>
