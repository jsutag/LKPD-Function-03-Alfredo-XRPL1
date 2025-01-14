<?php

function fibonacci($n) {
   
    if ($n == 0) {
        return 0;
    }
    
   
    elseif ($n == 1) {
        return 1;
    }

       $a = 0;
    $b = 1;

   
    for ($i = 2; $i <= $n; $i++) {
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

   
    return $b;
}


$n = 10; 
echo "Fibonacci ke-$n adalah: " . fibonacci($n) . "<br>";
?>
