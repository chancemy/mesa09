<?php
    $poker = array();
    for ($i=0; $i<52; $i++){
        $rand = rand(0,51);
        //檢查機制
        $isRepeat = false;
        for ($j=0; $j<$i; $j++){
            if($poker[$j]== $rand){
                //重複
                $isRepeat = true;
                break;
            }
        }

        if(!$isRepeat){
            $poker[$i] = $rand;
        }else{
            $i--;
        }

        $poker[$i] = $rand;
    }

    foreach ($poker as $v){
        echo "{$v}<br>";
    }