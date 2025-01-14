<?php
function cek_ganjil_genap($n) {
    if ($n % 2 == 0) {
        return "Angka $n adalah genap.";
    } else {
        return "Angka $n adalah ganjil.";
    }
}


echo cek_ganjil_genap(10); 
echo "\n";
echo cek_ganjil_genap(7);  
?>
