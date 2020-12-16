<?php
    require_once("function.php");
    $rows = showAll();
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
            <th></th>
        </tr>
    <?php foreach($rows as $row){ ?>
    <?php
        // PDO::FETCH_ASSOC
        // PDO::FETCH_NUM
        // PDO::FETCH_BOTH
    ?> 
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["phone"];?></td>
            <td><?php echo $row["gender"];?></td>
            <td><?php echo $row["edu"];?></td>
            <td><?php echo $row["skills"];?></td>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                    <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
                </form>
                <a href="edit.php?id=<?php echo $row["id"];?>">編輯</a>
            </td>
        </tr>
    <?php } ?>

    </table>
</body>
</html>