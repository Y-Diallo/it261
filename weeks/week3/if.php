<?php 
// temp less than 90, all good, else, too hot
$temp = 90;
if($temp <= 90) {
    echo 'not too hot';
} else {
    echo 'It\'s burning up';
}

echo '<br>';

//elseif
$temp = 76;
if($temp <= 78) {
    echo 'It is liveable';
} elseif($temp <= 85) {
    echo 'It\'s getting hot';
}else {
    echo 'It\'s burning up';
}

echo '<br>';
//sales over 800k = 10% bonus
//sales at least 600k = 5% bonus
$sales = 800000;
$salary = 200000;
if($sales > 800000) {
    $salary *= 1.1;
    echo $salary;
} elseif($sales >= 600000) {
    $salary *= 1.05;
    echo $salary;
}else {
    //nothing happens
    echo $salary;
}
echo '<br>';
?>