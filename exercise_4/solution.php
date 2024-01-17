<?php 

echo "Palindrom Task".PHP_EOL;
echo "yaitu : kata yang jika dibalik tetap sama".PHP_EOL;
echo "contoh : katak, malam, kasur ini rusak, radar, level \n".PHP_EOL;

$continue = true;

function isPalindrome(string $str){
    $cleanStr = strtolower(str_replace(' ', '', $str));
    // $reversedStr = strrev($cleanStr);
    $reversedStr = reversedString($cleanStr);
    if ($cleanStr === $reversedStr) {
        return "$str adalah palindrom";
    } else {
        return "$str bukan merupakan palindrom";
    }
}

function reversedString(string $str){
    $reversedStr = '';
    for ($i=strlen($str)-1; $i >= 0; $i--) { 
        $reversedStr .= $str[$i];
    }

    return $reversedStr;
}

while($continue){
    $input = readline("Masukkan kata (x untuk exit) :  ");
    if ($input == 'x') {
        $continue = false;
        continue;
    }

    echo isPalindrome($input).PHP_EOL;
}
