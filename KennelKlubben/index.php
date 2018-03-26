<?php
 define("PAGE_TITLE", "KennelKlubben");

include 'header.php';   
?>

<?php

$data = file_get_contents(

  "http://localhost/Uppgift-2/api/products/index.php"
);


if(empty($data)){
     echo "<h2>Data kan inte hämtas!</h2>";
     exit;
}

$array = json_decode($data, true);

echo "<table border=0>";
 echo "<tr><th>Produkt ID</th><th>Namn</th><th>Beskrivning</th><th>Kostnad</th><th>Bild</th></tr>";
 foreach ($array as $products => $value) {
   echo "<tr>";
   echo "<td>" . $value['ID'] . "</td>";
   echo "<td>" . $value['name'] . "</td>";
   echo "<td>" . $value['description'] . "</td>";
   echo "<td>" . $value['price'] . " kr" . "</td>";
   echo "<td><img src='../Bilder/" . $value['image'] . "'></td>";

   echo "</tr>";
 }
 echo "</table>";

?>

<?php
    include 'footer.php';   
  ?>