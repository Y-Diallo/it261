<?php 
function br(){
    echo ' <br>';
}

function sayHello(){
    echo 'This is my say hello content!';
}
sayHello();
br();

function sayHello2($name){
    echo 'Hello'.$name.'';
}

sayHello2('Youssoupha');
br();
sayHello2('Olga');
br();
sayHello2('Sam');
br();
sayHello2('Among');
br();

function sayHello3($name, $age){
    echo 'My name is '.$name.' and I am '.$age.' years old!';
}


sayHello3('James', 20);
br();
sayHello3('John', 22);
br();
sayHello3('Jacob', 26);
br();
sayHello3('Jelloy', 35);
br();


function cube($n){
    echo ($n*$n*$n);
}

cube(5);
br();


function celcius_converter($temp){
    return ($temp*9/5) + 32;
}

echo ''.celcius_converter(100).' degrees';
br();

function area_volume($value1, $value2, $value3){

    return array($value1*$value2,$value1*$value2*$value3);
}

// $my_return = area_volume(10,5,10);
// echo '<b>Area: </b> '.$my_return[0].''.br().'';
// echo '<b>Volume: </b> '.$my_return[1].''.br().'';

list ($my_area, $my_volume) = area_volume(12,10,6);
echo '<b>Area: </b> '.$my_area.''.br().'';
echo '<b>Volume: </b> '.$my_volume.''.br().'';
?>