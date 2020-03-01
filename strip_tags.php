<?php
//strip html and php tags  from a string

    $input = "<blink><strong>Hello!</strong></blink>";
    echo $input .'<br>';
    
   echo strip_tags($input);
?>

