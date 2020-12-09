<?php
    // var_dump($_POST);
    // var_dump($_GET);

    // echo "<br>";
    // echo $_POST["name"];
    // echo "<br>";
    // echo $_POST["email"];
    // echo "<br>";
    // echo $_POST["phone"];

    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $phone = $_POST["phone"];
    // $gender = $_POST["gender"];

    extract($_POST);
    // extract($_GET);

    // var_dump($skills);
    // $skills = implode(",",$skills);

    // echo $name."<br>";
    // echo $email."<br>";
    // echo $phone."<br>";
    // echo $gender."<br>";
    // echo $skills."<br>";
    // echo $edu."<br>";
    // echo nl2br($content)."<br>";


    // var_dump($gender);
    // if($gender == null){
    //     echo "請選擇性別";
    // }
    // !$gender

    if($name == "" || ctype_space($name)){
        echo "請輸入姓名";
    }else{
        echo trim($name);
    }

    if($email == "" || ctype_space($name)){
        echo "請輸入Email";
    }
    if($phone == ""){
        echo "請輸入電話";
    }



    if(!isset($gender)){
        echo "請選擇性別";
    }else{
        echo $gender;
    }

    if(!isset($skills)){
        echo "請選擇至少一樣專長";
    }else{
        echo implode(",",$skills);
    }
    
    var_dump($edu);

    