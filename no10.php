<?php

function isPalindrome($kata) {
   
    $kata = strtolower(str_replace(' ', '', $kata));

    
    $kataTerbalik = strrev($kata);

        if ($kata == $kataTerbalik) {
        return true;  
    } else {
        return false;     }
}


$kata = "katak";  
if (isPalindrome($kata)) {
    echo "'$kata' adalah palindrome.<br>";
} else {
    echo "'$kata' bukan palindrome.<br>";
}
?>
