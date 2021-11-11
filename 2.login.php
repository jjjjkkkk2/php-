<?php 
    echo $_POST [ "id" ];   //前面login.html如果method是打等於post的話就必須是用POST(一定要大寫)來抓否則抓不到
    echo "<br>"；   //換行
    echo $_POST [ "pwd" ];   //用什麼的傳輸協定就是用哪一種的來抓取
?>