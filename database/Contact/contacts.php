<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>contacts.php</title>
  </head>
<body text="blue">
  <div data-role="page">
    <div role="main" class="ui-content-fulid" style="background:url(../../image/background.jpg);background-repeat:no-repeat;background-size:cover">
        <div is="header" data-role="header" data-position="fixed" data-theme="b">
            <h3>我的最愛</h3>
            <a class="ui-btn ui-btn-left  ui-btn-icon-left ui-icon-home ui-btn-icon-notext ui-corner-all" data-transition="slide" href="../../index.html" rel="external">Back</a>
        </div>
        <center>
        <?php
          session_start();  // 啟動交談期
          $records_per_page = 10;  // 每一頁顯示的記錄筆數
          // 取得URL參數的頁數
          if (isset($_GET["Pages"])) $pages = $_GET["Pages"];
          else                       $pages = 1;
          require_once("mycontacts_open.inc");
          // 設定SQL查詢字串
          if ( isset($_SESSION["SQL"]))
            $sql = $_SESSION["SQL"];
          else
            $sql = "SELECT * FROM books ORDER BY bookid";
          // 執行SQL查詢
          $result = mysqli_query($link, $sql);
          $total_fields=mysqli_num_fields($result); // 取得欄位數
          $total_records=mysqli_num_rows($result);  // 取得記錄數
          // 計算總頁數
          $total_pages = ceil($total_records/$records_per_page);
          // 計算這一頁第1筆記錄的位置
          $offset = ($pages - 1)*$records_per_page;
          mysqli_data_seek($result, $offset); // 移到此記錄
          echo "<div class='text-center text-primary'><h1>我的最愛總數: $total_records 筆</h1></div><br/>";
          echo "<table class='table table-hover table-striped table-bordered w-50 mx-auto mt-5 text-center text-white bg-light'><tr class='text-white bg-dark'><td>編號</td>";
          echo "<td>網頁名稱</td><td>網址</td></tr>";
          $j = 1;
          while ($rows = mysqli_fetch_array($result, MYSQLI_NUM)
                and $j <= $records_per_page) {
            echo "<tr>";
            for ( $i = 0; $i<= $total_fields-1; $i++ )
                echo "<td>".$rows[$i]."</td>";?>
                
                <?php
                echo "</tr>";   
            echo "</tr>";
            $j++;
          }
          echo "</table><br>";
          if ( $pages > 1 )  // 顯示上一頁
            echo "<a href='contacts.php?Pages=".($pages-1).
                  "'>上一頁</a>| ";
          for ( $i = 1; $i <= $total_pages; $i++ )
            if ($i != $pages)
              echo "<a href=\"contacts.php?Pages=".$i."\">".
                    $i."</a> ";
            else
              echo $i." ";
          if ( $pages < $total_pages )  // 顯示下一頁
            echo "|<a href='contacts.php?Pages=".($pages+1).
                  "'>下一頁</a> ";
          mysqli_free_result($result);  // 釋放佔用的記憶體
          require_once("mycontacts_close.inc");
        ?>
        <hr/><a href="contacts.php">我的最愛首頁</a>
        | <a href="add.php">新增最愛</a></center>
    </div>
  </div>
</body>
</html>