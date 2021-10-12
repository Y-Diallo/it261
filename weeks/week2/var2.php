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

    //circumference of a circle = 2*pi*r
    $radius = 10;
    $pi = 3.14;
    $circumference = 2*$pi*$radius;
    echo $circumference
?>