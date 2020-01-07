<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Xiao_Liuqiu_Buoy.php</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
 <font size=+4><b>高雄 - 小琉球海況資料:</b><br/>
 <div class="container-fluid">
    <div class="row">
        <div class="col"> 
        <img src="../Project/Filedata635455313660183374.jpg"></img>
        </div>
        
        <div class="col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29523.13120355177!2d120.35375506941047!3d22.338845409411856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3471ef8b9905a955%3A0xc695f3e2705e695b!2z55CJ55CD5ba8!5e0!3m2!1szh-TW!2stw!4v1578362548406!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        </div>
    </div>
</div>

<table border=1>
<?php
// 建立MySQL的資料庫連接 
$link = mysqli_connect("localhost","root",
                       "","nfu")
        or die("無法開啟MySQL資料庫連接!<br/>");
$sql = "SELECT * FROM station"; // 指定SQL查詢字串

//送出UTF8編碼的MySQL指令
mysqli_query($link, 'SET NAMES utf8'); 
// 送出查詢的SQL指令
if ( $result = mysqli_query($link, $sql) ) { 
   // 取得欄位數
   $total_fields = mysqli_num_fields($result);
   // 取得記錄數
   $total_records = mysqli_num_rows($result);
   echo "<table class='table table-hover table-striped table-bordered w-75 mx-auto mt-5 text-center'>";
   echo "<tr align=center><td>StationId</td><td>陣風</td>";
   echo "<td>平均風</td><td>平均風</td><td>風向</td><td>氣壓</td><td>海溫</td><td>浪高</td><td>週期</td><td>波向</td></tr>";
   // 顯示欄位資訊
   $flag=0;
   while ($row = mysqli_fetch_row($result))
   {
        if($flag==4)
        {
            echo "<tr  align=center>";
            for ( $i = 0; $i <= $total_fields-1; $i++ )
            {
                  echo "<td>". $row[$i] . "</td>";
            }
            echo "</tr>";
        }
        $flag+=1;
   }
   echo "</table>";   
   mysqli_free_result($result); // 釋放佔用記憶體
} 
mysqli_close($link);  // 關閉資料庫連接
?>

</br>
返回首頁  <tr><th><a href="Project.html">目錄</a><br></font>
</table>
</body>
</html>