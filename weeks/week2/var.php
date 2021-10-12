<?php 
    echo "hello world";
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


    //function
    echo '<br>';
    $x = 137;
    $x /= 4;
    $friendly_x = number_format($x, 0);//0 decimal places
    echo $friendly_x;

    echo '<br>';
    echo date('Y');//gives year
    echo '<br>';
    echo date('l');// day of week
    echo '<br>';

    //arrays
    $fruit[] = 'orange';
    $fruit[] = 'banana';
    $fruit[] = 'pears';
    $fruit[] = 'apples';
    $fruit[] = 'mangos';
    echo '<br>';
    echo $fruit[2];//can echo elements within an array
    echo '<br>';
    $fruit = array(
        'orange',
        'banana',
        'pears',
        'apples',
        'mangos'
    );
    $fruit = [
        'orange',
        'banana',
        'pears',
        'apples',
        'mangos'
    ];
    echo '<br>';
    echo $fruit;//cannot directly echo arrays
    echo '<br>';
    print_r($fruit);//prints array
    echo '<br>';
    var_dump($fruit);//gives more info in print
    echo '<br>';

    //different array

    $nav[] = 'Home';
    $nav[] = 'About';
    $nav[] = 'Daily';
    $nav[] = 'Contact';
    $nav[] = 'Gallery';
    echo $nav[0];//prints "Home"
    echo '<br>';

    //associative array
    $nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';

    //index => key, home => value
    //key value relation
    $nav = array(
        'index.php' => 'Home',
        'about.php' => 'About',
        'daily.php' => 'Daily',
        'contact.php' => 'Contact',
        'gallery.php' => 'Gallery'
    );
    echo '<pre>';
    var_dump($nav);
    echo '</pre>';

    echo '<br>';

    $show = 'One Piece';
    $show_character = 'Luffy';
    $show_genre = 'Adventure Fiction';

    echo 'My favorite series during 2020 was "'.$show.'" starring, '.$show_character.', and it is a '.$show_genre.'.';
?>