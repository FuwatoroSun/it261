<?php

// We have traveled the world and have different currency that we need to exchange.
// canada- 0.80
// rubles - 0.013
// pounds - 1.37
// euros - 1.14
// yen - 0.0087

// we have 2000 canadian, rubles, etc

$canadian_rate = .80;
$canadian_us = 2000 * $canadian_rate;

$rubles_rate = 0.013;
$rubles_us = 2000 * $rubles_rate;

$pounds_rate = 1.37;
$pounds_us = 2000 * $pounds_rate;

$euros_rate = 1.14;
$euros_us = 2000 * $euros_rate;

$yen_rate = 0.0087;
$yen_us = 2000 * $yen_rate;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Logic</title>
    <style>
        table {
            width: 450px;
            margin: 0 auto;
            border: 1px solid red;
            border-collapse: collapse;
        }
    </style>
</head>
<body style="margin: 30px 0px 50px 0px;">
    <h1 style="text-align: center">My Currency Tables</h1>
    <h2 style="text-align: center">Table1</h2>
    <table border="1" height="250" cellpadding="10" style="margin-bottom: 50px;">
        <tr height="80" style="font-size: 20pt;">
            <th>Currency</th>
            <th>US Dollars</th>
        </tr>
        <tr>
            <td>Rubles</td>
            <td><?php echo number_format($rubles_us, 2); ?></td>
        </tr>
        <tr>
            <td>Canadian</td>
            <td><?php echo number_format($canadian_us, 2); ?></td>
        </tr>
        <tr>
            <td>Pounds</td>
            <td><?php echo number_format($pounds_us, 2); ?></td>
        </tr>
        <tr>
            <td>Euros</td>
            <td><?php echo number_format($euros_us, 2); ?></td>
        </tr>
        <tr>
            <td>Yen</td>
            <td><?php echo number_format($yen_us, 2); ?></td>
        </tr>
    </table>
    <h2 style="text-align: center">Table2</h2>
    <table border="1" height="250" cellpadding="10">
        <tr height="80" style="font-size: 20pt;">
            <th>Currency</th>
            <th>US Dollars</th>
        </tr>
        <tr>
            <td>Rubles</td>
            <td><i>$<?php echo number_format($rubles_us, 2); ?></i></td>
        </tr>
        <tr>
            <td>Canadian</td>
            <td><i>$<?php echo number_format($canadian_us, 2); ?></i></td>
        </tr>
        <tr>
            <td>Pounds</td>
            <td><i>$<?php echo number_format($pounds_us, 2); ?></i></td>
        </tr>
        <tr>
            <td>Euros</td>
            <td><i>$<?php echo number_format($euros_us, 2); ?></i></td>
        </tr>
        <tr>
            <td>Yen</td>
            <td><i>$<?php echo number_format($yen_us, 2); ?></i></td>
        </tr>
    </table>
</body>
</html>