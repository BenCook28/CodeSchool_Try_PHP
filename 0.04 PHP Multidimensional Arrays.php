<!-- Multidimensional arrays are arrays within arrays. -->
<?php 
    $games = array(
        'tabletop' => array(
            'sorry', 
            'life', 
            'scrabble',
        ),
        'card' => array(
            'poker', 
            'blackjack',
        ),
    );
    print_r($games['tabletop']); // returns the tabletop array
    echo ($games['tabletop'][0]); //returns 'sorry'
?>