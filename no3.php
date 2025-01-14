<?php

function nilai_maksimum($a, $b, $c) {
    return max($a, $b, $c);
}


function nilai_minimum($a, $b, $c) {
    return min($a, $b, $c);
}


function display_max_min($a, $b, $c) {
    if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
        echo "<p style='color: red;'>Input harus berupa angka valid!</p>";
        return;
    }

    $max = nilai_maksimum($a, $b, $c);
    $min = nilai_minimum($a, $b, $c);

    echo "<p style='color: purple;'>Nilai maksimum dari <strong>$a</strong>, <strong>$b</strong>, dan <strong>$c</strong> adalah <strong>$max</strong>.</p>";
    echo "<p style='color: orange;'>Nilai minimum dari <strong>$a</strong>, <strong>$b</strong>, dan <strong>$c</strong> adalah <strong>$min</strong>.</p>";
}


display_max_min(3, 7, 5);
display_max_min(10, -2, 4);
display_max_min(15, 22, 9);
?>
