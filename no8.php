<?php
function add($a, $b) {
    return $a + $b;
}


function multiply($a, $b) {
    return $a * $b;
}


function subtraction($a, $b) {
    return $a - $b;
}


function division($a, $b) {
    if ($b == 0) {
        return "Error: Pembagian dengan nol tidak diperbolehkan!";
    }
    return $a / $b;
}


$a = 10;
$b = 5;

echo "Penjumlahan: " . add($a, $b) . "<br>";
echo "Perkalian: " . multiply($a, $b) . "<br>";
echo "Pengurangan: " . subtraction($a, $b) . "<br>";
echo "Pembagian: " . division($a, $b) . "<br>";
?>

