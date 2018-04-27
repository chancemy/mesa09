<?php//回圈步驟
    for ($i=0; $i< 10; $i++){
        echo "{$i}<br>";
    }
    echo '<hr>';

    $j =1;
    for(sayYa(); $j<10; showHr() ){
        echo "{$j}<br>";
        $j++;
    }

    function sayYa(){
        echo "ya";
    }
    function showHr(){
        echo "<hr>";
    }