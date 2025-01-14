<?php
function isLeapYear($year) {
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;  
    } else {
        return false; 
    }
}


echo isLeapYear(2020) ? "Tahun 2020 adalah tahun kabisat" : "Tahun 2020 bukan tahun kabisat";
echo "<br>";
echo isLeapYear(2023) ? "Tahun 2023 adalah tahun kabisat" : "Tahun 2023 bukan tahun kabisat";
?>
