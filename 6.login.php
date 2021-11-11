<?php
   #mysqli_connect() 建立資料庫鏈接  conn，第一個參數是 localhost，第二個是root，第三個空白，第四個是mydb
   $conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );
   
   #mysqli_query() 從資料庫查詢資料  result ，前面的三個參數等於conn分別是localhost , root , mydb 第四個是selsct * from user
   $result = mysqli_query ( $conn , "select * from user" );
   //login等於FALSE
   $login=FALSE；
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆出來 row等於result的參數  while 當
   while ( $row = mysqli_fetch_array ( $result )) {
     //if 如果  POST和row的id一樣  && 同樣  POST和row的pwd一樣
     if (( $_POST [ "id" ]== $row [ "id" ]) && ( $_POST [ "pwd" ]== $row [ "pwd" ])) {
       $login=TRUE；  //login等於TRUE
   }
   } 
   if（$login== TRUE）  //如果login等於TRUE
     echo "Welcome！！" ;  //顯示Welcome
  else    //否則
     echo  "id/pwd 錯誤！！" ;   //顯示id/pwd錯誤
?>