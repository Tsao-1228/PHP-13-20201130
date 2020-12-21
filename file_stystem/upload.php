<?php
    extract($_FILES);
    extract($img);
    // $_FILES["img"]["name"]
    // $_FILES["img"]["error"]
    // $_FILES["img"]["size"]
    // $_FILES["img"]["tmp_name"]
    // $_FILES["img"]["type"]
    if($error == 0){
        if(move_uploaded_file($tmp_name,"images/0.jpg")){
            echo "上傳成功";
        }else{
            echo "上傳失敗";
        }
    }else{
        echo "上船錯誤";
    }

    // extract($_FILES);
    // if($img["error"] == 0){
    //     if(move_uploaded_file($img["tmp_name"],"images/0.jpg")){
    //         echo "上傳成功";
    //     }else{
    //         echo "上傳失敗";
    //     }
    // }else{
    //     echo "上船錯誤";
    // }

