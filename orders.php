<?php
//Logga in i databasen
//OBS vi får tillbaka en $conncetion
require_once('connect.php');

//ID, kundName,kundAdress, kundEmail, kundTelefon, product_ID, name, price 
//Skapa en SQL sats
$query = "SELECT * FROM orders,products
WHERE ID = product_ID
ORDER BY orderID
";

//Exekvera SQL-satsen
$tabell = mysqli_query($connection, $query)
    or die(mysqli_error($connection));

echo "<table border=3>";
echo "<tr><th>Order ID</th><th>Kund Namn</th><th>Kund Adress</th><th>Kund Email</th>
<th>Kund Telefon</th><th>Produkt ID</th><th>Produktnamn</th><th>Produkt Pris</th></tr>";
while($rad = $tabell->fetch_assoc()){
    //Varje post/rad skickas hit som associative array
    echo "<tr><td>"     .   $rad['orderID']        .       "</td>";
    echo "<td>"         .   $rad['kundName']     .       "</td>";
    echo "<td>"         .   $rad['kundAdress']     .       "</td>";
    echo "<td>"         .   $rad['kundEmail']     .       "</td>";
    echo "<td>"         .   $rad['kundTelefon']     .       "</td>";
    echo "<td>"         .   $rad['product_ID']     .       "</td>";
    echo "<td>"         .   $rad['name']     .       "</td>";
    echo "<td>"         .   $rad['price']     .       "</td></tr>";
}
echo "</table>";
?>