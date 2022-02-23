<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <header>
        <img id="php_logo" src="images/php_logo.png" alt="php_logo">
        <ul>
            <li><a href="./website/daily.php">Switch</a></li>
            <li><a href="./weeks/week4/adder.php">Troubleshoot</a></li>
            <li><a href="./weeks/week5/calculator.php">Calculator</a></li>
            <li><a href="./website/contact.php">Email</a></li>
            <li><a href="">Database</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
    </header>
    <div id="aboutme">
        <img src="images/Me.jpg" alt="me">
        <h1>Miho's Winter 2021 IT261 Portal</h1>
        <p>Hello. Welcome to my my portal page. My name is Miho Suzuki. I'm an international student from Japan. I was a student of Japanese university, and my major was economic. However, I realized that my interest was not economics but computer programming. So I decided to come here and study computer science. <br>I've studied HTML/CSS on my own, but PHP is completely new field.</p>
    </div>
    <div id="wrapper">
        <main>
            <h2>MAMP</h2>
            <img src="images/mamp2.png" alt="MAMP">
            <h2>Error</h2>
            <img src="images/error2.png" alt="error">
        </main>
        <aside>
            <h2>Weekly Assignments</h2>
            <h3>Week 2</h3>
            <ul>
                <li><a href="weeks/week2/var.php">var.php</a></li>
                <li><a href="weeks/week2/currency.php">currency.php</a></li>
                <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
            </ul>
            <h3>Week 3</h3>
            <ul>
                <li><a href="weeks/week3/arrays.php">arrays.php</a></li>
                <li><a href="weeks/week3/date.php">date.php</a></li>
                <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
                <li><a href="weeks/week3/if-else.php">if-else.php</a></li>
                <li><a href="weeks/week3/index.php">index.php</a> </li>
                <li><a href="weeks/week3/switch.php">switch.php</a> </li>
            </ul>
            <h3>Week 4</h3>
            <ul>
                <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
                <li><a href="weeks/week4/form1.php">form1.php</a></li>
                <li><a href="weeks/week4/form2.php">form2.php</a></li>
                <li><a href="weeks/week4/form3.php">form3.php</a></li>
                <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
                <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
            </ul>
            <h3>Week 5</h3>
            <ul>
                <li><a href="weeks/week5/null.php">null.php</a></li>
                <li><a href="weeks/week5/currency.php">currency.php</a></li>
                <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
                <li><a href="weeks/week5/extra_credit_currency.php">extra_credit_currency.php</a></li>
                <li><a href="weeks/week5/extra_credit_calculator.php">extra_credit_calculator.php</a></li>
            </ul>
            <h3>Week 6</h3>
            <ul>
                <li><a href="weeks/week6/form.php">form.php</a></li>
                <li><a href="weeks/week6/form2.php">form2.php</a></li>
                <li><a href="weeks/week6/functions.php">functions.php</a></li>
                <li><a href="weeks/week6/thx.php">thx.php</a></li>
            </ul>
            <h3>Week 7</h3>
            <ul>
                <li><a href="weeks/week7/form3.php">form3.php</a></li>
                <li><a href="weeks/week7/pictures.php">pictures.php</a></li>
                <li><a href="weeks/week7/random.php">random.php</a></li>
                <li><a href="weeks/week7/strings.php">strings.php</a></li>
            </ul>
            <h3>Week 8</h3>
            <ul>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
            <h3>Week 9</h3>
            <ul>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
            <h3>Week 10</h3>
            <ul>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </aside>
    </div> <!--end wrapper-->
    <footer>
        <div id="inner-footer">
            <ul>
                <li>Copyright &copy;<?php echo date('Y') ;?></li>
                <li>All rights Reserved</li>
                <li><u><a href="index.php">Web Design by Miho</a></u></li>
                <li><u><a id="html-checker" href="#">HTML Validation</a></u></li>
                <li><u><a id="css-checker" href="#">CSS Validation</a></u></li>
                <li><u><a id="github" href="https://github.com/FuwatoroSun">GitHub Link</a></u></li>
            </ul>
        </div> <!--end inner-footer -->
        <div id="footer_script">
            <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>
        </div>
    </footer>
    
</body>
</html>