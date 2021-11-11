<?php
   #mysqli_connect() 建立資料庫鏈接  conn 為 connection 的簡寫，第一個參數是 localhost，第二個是root，第三個空白，第四個是mydb
   $conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );
   #mysqli_query() 從資料庫查詢資料  result ，前面的三個參數等於conn分別是localhost , root , mydb 第四個是selsct * from user
   $result = mysqli_query ( $conn , "select * from user" );
   #while迴圈  ，  mysqli_fetch_array() 從查詢出來的資料一筆一筆出來
   while ( $row = mysqli_fetch_array ( $result )) {
     echo $row[ "id" ]。" "。$row[ "pwd" ]。"<br>" ;  //抓出裡面一個叫id的東西，抓出裡面一個叫pwd的東西 , 換行
   } 
?>