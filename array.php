<?php
    // $users = array();
    //索引值
    // $users[0] = 'John';
    // $users[1] = 'Mary';

    // $users = array("John","Mary");
    
    // $users = ["John","Mary","Mike","Amy","Ben","Cathy"];

    // var_dump($users);
    // echo $users[0];
    // echo $users[1];
    // echo $users[2];
    // echo $users[3];
    // echo count($users);

    //陣列迭代
    // for($i=0;$i<count($users);$i++){
    //     echo $users[$i];
    // }

    // foreach($users as $user){
    //     echo $user;
    //     echo "<br>";
    // }

    //關聯陣列
    $users = [
        "name" => "John",
        "mail" => "asdf@gmail.com",
        "gender" => "Male",
        "key"   => "value"
    ];

    // var_dump($users);
    foreach($users as $key => $value){
        echo "{$key} : {$value}";
        echo "<br>";
    }