<html>
<body>
<table border="1">
<tr><th>stationId</th><th>陣風</th><th>平均風</th><th>風向</th><th>氣壓</th></tr> 
<?php
  $doc = new DOMDocument();
  $doc->load( 'TaiwanSea.xml' );

  $books = $doc->getElementsByTagName( "stationId" );
  foreach( $books as $book )
  {
  /* notice how we get attributes */ 
  //$categoryV = $book->getAttribute('category'); 

  $SiteN = $book->getElementsByTagName( "陣風" );
  $SiteV = $SiteN->item(0)->nodeValue;
  
  $titleN = $book->getElementsByTagName( "平均風" );
  $titleV = $titleN->item(0)->nodeValue;
  //$langV = $titleN->item(0)->getAttribute("lang"); 

  $yearN = $book->getElementsByTagName( "風向" );
  $yearV = $yearN->item(0)->nodeValue;

  $priceN = $book->getElementsByTagName( "氣壓" );
  $priceV = $priceN->item(0)->nodeValue;
  
?>
<tr>
<td><?php echo "$titleV"?></td>
<td><?php echo "$SiteV"?></td>
<td><?php echo "$yearV"?></td>
<td><?php echo "$priceV"?></td>
</tr>
<?php
  }
  ?>

</table>
</body>
</html>


