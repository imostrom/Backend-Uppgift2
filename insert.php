<?php

require 'connect.php';
$name    =  $_POST['kundName'];
$adress  =  $_POST['kundAdress'];
$email   =  $_POST['kundEmail'];
$telefon =  $_POST['kundTelefon'];
 
$product_ID     =   $_POST['product_ID'];
$product_name   =   $_POST['product_name'];
$product_price  =   $_POST['product_price'];

$query   = "INSERT into orders (orderID,product_ID,product_name,product_price,kundName,kundAdress,kundEmail,kundTelefon) 
VALUES(NULL,'$product_ID','$product_name','$product_price','$name','$adress','$email','$telefon')";

$success = $connection->query($query);

if (!$success) {
    die("Couldn't enter data: ".$connection->error);

}

//echo "Tack för att du beställer din hundvalp från TeaPup AB! Vi sparar dina uppgifter 
//för att göra det enklare för dig att handla från oss igen! <br>";

   

?>

