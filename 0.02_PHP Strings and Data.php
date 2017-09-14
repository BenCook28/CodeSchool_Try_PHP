<?php $name = 'Hoba'; ?>
<!DOCTYPE html>
    <head>
        <title></title>
    </head>
    <body>
        <p><?php 
        echo 'Meteor Name: ' . $name;
        ?></p>
    </body>
</html>
<!-- to concatenate, use the . (dot) -->

<!-- String Evaluation also works as shown below -->
<p><?php 
        echo "Meteor Name: $name";
        ?></p>