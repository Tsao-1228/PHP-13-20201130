<?php
   require_once("function.php");
   
   if($img_name = uploadIMG($_FILES)){
      store($img_name);
   }
   
   header("refresh:3;url=index.php");


   
