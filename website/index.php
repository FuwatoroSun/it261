<?php
    include('config.php');
    include('includes/header.php');

    $photos[0] = 'onepiece';
    $photos[1] = 'case_closed';
    $photos[2] = 'demon_slayer';
    $photos[3] = 'naruto';
    $photos[4] = 'silent_voice';
    $photos[5] = 'dr_stone';

    $i = rand(0,4);

    function random_images($photos) {
        $my_return = '';
        $i = rand(0,5);
        $selected_image = ''.$photos[$i].'.jpg';
        $my_return = '<img class="img" src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
        return $my_return;
    }
?>

<div id="wrapper">
    <div id="hero">

    </div> <!--end hero -->
    <main>
        <h1>Welcome to the homepage of our Website, located in our Website Folder!</h1>
        <h2>This page is about Japanese anime, cartoon and novels!</h2>
    </main>
    <aside>
        <h3>This is my wonderful aside container!</h3>
        <?php echo random_images($photos) ;?>
        <?php echo random_images($photos) ;?>
    </aside>
 </div> <!--end wrapper -->

<?php
    include('includes/footer.php');
?>
