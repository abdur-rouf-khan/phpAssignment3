<?php 

$text2="The quick brown fox jumps over the lazy dog.";

function stringManipulation($text2) {
    $stringLowercase = strtolower($text2);
    $stringLowercase = str_replace("brown","red",$stringLowercase);

    echo $stringLowercase;
    
}

stringManipulation($text2);




