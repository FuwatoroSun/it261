<?php
    include('config.php');
    include('includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1><?php echo $headline ;?></h1>
        <p>Want to know what the coolest Japanese book is?<br>Welcome! You can get some recommendations based on your favorite genre!</p>
        
        <?php include('includes/form.php') ;?>
        
    </main>
    <aside>
        <h3>Recommended examples</h3>
        <img class="img" src="images/onepiece.jpg" alt="Onepiece">
        <img class="img" src="images/case_closed.jpg" alt="Case Closed">
        <img class="img" src="images/demon_slayer.jpg" alt="Demon Slayer">
        <img class="img" src="images/naruto.jpg" alt="Naruto">
        <img class="img" src="images/silent_voice.jpg" alt="Silent Voice">
        <img class="img" src="images/dr_stone.jpg" alt="Dr.Stone">
    </aside>
</div> <!--end wrapper -->

<?php
    include('includes/footer.php');
?>
