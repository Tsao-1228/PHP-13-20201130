<?php
    var_dump($_POST);
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

    echo $name,$email,$phone.$gender;
    