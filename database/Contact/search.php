<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>search.php</title>
</head>
<body text="blue">
<center>
<?php
session_start();  // 啟用交談期
if (isset($_POST["Search"])) {
   // 建立SQL字串
   $sql = "SELECT * FROM books ";
   // 檢查是否輸入姓名
   if (chop($_POST["booktitle"]) != "" )
      $name = "booktitle LIKE '%".$_POST["booktitle"]."%' ";
   else
      $name = "";
   // 檢查是否輸入電話號碼
   if (chop($_POST["bookprice"]) != "" )
      $tel = "bookprice LIKE '%".$_POST["bookprice"]."%' ";
   else
      $tel = "";
   if (chop($_POST["bookauthor"]) != "" )
      $aut = "bookauthor LIKE '%".$_POST["bookauthor"]."%' ";
   else
      $aut = "";
   // if條件組合SQL字串
   if ( chop($booktitle) != "" && chop($bookprice) != ""&& chop($bookauthor) != "" )
      $sql.= "WHERE ".$name." AND ".$tel." AND ".$aut;
   elseif ( chop($booktitle) != "" )  // 只有姓名
          $sql .= "WHERE ".$booktitle;
   elseif ( chop($bookprice) != "" )  // 只有電話號碼
          $sql .= "WHERE ".$bookprice;
   elseif ( chop($bookauthor) != "" )  // 只有電話號碼
          $sql .= "WHERE ".$bookauthor;
   $sql.= " ORDER BY booktitle";  // 最後加上排序
   $_SESSION["SQL"] = $sql;
   header("Location: contacts.php");  // 轉址
}
?>
<form action="search.php" method="post">
<table border="1">
<tr><td>搜尋書名: </td>
  <td><input type="text" name="booktitle" 
             size="10" maxlength="20"/></td></tr>
<tr><td>搜尋價格: </td>
  <td><input type="text" name="bookprice"
             size="20" maxlength="20"/></td></tr>
<tr><td>搜尋作者: </td>
  <td><input type="text" name="bookauthor"
             size="20" maxlength="20"/></td></tr>
<tr><td colspan="3" align="center">
  <input type="submit" name="Search" value="搜尋"/></td>
</tr>
</table>
</form>
<hr/><a href="contacts.php">首頁</a>
| <a href="add.php">新增書籍資料</a>
| <a href="search.php">搜尋書籍</a></center>
</body>
</html>