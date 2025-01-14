<?php
function is_prime($num) {

    if (!is_numeric($num) || $num <= 1) {
        return false;
    }

    
    if ($num == 2 || $num == 3) {
        return true;
    }

        if ($num % 2 == 0) {
        return false;
    }

    
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}


function display_result($num) {
    if (!is_numeric($num)) {
        echo "<p style='color: red;'>Input <strong>$num</strong> bukan angka yang valid!</p>";
        return;
    }

    if (is_prime($num)) {
        echo "<p style='color: green;'>Bilangan <strong>$num</strong> adalah bilangan prima!</p>";
    } else {
        echo "<p style='color: red;'>Bilangan <strong>$num</strong> bukan bilangan prima.</p>";
    }
}


$test_numbers = [2, 3, 4, 16, 17, "abc", 23, -5];

foreach ($test_numbers as $number) {
    display_result($number);
}
?>
