<?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

for ($x = 0; $x <= 21; $x+= 3) {
    echo "The number is: $x <br>";
}

for ($celcius = 0; $celcius <= 100; $celcius++) {
    $far = ($celcius * 9/5) + 32;
    $friendly_far = floor($far);
    echo '<b> Farenheit:</b> '.$friendly_far.' <b>Celcius:</b> '.$celcius.'<br>';
}
for ($celcius = 0; $celcius <= 100; $celcius++) {
    $far = ($celcius * 9/5) + 32;
    $friendly_far = floor($far);
    echo '<b> Farenheit:</b> '.$friendly_far.' <b>Celcius:</b> <span style="color:red; font-weight:bold;">'.$celcius.'</span><hr>';
}

//1 mile == 1.6km
for ($km = 0; $km <= 100; $km++) {
    $miles = ($km * 1.6);
    $friendly_miles = floor($miles);
    echo '<b> Miles:</b> '.$friendly_miles.' <b>Kilometers:</b> '.$km.'<br>';
}
?>