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
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" value="上傳">
    </form>
    <div>
        <?php
            foreach($rows as $row){
        ?>
        <img src="images/<?php echo $row["img_name"]; ?>" width="200">
        <form action="delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <input type="submit" value="刪除">
        </form>
        <?php
            }
        ?>
    </div>
</body>
</html>