<?php 
    $nilai01 = 10;
    $nilai02 = 19;

    if($nilai01 > $nilai02){
        echo "Nilai $nilai01 lebih besar dari $nilai02";
    }elseif($nilai01 < $nilai02){
        echo "Nilai $nilai01 lebih kecil dari $nilai02";
    }else{
        echo "Jawaban tidak dotemiukan";
    }
    echo "<br>";
    $d = date('D');
    if($d == "Sat"){
        echo "Kelas Jarvis di mulai";

    }elseif ($d == "Sun"){
        echo "Kelas Jarvis di mulai";
    }else{
        echo "jawaban tida d ketahui";
    }

    
?>