<?php

if (isset ($_POST['kundEmail']) &&($_POST['product_ID'])){


require 'connect.php';
$name    =  $_POST['kundName'];
$adress  =  $_POST['kundAdress'];
$email   =  $_POST['kundEmail'];
$telefon =  $_POST['kundTelefon'];
 
$product_ID     =   $_POST['product_ID'];

$query   = "INSERT into orders (orderID,product_ID,kundName,kundAdress,kundEmail,kundTelefon) 
VALUES('','$product_ID','$name','$adress','$email','$telefon')";

$success = mysqli_query($connection , $query)
          or die (mysqli_error($connection));


if (!$success) {
    die("Couldn't enter data: ".$connection->error);

}
header("Location: submit.php");
 }else
 header("Location: index.php");


 include 'footer.php';   
?>

