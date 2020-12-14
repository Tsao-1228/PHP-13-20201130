<?php
    require_once("conn.php");

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);

    // $row = mysqli_fetch_assoc($result); //關聯陣列
    // $row = mysqli_fetch_array($result); //關聯陣列與一班陣列
    // $row = mysqli_fetch_row($result); //一般陣列

    while($row = mysqli_fetch_assoc($result)){
        echo $row["name"];
        echo $row["skills"];
        echo "<br>";
    }    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>