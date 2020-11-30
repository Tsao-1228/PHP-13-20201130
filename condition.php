<?php
    $x = 10;

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