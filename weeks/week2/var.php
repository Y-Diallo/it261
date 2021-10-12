<?php 
    echo "hello world"
    $name = 'Youssoupha';
    $weather = 'Today is a sunny day';
    $body_temp = 98.6;

    echo $name;
    echo 'My name is $name';//prints out "$name"
    echo '<br>';
    echo "My name is $name";//double quotes allow a variable's value to be expressed
    echo '<br>';

    echo 'My name is'.$name.'';
    echo '<br>';
    echo $weather;
    echo '<br>';
    echo $body_temp;
    echo '<br>';
    echo 'The normal body temperature is '.$body_temp.' and all is well!';
    echo '<br>';
    $name = 'Brand';
    echo $name;

    $x = 20;
    $y = 5;
    echo $x;
    echo '<br>';
    $z = $x + $y;
    echo '<br>';
    echo $z;
    $z = $x * $y;
    echo '<br>';
    echo $z;
    echo '<br>';

    //------------
    $first_name = 'Youssoupha';
    $last_name = 'Diallo';

    echo $first_name.' '.$last_name;
    echo '<br>';
    echo ''.$first_name.' '.$last_name.'';
    echo '<br>';
    echo 'Here are the names with a single\'s quote! '.$first_name.''.$last_name.'';
    echo '<br>';
    echo "Here are the names with a double quote! $first_name$last_name";
    echo '<br>';
    $name = 'Youssoupha ';
    $name .= 'Diallo';//concat
    echo $name;
    echo '<br>';

    $x = 20;
    $x *= 2;
    echo $x;//40

    echo '<br>';

    $x = 120;
    $x /= 2;
    echo $x;//60

    echo '<br>';

    $x = 120;
    $x *= .9;
    echo $x;//108

    echo '<br>';
?>