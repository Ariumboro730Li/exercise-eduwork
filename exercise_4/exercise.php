<?php 

$lanjut = true;

echo 'Palindrom Task'.PHP_EOL;
echo 'yaitu : kata yang jika dibalik tetap sama'.PHP_EOL;
echo 'contoh : katak, malam, kasur ini rusak, radar, level'.PHP_EOL;

function isPalindrome(string $str) {
    $cleanStr = strtolower(str_replace(' ', '', $str));
    $reversedStr = strrev($cleanStr); // strrev a/ fungsi bawaan php untuk membalikkan string
    // $reversedStr = wordReverse($cleanStr);
    return $cleanStr === $reversedStr;
}

// fungsi untuk membalikkan string manual
function wordReverse(string $str){
    $reversedStr = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversedStr .= $str[$i];
    }
    return $reversedStr;
}

while($lanjut){
    echo PHP_EOL;
    $word = readline('Masukkan kata (x untuk exit) : ');
    
    // jika inputan x maka keluar dari program
    if ($word == 'x') {
        $lanjut = false;
        continue;
    }

    // jika bukan x maka akan mengecek apakah kata tersebut palindrom atau bukan
    if (isPalindrome($word)) {
        echo "$word adalah palindrom.";
    } else {
        echo "$word bukan palindrom.";
    } 

}    


