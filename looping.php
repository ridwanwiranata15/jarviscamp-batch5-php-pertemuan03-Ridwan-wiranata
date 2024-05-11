<?php 
require_once('function.php');

salam('wali', 'senang');
    for($i = 0; $i < 10; $i++){
        echo "$i";
    }
    echo "<br>";
    // while
    $a = 1;
    while($a <= 10){
        echo "$a";
        $a++;
    }
    echo "<br>";
    $b = 0;
    do{
        echo "$b";
        $b++;
    }while($b <= 10);

    echo "<br>";
    // foreach loop
    $array = ["ridwan", "Wawa", "wiwi"];
    foreach($array as $key => $value){
        echo "$key - $value <br>";
    }
?>