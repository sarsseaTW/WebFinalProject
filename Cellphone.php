<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nfu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT picURL FROM phone";
$sql_name = "SELECT name FROM phone";
$sql_money = "SELECT money FROM phone";
$sql_sourceURL = "SELECT sourceURL FROM phone";
$result = mysqli_query($conn, $sql);
$result_name = mysqli_query($conn, $sql_name);
$result_money = mysqli_query($conn, $sql_money);
$result_sourceURL = mysqli_query($conn, $sql_sourceURL);
$index = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <style>
        .ui-block-a, .ui-block-b{
            background-color: lightgray;
            border: 1px solid black;
            height: 25px;
            text-align: center;
        }
        .ui-block-c{
            background-color: lightgray;
            border: 1px solid black;
            height: 150px;
            width:150px;
            text-align: center;
            font-weight: bold;
            }
        </style>
    <title>Cellphone</title>
</head>
<body>
    <div is="page" id="home" data-role="page" style="background:-webkit-linear-gradient(rgb(8, 8, 8),rgb(8, 8, 0))">
            <div is="header" data-role="header" data-position="fixed" data-theme="b">
                <h3>智慧手機廠牌</h3>
                <a class="ui-btn ui-btn-left  ui-btn-icon-left ui-icon-home ui-btn-icon-notext ui-corner-all" data-transition="slide" href="index.html" rel="external">Back</a>
            </div>
            <div is="content" role="main" class="ui-content">
                <ul is="listview" data-role="listview" data-inset="true" style="margin-top:0;">
                    <li is="list-divider" data-role="list-divider" style="text-align:center;font-size:20px; background:-webkit-linear-gradient(#66f,#33a); color:#fff;">熱門智慧型手機</li>
                </ul>
                <ul is="listview" data-role="listview" data-inset="true" id="hero_list" style="margin:0;">
                    <li is="listview-li">
                        <a href="#cellphone" data-transition="slide">ASUS</a>
                    </li>
                    <li is="listview-li">
                        <a href="#cellphone2" data-transition="flip">HTC</a>
                    </li>
                    <li is="listview-li">
                        <a href="#cellphone3" data-transition="slideup">Apple</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Apple iPhone 11 Page: Content  -->
        <div id="cellphone" data-role="page">
            <div data-role="header" data-position="fixed" data-theme="b">
                <h3>ASUS手機</h3>
                <a class="ui-btn ui-btn-left" href="#home" data-transition="slide" data-direction="reverse">Back</a>
            </div>
            <div class="container mt-5">
      <div class="row">
        <?php
            $imgRnd = array("ANIMALS","ARCHITECTTURE","NATURE","PEOPLE","TECH");
            $col = '<div class="card-columns">';
            echo $col.PHP_EOL;

            while($row = mysqli_fetch_assoc($result) and $row_name = mysqli_fetch_assoc($result_name) and $row_money = mysqli_fetch_assoc($result_money) and $row_sourceURL = mysqli_fetch_assoc($result_sourceURL)){
              $picURL = $row["picURL"];
              $index += 1;
              
        ?>
              <div class="card">
                <img class='img-fluid rounded'src="<?php echo $picURL;?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php  
                        echo $row_name["name"] ;     
                  ?></h5>
                  <p class="card-text">金額 :　<?php echo $row_money["money"] ;?> 元</p>
                  
                  <a href="<?php echo $row_sourceURL["sourceURL"] ; ?>" class="ui-btn ui-btn-b" rel=""> 連結</a>
                </div>
              </div>
        <?php
        if($index==3){break;}
            }
        ?>
      </div>
  </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </div>
        <!-- Samsung Galaxy Note 10+ Page: Content  -->
        <div id="cellphone2" data-role="page">
            <div data-role="header" data-position="fixed" data-theme="b">
                <h3>HTC手機</h3>
                <a class="ui-btn ui-btn-left" href="#home" data-transition="slide" data-direction="reverse">Back</a>
            </div>
            <div class="row">
        <?php
            $imgRnd = array("ANIMALS","ARCHITECTTURE","NATURE","PEOPLE","TECH");
            $col = '<div class="card-columns">';
            echo $col.PHP_EOL;

            while($row = mysqli_fetch_assoc($result) and $row_name = mysqli_fetch_assoc($result_name) and $row_money = mysqli_fetch_assoc($result_money) and $row_sourceURL = mysqli_fetch_assoc($result_sourceURL)){
              $picURL = $row["picURL"];
              $index += 1;
              
        ?>
              <div class="card">
                <img class='img-fluid rounded'src="<?php echo $picURL;?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php  
                        echo $row_name["name"] ;     
                  ?></h5>
                  <p class="card-text">金額 :　<?php echo $row_money["money"] ;?> 元</p>
                  
                  <a href="<?php echo $row_sourceURL["sourceURL"] ; ?>" class="ui-btn ui-btn-b" rel=""> 連結</a>
                </div>
              </div>
        <?php
        if($index==6){break;}
            }
        ?>
      </div>
        </div>    </div> 
        <!-- ASUS ROG Phone 2 Page: Content  -->
        <div id="cellphone3" data-role="page">
            <div data-role="header" data-position="fixed" data-theme="b">
                <h3>Apple手機</h3>
                <a class="ui-btn ui-btn-left" href="#home" data-transition="slide" data-direction="reverse">Back</a>
            </div>
            <div class="row">
        <?php
            $imgRnd = array("ANIMALS","ARCHITECTTURE","NATURE","PEOPLE","TECH");
            $col = '<div class="card-columns">';
            echo $col.PHP_EOL;

            while($row = mysqli_fetch_assoc($result) and $row_name = mysqli_fetch_assoc($result_name) and $row_money = mysqli_fetch_assoc($result_money) and $row_sourceURL = mysqli_fetch_assoc($result_sourceURL)){
              $picURL = $row["picURL"];
              $index += 1;
              
        ?>
              <div class="card">
                <img class='img-fluid rounded'src="<?php echo $picURL;?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php  
                        echo $row_name["name"] ;     
                  ?></h5>
                  <p class="card-text">金額 :　<?php echo $row_money["money"] ;?> 元</p>
                  
                  <a href="<?php echo $row_sourceURL["sourceURL"] ; ?>" class="ui-btn ui-btn-b" rel=""> 連結</a>
                </div>
              </div>
        <?php
        if($index==9){break;}
            }
        ?>
        </div>
</body>
</html>