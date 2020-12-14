<?php
    $x = 0;

    if($x > 0){
        echo "success";
    }

    if($x > 0){
        echo "Success";
    }else{
        echo "Error";
    }

    echo $x > 0 ? "成功" : "失敗";

    if($x > 0){
        echo "正數";
    }elseif($x < 0){
        echo "負數";
    }else{
        echo "ERROR";
    }

    if($x > 80){
        echo "Good";
    }elseif($x > 60){
        echo "SOSO";
    }else{
        echo "IDIOT";
    }


    switch($x){
        case 0:
            echo "0";
        break;
        case 10:
            echo "10";
        // break;
        case 100:
            echo "100";
        // break;
        default:
            echo "ERROR";
    }

    switch(true){
        case $x > 0:
            echo "正整數";
        break;
        case $x < 0:
            echo "富整數";
        break;
        default:
            echo "ERROR";
    }