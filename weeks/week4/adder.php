<!DOCTYPE html>
<html>
<head>
    <title>My Adder Assignment</title>
    <style>
        body {
            margin: 30px;
        }
        form {
            width: 400px;
            margin: 30px auto;
            border: 1px solid red;
            padding: 10px;
        }

        h1 {
            text-align: center;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Adder.php</h1>
    <form action="">
        <label>Enter the first number:</label>
            <input type="text" name="num1"><br>
        <label>Enter the second number:</label>
            <input type="text" name="num2"><br>
        <input type="submit" value="Add Em!!">
    </form>

    <?php //adder-wrong.php

    if (isset($_POST['num1'],
              $_POST['num2'])){
        if (empty($_POST['num1'] &&
                  $_POST['num2'])){
            echo 'Please fill out all of the fields!';
        } else {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $myTotal = $num1 + $num2;

            echo '<h2>You added '.$num1.' and '.$num2.' </h2>';
            echo '
            <p>
                and the answer is <br>
                <style="color:red;">'.$myTotal.'!
            </p>';
            echo'<p><a href="">Reset page</a></p>';
        }
    }
    ?>
</body>
</html>


<!--[line 5] add css codes-->
<!--[line 24] delete / before form-->
<!--[line 25] put <label>-->
<!--[line 26] lower-case N -->
<!--[line 27] delete / before label-->
<!--[line 27] put </label>-->
<!--[line 29] add close "-->
<!--[line 32~53] move php codes after html codes-->
<!--[line 32] make a space before the comment-->
<!--[line 42] delete - -->
<!--[line 42] lower-case N -->
<!--[line 44] replace ". $num1 ." to '.$num1.' -->
<!--[line 44] replace .$num2. to '.$num2.'-->
<!--[line 44] delete "' and put </h2>-->
<!--[line 46] replace <br> to </p> and put end '-->
<!--[line 48] replace " $myTotal ."!" to '.$myTotal.'! -->
<!--[line 49] put closing '-->
<!--[line 49] put end </p> and add ;-->
<!--[line 53] put ?>(end php tag) before bigin html tag-->
<!--[line 55] delete ';{ -->
