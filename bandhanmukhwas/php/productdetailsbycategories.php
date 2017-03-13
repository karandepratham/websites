
	
<?php
	
	
$ProductId=$ProductName=$ProductIngredientsShort=$ProductIngredientsLong=$ProductDetailsShort=
$ProductDetailsLong=$ProductBenefitsShort=$ProductBenefitsLong=$ProductCategory=$ProductPacking=$ProductQuantity=$ProductPrice="";

	
   $ProductCategory= $_GET["ProductCategory"];

   echo $ProductCategory."\n";
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql ="SELECT ProductId,ProductName,ProductIngredientsLong,ProductDetailsLong FROM productdb WHERE 
ProductCategory='$ProductCategory'";
   
   mysql_select_db('BandhanMukhwasDB');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
   
	echo 
	"<br> <b>ProductId : </b>".$row['ProductId'].
	"<br> <b>ProductName : </b>".$row['ProductName'].
	"<br> <b>ProductIngredientsLong : </b>".$row['ProductIngredientsLong'].
	"<br> <b>ProductDetailsLong : </b>".$row['ProductDetailsLong']."<br><br>";
   }
      
   mysql_close($conn);
?>