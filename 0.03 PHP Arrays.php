<!-- PHP arrays map keys to values.  Keys start at 0. -->
<!-- We create PHP arrays with either built-in functions: -->
$meteors = array(); 
<!-- Or square brakets -->

print_r($meteors);
<!-- print_r($variable) echos human readable output -->

<!-- We append values as shown below -->
$meteors[] = 'Destroyer_of_Worlds';

<!-- Associative arrays use strings as the key. -->
<!-- Indexed arrays use integers as the key. -->
<!-- => is an association opperator. -->
<!-- I created an associative array below: -->
<?php 
$meteorsAssociative = array(
    'Hoba' => 60000,
    'Yikes' => 99999999,
)
?> 
<!-- We add to associative arrays as shown below -->
$meteors['Big1'] = 3000000;