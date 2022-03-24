<?php
    session_start();
    include('config.php');
    include('includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1><?php echo $headline ;?></h1>
        <p>Want to know more about the best restaurant in Seattle?<br>Welcome! You can get some recommendations based on your favorite dishes!</p>
        
        <?php include('includes/form.php') ;?>
        
    </main>
    <aside>
        <h3>Recommended examples</h3>
        <img class="contact_img" src="images/steak.jpg" alt="Steak">
        <img class="contact_img" src="images/ramen.jpg" alt="Ramen">
        <img class="contact_img" src="images/kimuchi.jpg" alt="Kimuchi">
        <img class="contact_img" src="images/pizza.jpg" alt="Pizza">
        <img class="contact_img" src="images/padthai.jpg" alt="Pad thai">
        <img class="contact_img" src="images/sushi.jpg" alt="Sushi">
    </aside>
</div> <!--end wrapper -->

<?php
    include('includes/footer.php');
?>
