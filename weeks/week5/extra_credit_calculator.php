<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="css/styles2.css" type="text/css" rel="stylesheet">
</head>

<body <?php if(isset($_POST['weather']) && $_POST['weather'] == 'Sunny') echo 'background = "../../images/sunny.jpg" ' ;
            elseif (isset($_POST['weather']) && $_POST['weather'] == 'Raining') echo 'background = "../../images/rain.jpg" ' ;
            elseif (isset($_POST['weather']) && $_POST['weather'] == 'Snowing') echo 'background = "../../images/snow.jpg" ' ;
            elseif (isset($_POST['weather']) && $_POST['weather'] == 'Icy') echo 'background = "../../images/icy.jpg" ' ;
            elseif (isset($_POST['weather']) && $_POST['weather'] == 'White Out') echo 'background = "../../images/white_out.jpg" ' ;
            else echo 'background = "../../images/travel.jpg" ' ;?>>
    <h1>My Travel Caluculator -- Extra Credit</h1>

    <p class="explanation">Cannot speed - cannot drive over 79 miles per hour</p>
    <p class="explanation">Based on weather conditions,(other than sunny) according to the speed input, the speed is reduced and the weather alert is appearing</p>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    
        <label>Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ; ?>">
        <label>Total miles driving?</label>
        <input type="number" name="mile" value="<?php if(isset($_POST['mile'])) echo htmlspecialchars($_POST['mile']) ; ?>">
        <label>How fast do you typically drive?</label>
        <input type="number" name="fast" value="<?php if(isset($_POST['fast'])) echo htmlspecialchars($_POST['fast']) ; ?>">
        
        <label>Weather Forcast</label>
        <ul>
            <li>
                <input type="radio" name="weather" value="Sunny" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'Sunny') echo 'checked = "checked" '; ?> >Sunny
            </li>
            <li>
                <input type="radio" name="weather" value="Raining" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'Raining') echo 'checked = "checked" '; ?> >Raining
            </li>
            <li>
                <input type="radio" name="weather" value="Snowing" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'Snowing') echo 'checked = "checked" '; ?> >Snowing
            </li>
            <li>
                <input type="radio" name="weather" value="Icy" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'Icy') echo 'checked = "checked" '; ?> >Icy
            </li>
            <li>
                <input type="radio" name="weather" value="White Out" <?php if(isset($_POST['weather']) && $_POST['weather'] == 'White Out') echo 'checked = "checked" '; ?> >White Out
            </li>
        </ul>

        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="hour" value="<?php if(isset($_POST['hour'])) echo htmlspecialchars($_POST['hour']) ; ?>">
        
        <label>Price of gas</label>
        <ul>
            <li>
                <input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked = "checked" '; ?> >$3.00
            </li>
            <li>
                <input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked = "checked" '; ?> >$3.50
            </li>
            <li>
                <input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == 4.00) echo 'checked = "checked" '; ?> >$4.00
            </li>
        </ul>

        <select name="mpg">
            <option value="" NULL <?php if(isset($_POST['mpg']) && $_POST['mpg'] == NULL) echo 'selected = "unselected"' ; ?>>Select one</option>
            <option value="10" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '10') echo 'selected = "selected"' ; ?>>Terrible @ 10mpg</option>
            <option value="20" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '20') echo 'selected = "selected"' ; ?>>OK @ 20mpg</option>
            <option value="30" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '30') echo 'selected = "selected"' ; ?>>Good @ 30mpg</option>
            <option value="40" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '40') echo 'selected = "selected"' ; ?>>Awesome @ 40mpg</option>
            <option value="50" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '50') echo 'selected = "selected"' ; ?>>Amazing @ 50mpg</option>
        </select>

        <input type="submit" value="Caluculate">
        <p><a href="">Reset</a></p>
    </form>
    
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            echo '<span class="error"><b>Please fill out your Name!</b></span>';
        }
        if (empty($_POST['mile'])) {
            echo '<span class="error"><b>Please fill out your total driving miles!</b></span>';
        }
        if (empty($_POST['fast'])) {
            echo '<span class="error"><b>Please fill out how fast will you be driving!</b></span>';
        }
        if (empty($_POST['weather'])) {
            echo '<span class="error"><b>How\'s the weather today?</b></span>';
        }
        if (empty($_POST['hour'])) {
            echo '<span class="error"><b>How many hours per day would you like to drive?</b></span>';
        }
        if (empty($_POST['price'])) {
            echo '<span class="error"><b>Your cost of gas, please!</b></span>';
        }
        if ($_POST['mpg'] == NULL) {
            echo '<span class="error"><b>Please select your car\'s efficiency!</b></span>';
        }
        
        if(isset($_POST['name'],
                 $_POST['mile'],
                 $_POST['fast'],
                 $_POST['weather'],
                 $_POST['hour'],
                 $_POST['price'],
                 $_POST['mpg'])) {
        
            $name = $_POST['name'];
            $mile = floatval($_POST['mile']);
            $fast = floatval($_POST['fast']);
            $weather = $_POST['weather'];
            $hour = floatval($_POST['hour']);
            $price = floatval($_POST['price']);
            $mpg = floatval($_POST['mpg']);

            if(!empty ($name && $mile && $fast && $weather && $hour && $price && $mpg)) {

                if ($fast > 79) {
                    echo '<span class="error"><b>Slow down! Will not be able to pass go!</b></span>';
                }

                else {

                    if ($weather == 'Sunny') {
                        $total_hour = $mile / $fast;
                        $total_days = $total_hour / $hour;
                        $total_gas = $mile / $mpg;
                        $total_cost = $total_gas * $price;
                    } else if ($weather == 'Raining') {
                        $fast = $fast - 5;
                        $total_hour = $mile / $fast;
                        $total_days = $total_hour / $hour;
                        $total_gas = $mile / $mpg;
                        $total_cost = $total_gas * $price;
                        echo '
                            <div class="box">
                                <p><b>Weather Alert</b></p>
                                <p>Due to the rainy conditions, we recommend that you reduce your speed to '.$fast.' which will affect your total hours as well.</p>
                            </div>
                        ';
                    } else if ($weather == 'Snowing') {
                        $fast = $fast - 10;
                        $total_hour = $mile / $fast;
                        $total_days = $total_hour / $hour;
                        $total_gas = $mile / $mpg;
                        $total_cost = $total_gas * $price;
                        echo '
                            <div class="box">
                                <p><b>Weather Alert</b></p>
                                <p>Due to the snowing conditions, we recommend that you reduce your speed to '.$fast.' which will affect your total hours as well.</p>
                            </div>
                        ';
                    } else if ($weather == 'Icy') {
                        $fast = $fast - 20;
                        $total_hour = $mile / $fast;
                        $total_days = $total_hour / $hour;
                        $total_gas = $mile / $mpg;
                        $total_cost = $total_gas * $price;
                        echo '
                            <div class="box">
                                <p><b>Weather Alert</b></p>
                                <p>Due to the icy conditions, we recommend that you reduce your speed to '.$fast.' which will affect your total hours as well.</p>
                            </div>
                        ';
                    } else {
                        $fast = $fast - 60;
                        $total_hour = $mile / $fast;
                        $total_days = $total_hour / $hour;
                        $total_gas = $mile / $mpg;
                        $total_cost = $total_gas * $price;
                        echo '
                            <div class="box">
                                <p><b>Severe Weather Alert</b></p>
                                <p>Due to the White Out conditions, we recommend that you reduce your speed to '.$fast.' which will affect your total hours as well.</p>
                            </div>
                        ';
                    }

                    echo '
                    <div class="box">
                        <p><b>Hello '.$name.'</b></p>
                        <p>You will be travelling a total of <b>'.number_format($total_hour, 2).' hours</b>,<br>
                            at an average speed of <b>'.number_format($fast, 2).'</b> miles per hour,<br>
                            taking <b>'.number_format($total_days, 2).' days</b>.</p>
                        <p>And, you will be using <b>'.number_format($total_gas).' gallons</b> of gas,<br>
                            costing you <b>$'.number_format($total_cost).' dollars</b>.</p>
                    </div>
                    ';
                }
            
            // extra credit codes will be here!

            } // end empty

        } // end isset

    } // end SERVER

    ?>
</body>
</html>