<?php
   #mysqli_connect() 建立資料庫連結  conn，第一個參數是 localhost，第二個是root，第三個空白，第四個是mydb
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料  result，前面的三個參數等於conn分別是localhost , root , mydb ， 第四個是select * from user
   $result=mysqli_query($conn, "select * from user");
   //設login等於FALSE
   $login=FALSE;
   //while當  mysqli_fetch_array() 建立資料庫鏈接   row等於result的參數  while 當
   while ($row=mysqli_fetch_array($result)) {
    //if 如果  POST和row的id一樣  && 同樣  POST和row的pwd一樣
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       //login等於TRUE
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {   //if如果  login等於true
    //啟用 session
    session_start();
    //SESSION的id等於POST的id
    $_SESSION["id"]=$_POST["id"];
    //echo(印出,顯示) ， welcome!!
    echo "welcome!!";
    //echo(印出,顯示) <meta> refresh 可以用來設定幾秒鐘後跳轉 (redirect) 到某一個URL  ，  網頁在載入 3 秒後，自動跳轉到bulletin.php
    echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
   }

  else{   //否則
    //echo(印出,顯示) ， id/pwd wrong!!
    echo "id/pwd wrong!!";
    //echo(印出,顯示) <meta> refresh 可以用來設定幾秒鐘後跳轉 (redirect) 到某一個URL  ，  網頁在載入 3 秒後，自動跳轉到login.html
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
  }
?>