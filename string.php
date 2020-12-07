<?php

    $text = "日本職棒（NPB）12月2日公布戰力保留、自由契約選手名單，
    陳偉殷與呂彥青合約期滿移出戰力保留名單，千葉羅德左投陳冠宇在戰力名單內，
    可望完成續約，陳冠宇2021年將進入旅日第11個年度。
    陳偉殷與千葉羅德簽下短約3000萬日圓，球季結束後他成為自由契約選手。
    日本媒體報導，包括讀賣巨人、阪神虎、東北樂天與羅德對陳偉殷都有高度興趣，
    但要看選手本人意願是美國或日本。
    現年24歲的左投呂彥青與阪神虎3年合約期滿，動向受到關注。";

    $text_en = "Hello World!!!!";

    // echo $text;
    // echo substr($text_en,0,6);
    echo mb_substr($text,0,30)."...";

    //strip_tags

    $html = "<h1>title</h1>";
    // echo mb_substr($html, 0, 3);
    echo mb_substr(strip_tags($html),0,3);
    echo "<br>";

    echo nl2br($text); 
    echo "<br>";

    $pw = "password";

    // echo $pw;
    echo md5($pw);
    echo "<br>";
    echo sha1($pw);
    echo "<br>";
    echo md5(md5($pw));
    echo "<br>";
    echo md5(sha1($pw));
    echo "<br>";
    echo sha1(sha1($pw));
    echo "<br>";
    echo sha1(md5($pw));