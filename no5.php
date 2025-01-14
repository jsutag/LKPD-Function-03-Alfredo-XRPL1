<?php
function reverse_string($str) {
    $reversed = ""; 
    $length = strlen($str); 
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i]; 
    }
    
    return $reversed; 
}

echo reverse_string("hello") . "<br>";  
echo reverse_string("world") . "<br>";  
?>
