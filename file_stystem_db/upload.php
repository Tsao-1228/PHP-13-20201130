<?php
    extract($_FILES);
    extract($img);
    
    switch($type){
        case "image/jpeg":
            $img_name = md5(uniqid()).".jpg";
            break;
        case "image/png":
            $img_name = md5(uniqid()).".png";
            break;
        case "image/gif":
            $img_name = md5(uniqid()).".gif";
            break;
        default:
            echo "請上傳正確的檔案類型";
            return ;
    }
    if(!is_dir("images")){
        mkdir("images");
    }
    
    $target = "images/{$img_name}";
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "上傳成功";
            header("refresh:3;url=index.php");
        }else{
            echo "上傳失敗";
        }
    }else{
        echo "上船錯誤";
    }
