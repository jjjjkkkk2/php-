<?php
    //啟用 session
    session_start();    
     //重置$_SESSION中的counter
    unset($_SESSION["counter"]);  
    //echo(印出,顯示)  counter重置成功....
    echo "counter重置成功....";
    //echo(印出,顯示) <meta> refresh 可以用來設定幾秒鐘後跳轉 (redirect) 到某一個 URL  ，  網頁在載入 2 秒後，自動跳轉到counter.php
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";

?>