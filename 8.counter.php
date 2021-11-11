<?php
    session_start ();   //啟用 session
    if (!isset ( $_SESSION [ "counter" ]))  //如果 $_SESSION["counter"] 不存在
        $_SESSION [ "計數器" ]= 1 ;     //$_SESSION [ "計數器" ] 就等於1
    else    //否則
        $_SESSION [ "計數器" ]++；   // $_SESSION["計數器"]  加1

    echo "計數器="。$_SESSION [ "計數器" ];  //顯示計數器等於$_SESSION["計數器"]的數字

    echo  "<br><a href=set_counter.php>recounter</a>" ;   //連結至 set_counter.php 
?>