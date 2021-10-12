<?php 
    $a = '20';
    $b = '30';
    $c = $a + $b;
    echo $c;
    echo '<br>';

    $a = '700';
    $b = '330';
    $c = $a - $b;
    echo $c;
    echo '<br>';

    $a = '50';
    $b = '5';
    $c = $a * $b;
    echo $c;
    echo '<br>';

    $money = 100;
    $money /= 7;
    echo $money;
    echo '<br>';

    $money = 100;
    $money /= 7;
    $friendly_money = number_format($money, 2);
    echo $friendly_money;
    echo '<br>';
    //round up and round down
    $friendly_money = floor($money);
    echo $friendly_money;
    echo '<br>';
    echo '<br>';
    $friendly_money = ceil($money);
    echo $friendly_money;
    echo '<br>';

    //circumference of a circle = 2*pi*r
    $radius = 10;
    $pi = 3.14;
    $circumference = 2*$pi*$radius;
    echo $circumference;
    echo '<br>';

    //faren = c*9/5 + 32
    $celcius = 22;
    $faren = $celcius*9/5 + 32;
    $friendly_faren = floor($faren);
    echo ''.$friendly_faren.' degrees faren';
    echo '<br>';

    //1 canadian dollars -> 0.79 american dollars

    $canada = 100;
    $canada *= 0.79;
    $canada = number_format($canada, 2);
    echo $canada;
    echo '<br>';
    echo '<p>I have <b>$'.$canada.'</b> American Dollars!</p>';
    echo '<br>';
?>