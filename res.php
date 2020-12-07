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
    $skills = implode(",",$skills);

    echo $name."<br>";
    echo $email."<br>";
    echo $phone."<br>";
    echo $gender."<br>";
    echo $skills."<br>";
    echo $edu."<br>";
    echo nl2br($content)."<br>";
    


    