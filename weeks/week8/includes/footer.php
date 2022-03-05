<footer>
<div class="inner">
    <ul>
        <li>Copyright <?php date('Y') ;?></li>
        <li>All Rights Reserved</li>
        <li><a href="../../index.php">Web Designed by Miho</a></li>
        <li><a href="">HTML Validation</a></li>
        <li><a href="">CSS Validation</a></li>
    </ul>
</div>

</footer>

<?php
    //release web server resources
    @mysqli_free_result($result);

    //close connection to mysql
    @mysqli_close($iConn);
?>

</body>
</html>