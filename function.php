<?php
    //function 函式 -> 功能

    //宣告變數
    $x = 100;

    //宣告函式
    function test(){
        echo "Hello TEST";
    }

    //執行函式
    // test();

    function test2($x){
        echo "hello ".$x;
    }

    // test2("John");

    function test3($x,$y){
        echo $x * $y;
    }

    // $a = test3(3,4);
    // var_dump($a);

    function test4($x,$y){
        return $x * $y;
    }

    // echo test4(5,4);
    $ans = test4(6,6);
    // echo $ans;
    // var_dump($ans);

    function test5($x){
        if($x > 10){
            return 0;
        }else{
            return 1; 
        }
    }

    $i = test5(6);
    echo $i;

    $j = test5(12);
    echo $j;

