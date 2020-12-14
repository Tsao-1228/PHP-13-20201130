<?php

    //變數
    // $x = 100;
    // $X = 200;
    // $y = "Hello";
    // $z = 3.14;
    // $t = false;
    // echo $X;
    /* 
    變數命名規則
    1.不能數字開頭
    2.符號只可使用底線
    3.大小寫有分別
    */

    //常數
    // define(常數名稱,值)
    define("USER","john123");
    // echo USER;

    //資料型別
    /* 
        1. 整數 int
        2. 浮點數 float
        3. 字串 string
        4. 布林 boolean

    */
    // var_dump(USER);

    //運算子
    //算術運算子
    $x = 100;
    $y = 60;
    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";
    
    //比較運算子
    $a = 10;
    $b = "10";

    var_dump($x > $y);
    echo "<br>";
    var_dump($x >= $y);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    var_dump($a == $b);
    echo "<br>";
    var_dump($a === $b);
    echo "<br>";
    var_dump($a != $b);
    echo "<br>";
    var_dump($a !== $b);
    echo "<br>";
    
    // 複製:Alt + Shift + 下 
    // 移動:Alt + 下 

    // 指定運算子
    echo $x = $y; //60
    echo "<br>";
    echo $x += $y; //120  $x=$x+$y
    echo "<br>";
    echo $x -= $y; //60
    echo "<br>";
    echo $x *= $y; //3600
    echo "<br>";
    echo $x /= $y; //60
    echo "<br>";
    echo $x %= $y; //0
    echo "<br>";

    //邏輯運算子
    /* 
        AND  &&
        OR   ||
        NOT  !
    */
    var_dump($x > 0 && $y > 0);
    echo "<br>";
    var_dump($x > 0 || $y > 0);
    echo "<br>";
    var_dump(!$x);
    echo "<br>";
    var_dump(!$y);
    echo "<br>";

    //三元運算子
    // ? :

    //字串運算子

    $name = "Tony Stark";

    // echo "Hello " . $name . "!!"; 
    echo "<br>";
    echo "Hello $name !!";
    echo "<br>";
    echo "Hello {$name}!!";
    echo "<br>";
    echo 'Hello $name !!';
    echo "<br>";
    echo 'Hello ' . $name . '!!'; 
