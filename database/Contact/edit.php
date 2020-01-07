<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>edit.php</title>
</head>
<body text="blue">
<?php
$id = $_GET["bookid"];  // 取得URL參數的編號
$action = $_GET["action"];  // 取得操作種類
require_once("mycontacts_open.inc");


// 執行操作
switch ($action) {
   case "update": // 更新操作    
      $name = $_POST["booktitle"]; // 取得欄位資料
      $tel = $_POST["bookprice"];
      $aut = $_POST["bookauthor"];
      $sql = "UPDATE contact SET name='".$name.
             "', tel='".$tel.
             "', aut='".$aut."' WHERE id=".$id;
      mysqli_query($link, $sql);  // 執行SQL指令
      header("Location: contacts.php"); // 轉址
      break;
   case "del":    // 刪除操作
      $sql = "DELETE FROM contact WHERE id=".$id;
      mysqli_query($link, $sql);  // 執行SQL指令
      header("Location: contacts.php"); // 轉址
      break;
   case "edit":   // 編輯操作
      $sql = "SELECT * FROM contact WHERE id=".$id;
      $result = mysqli_query($link, $sql); // 執行SQL指令
      $row = mysqli_fetch_assoc($result); // 取回記錄
      $name = $row['booktitle']; // 取得欄位name
      $tel = $row['bookprice'];  // 取得欄位tel
      $aut = $row['bookauthor'];
      mysqli_query($link, $sql);  // 執行SQL指令
      header("Location: contacts.php"); // 轉址
      break;
// 顯示編輯表單
?>
<center>

<?php 
echo "<form action='edit.php?action=delete&amp;id=$id' method='post'>";
?>
<table border="1">
<tr><td><font size="2">書名: </font></td>
   <td><input type="text" name="booktitle" size="20" 
   maxlength="10" value="<?php echo $booktitle ?>"/></td></tr>
<tr><td><font size="2">價錢 : </font></td>
   <td><input type="text" name="bookprice" size="20"
   maxlength="20" value="<?php echo $bookprice ?>"/></td></tr>
<tr><td><font size="2">作者 : </font></td>
   <td><input type="text" name="bookauthor" size="20"
   maxlength="20" value="<?php echo $bookauthor ?>"/></td></tr>
   
<tr><td colspan="3" align="center">
    <input type="submit" value="更新書籍資料"/></td></tr>
    

</table>
</form>
<hr/><a href="contacts.php">首頁</a>
| <a href="add.php">新增書籍資料</a>
| <a href="search.php">搜尋書籍</a></center>
<?php   
       break;
} 
require_once("mycontacts_close.inc");
?>
</body>
</html>

