<?php
 define("PAGE_TITLE", "TeaPup Webbshop");

include 'header.php';   
?>

<?php
// Databasuppkoppling
require_once('connect.php');
// Skapa en SQL-sats
$query = "SELECT * FROM products";
// Kör SQL-satsen
$table = mysqli_query($connection , $query)
          or die (mysqli_error($connection));
// Visa en HTML-tabell
?>

<table class="table">
<tr> 
    <th>  </th> 
    <th>Artikelnummer</th> 
    <th>Namn </th> 
    <th>Beskrivning</th> 
    <th>Pris</th>
    <th>     </th> 

   
</tr>
<?php while($row = $table->fetch_assoc()) : ?>
<tr>
    <td class="pic"><?php echo "<img src='Bilder/" . $row['image'] . "' alt=''>"; ?></td>
    <td><?php echo $row['ID'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['description'] ?></td>
    <td><?php echo $row['price'] . " kronor" ?></td>
    <td>
       <br> <a class="buy" href="bestallning.php?ID=<?=$row['ID']?>&namn=<?=$row['name']?>&pris=<?=$row['price']?>" class="btn-md btn-info">Köp</a>
    </td>
</tr>
<?php 
// echo "<pre>";
// print_r($row);
// echo "</pre>";
endwhile; ?>

</table> <br><br>
<?php
    
    include 'footer.php';   
    ?>