<?php
    $name = "焦糖瑪奇朵";
    $price = 165;
    $volumn = "16oz";

    /*
    [
        "name"      => "焦糖瑪奇朵",
        "price"     => 165,
        "volumn"    => "16oz"
    ]
    */

    $coffee = compact("name","price","volumn");
    // var_dump($coffee);

    $users = [
        "name"      => "John",
        "mail"      => "asdf@gmail.com",
        "gender"    => "Male",
        "phone"     => "0912345678"
    ];

    extract($users);
    echo $name;
    echo $mail;
    echo $gender;
    echo $phone;

    // echo $users["name"];
    // echo $users["mail"];
    // echo $users["gender"];
    // echo $users["phone"];

    //PHP陣列方法
    //https://www.php.net/manual/en/ref.array.php