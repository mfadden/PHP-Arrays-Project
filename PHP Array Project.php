<?php

    $a = array(9, 27, 7, 9);
    echo "sum(a) = " . array_sum($a) . "\n";
    
    $array = array(26, "Mathew", 26, "Fadden", "Mathew");
    print_r(array_count_values($array));
    
    $average_of_array= array_sum($a);
    print_r(average_of_array($a));
?>