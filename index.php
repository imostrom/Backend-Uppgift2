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
    <th>Bild</th>  
    <th>Artikelnummer</th> 
    <th>Namn</th> 
    <th>Beskrivning</th> 
    <th>Pris</th>
   
</tr>
<?php while($row = $table->fetch_assoc()) : ?>
<tr>
    <td><?php echo "<img src='Bilder/" . $row['image'] . "' alt='' width='100'>"; ?></td>
    <td><?php echo $row['ID'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['description'] ?></td>
    <td><?php echo $row['price'] . " kronor" ?></td>
    <td>
        <form action="bestallning.php" method="post">

            <input type="submit" value="Köp denna valp" 
                   class="btn btn-outline-danger">
        </form>
    </td>
</tr>
<?php 
// echo "<pre>";
// print_r($row);
// echo "</pre>";
endwhile; ?>

</table>
<?php
    
    include 'footer.php';   
    ?>