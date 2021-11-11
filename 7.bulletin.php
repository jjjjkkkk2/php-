<?php
    //禁用錯誤報告，也就是不顯示錯誤
    error_reporting(0);  
    #mysqli_connect() 建立資料庫鏈接  conn 為 connection 的簡寫，第一個參數是 localhost，第二個是root，第三個空白，第四個是mydb
    $conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );
    #mysqli_query() 從資料庫查詢資料  result ，前面的三個參數等於conn分別是localhost , root , mydb 第四個是selsct * from bulletin
    $result = mysqli_query ( $conn , "select * from bulletin" );
    //表格的html，第一個欄位叫佈告編號，第二個欄位叫佈告類別，第三個欄位叫標題，第四個欄位叫佈告內容，第五個欄位叫發布時間
    echo  "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發布時間</td></tr>" ;
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆出來   ，  還有資料就執行裡面的程式，還有東西抓時就印出來
    while ( $row = mysqli_fetch_array ( $result )){    
        echo  "<tr><td>" ;  //行  開始 , 列  開始
        $row[ "bid" ];   //抓第一筆資料叫bid
        echo  "</td><td>" ;   //列  結束 , 列  開始
        $row[ "type" ];   //第二筆資料叫type
        echo  "</td><td>" ;  //列  結束 , 列  開始
        $row[ "title" ];  //第三筆資料叫title
        echo  "</td><td>" ;  //列  結束 , 列  開始
        $row[ "content" ];  //第四筆資料叫content
        echo  "</td><td>" ;  //列  結束 , 列  開始
        $row[ "time" ];   //第五筆資料叫time
        echo  "</td></tr>" ;  //列  結束 , 行  結束
    }
    //印出 </table>
    echo "</table>"
?>