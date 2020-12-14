<?php
    require_once("conn.php");

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);

    // $row = mysqli_fetch_assoc($result); //關聯陣列
    // $row = mysqli_fetch_array($result); //關聯陣列與一班陣列
    // $row = mysqli_fetch_row($result); //一般陣列


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border-collapse: collapse;
            border: 1px solid #666;
        }
        td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="create.php">新增學員資料</a>
    </nav>
    <table>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>E-mail</th>
            <th>電話</th>
            <th>性別</th>
            <th>學歷</th>
            <th>專長</th>
        </tr>
    <?php
        // while($row = mysqli_fetch_assoc($result)){
        //     echo "<tr>";
        //     echo "<td>{$row["id"]}</td>";
        //     echo "<td>{$row["name"]}</td>";
        //     echo "<td>{$row["email"]}</td>";
        //     echo "<td>{$row["phone"]}</td>";
        //     echo "<td>{$row["gender"]}</td>";
        //     echo "<td>{$row["edu"]}</td>";
        //     echo "<td>{$row["skills"]}</td>";
        //     echo "</tr>";
        // }    
    ?>
    <?php while($row = mysqli_fetch_assoc($result)){ ?> 
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["phone"];?></td>
            <td><?php echo $row["gender"];?></td>
            <td><?php echo $row["edu"];?></td>
            <td><?php echo $row["skills"];?></td>
        </tr>
    <?php } ?>

    </table>
</body>
</html>