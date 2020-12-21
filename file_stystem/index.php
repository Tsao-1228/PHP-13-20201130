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
            $imgs = glob("images/*");
            // var_dump($imgs);
            foreach($imgs as $img){
        ?>
        <img src="<?php echo $img; ?>" width="200">
        <form action="delete.php" method="post">
            <input type="hidden" name="img" value="<?php echo $img; ?>">
            <input type="submit" value="刪除">
        </form>
        <?php
            }
        ?>
    </div>
</body>
</html>