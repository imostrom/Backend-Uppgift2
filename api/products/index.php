<?php
$dbHost ="localhost";
$dbUser ="root";
$dbPass ="root";
$dbName ="Webshop";
$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$connection){
    echo "Felmeddelade<br>" . mysqli_connection_error();
    exit;
}
mysqli_set_charset($connection, "utf8"); 

$query = "SELECT * FROM products";

$table = mysqli_query($connection , $query)
          or die (mysqli_error($connection));

$array = array();
while($row = $table->fetch_assoc()){
    
    $array[] = $row;
}

$json_string = json_encode($array, JSON_PRETTY_PRINT);


echo "<pre>";
echo $json_string;
echo "</pre>";

?>