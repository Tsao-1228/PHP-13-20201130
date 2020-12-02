<?php
    $drinks = ["1紅茶","2綠茶","3奶茶","4珍珠奶茶","5冰淇淋紅茶"];

    //計算陣列內容數量
    // echo count($drinks);

    // 遞增排序
    // sort($drinks);
    // 遞減排序
    // rsort($drinks);
    
    //is_array() 判斷是否為陣列
    $x = 100;
    // var_dump(is_array($drinks));
    // var_dump(is_array($x));
    
    //in_array(內容,陣列) 判斷內容是否在陣列內
    // var_dump(in_array("紅茶",$drinks));
    
    //implode() 陣列->字串
    // echo implode("__",$drinks);

    //explode() 字串->陣列
    $s = "紅茶!綠茶!奶茶!珍珠奶茶!冰淇淋紅茶";
    var_dump(explode("!",$s));

    echo "<br>";
    foreach($drinks as $drink){
        echo $drink;
        echo "<br>";
    }