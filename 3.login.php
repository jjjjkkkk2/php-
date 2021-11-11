<?php 
    if (( $_POST [id] == "john" ) && ( $_POST [pwd]=="john1234" ))   /*如果輸入的id是john  && 同樣  輸入的密碼是john1234*/
        echo  "Welcome" ;   /*顯示歡迎*/ 
    else      /*別的*/
        echo  "Login failure" ;   /*顯示登錄失敗*/ 
?>