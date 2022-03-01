<?php
    ob_start();
    include('config.php');
    include('includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1><?php echo $headline ;?></h1>
        <p>Want to know about CASE CLOSED characters? Welcome! These are main characters!</p>
        <div class="table">
            <table>
                <tr>
                    <th>Picture1</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Picture2</th>
                </tr>
                <?php foreach($people as $name => $image):?>
                <tr>
                    <td><img src="images/<?php echo substr($image,0,5) ;?>.png" alt="<?php echo str_replace('_', ' ', $name) ;?>" class="image"></td>
                    <td class="text"><?php echo str_replace('_', ' ', $name) ;?></td>
                    <td class="text"><?php echo substr($image,6,-8) ;?></td>
                    <td><img src="images/<?php echo substr($image,-7,6) ;?>.png" alt="<?php echo str_replace('_', ' ', $name) ;?>" class="image"></td>
                </tr>
                <?php endforeach ;?>
            </table>
        </div>
        <div class="cb"></div>
    </main>
    <aside>
        <h3>This is my wonderful aside container!</h3>
        <p>Case Closed, also known as Detective Conan is a Japanese detective manga series written and illustrated by Gosho Aoyama.<br>
            Shinichi Kudo is a high school detective who sometimes works with the police to solve cases. During an investigation, he is ambushed and incapacitated by a member of a crime syndicate known as the Black Organization.<br>
            In an attempt to murder the young detective, they force-fed him a dangerous experimental drug. However, it turns him into a kid instead of killing him.<br>
            Adopting the pseudonym Conan Edogawa and keeping his true identity a secret, Kudo lives with his childhood friend Ran Mori and her father Kogoro Mori, who is a private detective.
        </p>
    </aside>
 </div> <!--end wrapper -->

<?php
    include('includes/footer.php');
?>
