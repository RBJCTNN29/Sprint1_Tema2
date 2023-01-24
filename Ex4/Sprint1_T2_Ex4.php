<?php
    $int_x = 3;
    $int_y = 2;
    $dbl_n = 1.5;
    $dbl_m = 2.5;
    echo $int_x . "<br/>" . $int_y . "<br/>" . ($int_x + $int_y) . "<br/>" . 
        ($int_x - $int_y) . "<br/>" . ($int_x * $int_y) . "<br/>" . 
        ($int_x % $int_y) . "<br/>" . (2 * $dbl_n) . "<br/>" . (2 * $dbl_m) . "<br/>" .
        ($int_x + $int_y + $dbl_n + $dbl_m) . "<br/>" .
        ($int_x * $int_y * $dbl_n * $dbl_m);
?>