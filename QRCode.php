<?php
require_once("phpqrcode.php");
$data = "http://120.113.98.119:8081/final_design_app/index.html";  // 資料
$level = "L";  // 校正等級
$size = 4;   // 尺寸
QRcode::png($data, FALSE, $level, $size);     
?> 
