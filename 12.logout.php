<?php
    session_start();   //啟用 session
    unset($_SESSION["id"]);  //重置SESSION中的id
    //echo(印出,顯示)  登出成功....
    echo "登出成功....";
    //echo(印出,顯示) <meta> refresh可以用來設定幾秒鐘後跳轉 (redirect) 到某一個URL，網頁在載入 3 秒後，自動跳轉到login.html
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";

?>