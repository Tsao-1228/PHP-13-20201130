<?php
    //for
    //for(初始值;終止條件;迴圈執行完畢所需要的動作)
    // for($i=0;$i<10;$i++){
    //     echo $i;
    // }

    //while
    
    /*
        初始值
        while(終止條件){
            迴圈執行完畢所需要的動作
        }
    */
    $i = 10;
    while($i<10){
        echo $i;
        $i++;
    }

    echo "<br>";

    //do...while
    $j = 10;
    do{
        echo $j;
        $j++;
    }
    while($j<10);

    //foreach
