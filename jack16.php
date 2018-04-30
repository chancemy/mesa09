<?php
    $p1 =$p2 =$p3 =$p4 =$p5 = $p6=0;
    for($i=0; $i<100; $i++){
        $num =rand(1,6);
        switch ($num){
            case 1: $p1++; break;
            case 2: $p2++; break;
            case 3: $p3++; break;
            case 4: $p4++; break;
            case 5: $p5++; break;
            case 6: $p6++; break;
            default: echo 'xx';
        }
    }


 ?>