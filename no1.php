<?php

function factorial($n) {
    if (!is_numeric($n) || $n < 0) {
        return "undefined";
    }

    if ($n == 0 || $n == 1) {
        return 1;
    }

    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}


$number = 5; echo "Faktorial dari $number adalah " . factorial($number) . ".";
?>
