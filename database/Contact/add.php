<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>add.php</title>
</head>
<body text="blue">
<center>
<?php
// 取得欄位資料
if (isset($_POST["booktitle"]) && isset($_POST["bookauthor"])) {
   $name = $_POST["booktitle"];
   $tel = $_POST["bookauthor"];
   // 檢查是否有輸入欄位資料
   if ($name != "" && $tel != "") {
      require_once("mycontacts_open.inc");
      // 建立SQL字串
      $sql = "INSERT INTO books(booktitle, bookauthor) values('";
      $sql.= $name."', '".$tel."')";        
      if ( mysqli_query($link, $sql) ) { // 執行SQL指令
         echo "<font color=red>新增網站資料成功!";
         echo "</font><br/>";
      }
      require_once("mycontacts_close.inc");
   }
}
?>
<form action="add.php" method="post">
<table border="1" width="300">
<tr><td><font size="2">網站名稱: </font></td>
   <td><input type="text" name="booktitle" 
              size="20" maxlength="10"/></td></tr>
<tr><td><font size="2">網站網址: </font></td>
   <td><input type="text" name="bookauthor" 
              size="20" maxlength="20"/></td></tr>
<tr><td colspan="3" align="center">
   <input type="submit" value="新增網站資料"/></td></tr>
</table>
</form>
<hr/><a href="contacts.php">回我的最愛</a>
| <a href="add.php">新增網站資料</a></center>
</body>
</html>