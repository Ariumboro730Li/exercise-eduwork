<?php 

// for ($i=0; $i <= 15 ; $i++) { 
//     echo "perulangan ke $i".PHP_EOL; 
// }

// $i = 0;
// while ($i <= 10) {
//     echo "perulangan ke $i".PHP_EOL; 
//     $i++;
// }

$lanjut = true;
while($lanjut){
    $input = readline("lanjut ? ");
    if(trim($input) == "no"){
        $lanjut = false;
    } else {
        echo "anda memilih $input".PHP_EOL;
    }
}

// $kata =  "  selesai dan lanjut";
// echo trim($kata).PHP_EOL;
// echo str_replace(" ", "", $kata).PHP_EOL;