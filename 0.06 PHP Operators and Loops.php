<!-- The exponent in PHP is ** -->
<!-- elseif is PHP's version of else if -->

<!-- Here's a while loop in PHP -->
<?php
$i = 1;

while( $i <= 12 ) {
    $value = $i * 12;
    echo "$i times 12 is $value";
    $i++;
}
?>

<!-- We can loop through an array as shown below -->
<?php
    $meteors = array(
        'A', 'B', 'C', 'D'
    );
    foreach($meteors as $meteor){
        echo $meteor;
    }


// <!-- If we loop through associative arrays with foreach, we get the values only. -->
// But the below works at getting the keys and values.
    $meteorsAssociative = array(
            'Hoba' => 60000,
            'Yikes' => 99999999,
        )
    foreach($meteorsAssociative as $name => $weight){
            echo "$name weights $weight grams.";
    }
?>