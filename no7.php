<?php
function jumlahDigit($n) {
    $sum = 0;  
    while ($n > 0) {
        $sum += $n % 10;  
        $n = (int)($n / 10);  
    }
    return $sum;  
}

// Menampilkan hasil dengan lebih menarik di browser
echo "Angka: 12345<br>";
echo "Jumlah Digit: " . jumlahDigit(12345) . "<br><br>";
echo "Angka: 9876<br>";
echo "Jumlah Digit: " . jumlahDigit(9876) . "<br>";
?>
