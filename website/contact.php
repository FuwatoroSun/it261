<?php
    ob_start();
    include('config.php');
    include('includes/header.php');

    date_default_timezone_set('America/Los_Angeles');

    if(isset($_GET['today'])) {
        $today = $_GET['today'];
    } else {
        $today = date('l');
    }

    switch($today) {
        case 'Sunday':
            $anime = '<h2 class="lightblue">Sunday is reserved for <i>Sword Art Online</i></h2>';
            $pic = 'sword-art-online.jpg';
            $alt = 'Sword Art Online';
            $content = '<b><i>Sword Art Online</i></b> is a Japanese light novel series written by Reki Kawahara and illustrated by abec. The series takes place in the near future and focuses on protagonist Kazuto "Kirito" Kirigaya and Asuna Yuuki as they play through various virtual reality MMORPG worlds.';
            break;
        case 'Monday':
            $anime = '<h2 class="blue">Monday is reserved for <i>The Irregular at Magic High School</i></h2>';
            $pic = 'irregular.png';
            $alt = 'The Irregular at Magic High School';
            $content = '<b><i>The Irregular at Magic High School</i></b> is a Japanese web novel series by Tsutomu Satō. The story takes place in an alternate history where magic exists and is polished through technology, and follows Tatsuya and Miyuki Shiba, siblings who enroll into First High magic high school. While keeping their connections to the infamous Yotsuba clan secret, they attempt to live their daily life in peace, but Tatsuya is shunned for his apparent ineptness and Miyuki is validated for her magical abilities.';
            break;
        case 'Tuesday':
            $anime = '<h2 class="red">Tuesday is reserved for <i>Arifureta: From Commonplace to World\'s Strongest</i></h2>';
            $pic = 'arifureta.jpg';
            $alt = 'Arifureta: From Commonplace to World\'s Strongest';
            $content = '<b><i>Arifureta: From Commonplace to World\'s Strongest</i></b> is a Japanese light novel series written by Ryo Shirakome and illustrated by Takayaki. The series follows Hajime Nagumo, who is transported to another world with the rest of his class but receives only the most average of magical abilities, forcing him to fight to improve himself.';
            break;
        case 'Wednesday':
            $anime = '<h2 class="purple">Wednesday is reserved for <i>That Time I Got Reincarnated as a Slime</i></h2>';
            $pic = 'slime.jpg';
            $alt = 'That Time I Got Reincarnated as a Slime';
            $content = '<b><i>That Time I Got Reincarnated as a Slime</i></b> is a Japanese fantasy light novel series written by Fuse. The story is about a salaryman who is murdered and reincarnates in a sword and sorcery world as a slime with unique powers and gathers allies to build his own nation of monsters.';
            break;
        case 'Thursday':
            $anime = '<h2 class="yellow">Thursday is reserved for <i>Dr. Stone</i></h2>';
            $pic = 'dr_stone.jpg';
            $alt = 'Dr. Stone';
            $content = '<b><i>Dr. Stone</i></b> is a Japanese manga series written by Riichiro Inagaki and illustrated by the South Korean artist Boichi. The story follows teenage scientific genius Senku Ishigami, who plans to rebuild civilization after humanity was mysteriously petrified for 3,700 years.';
            break;
        case 'Friday':
            $anime = '<h2 class="orange">Friday is reserved for <i>Mushoku Tensei</i></h2>';
            $pic = 'mushoku_tensei.png';
            $alt = 'Mushoku Tensei';
            $content = '<b><i>Mushoku Tensei</i></b> is a Japanese light novel series by Rifujin na Magonote about a jobless and hopeless man who dies after having a sad and reclusive life and reincarnates in a fantasy world while keeping his memories, determined to enjoy his new life without regrets under the name Rudeus Greyrat.';
            break;
        case 'Saturday':
            $anime = '<h2 class="brown">Saturday is reserved for <i>Detective Conan</i></h2>';
            $pic = 'conan.png';
            $alt = 'Detective Conan';
            $content = '<b><i>Detective Conan</i></b> is a Japanese detective manga series written and illustrated by Gosho Aoyama. The story follows the high school detective Shinichi Kudo (renamed as Jimmy Kudo in several English translations) who was transformed into a child while investigating a mysterious organization and generally solved a multitude of cases by impersonating his childhood best friend\'s father and various other characters.';
            break;
    }

?>

<div id="wrapper">
    <main>
        <h1><?php echo $headline ;?></h1>
        <p>Want to know what the coolest anime is? Welcome! These are my favorite Japanese animes!</p>
        
        <h2>Here is my Contact Form!</h2>

        <?php include('includes/form.php') ;?>
        
    </main>
    <aside>
        <h3>This is my aside with an appropriate image for my topic</h3>
    </aside>
 </div> <!--end wrapper -->

<?php
    include('includes/footer.php');
?>
