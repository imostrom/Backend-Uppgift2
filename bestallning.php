
<?php
 define("PAGE_TITLE", "Din Beställning");
 
include 'header.php';   
?>

 <?php
 if (isset ($_GET['ID']) &&($_GET['namn']) && ($_GET['pris'])){


$ID = $_GET['ID'];
$namn = $_GET['namn'];
$pris = $_GET['pris'];
echo "<h2><br>Beställning: $namn</h2><br>";
echo "<div>Din hund kostar $pris kronor. <br>
Att få hem en ny familjemedlem är alldeles underbart,  <br> men det kan även vara omtumlande och det är mycket man ska tänka på. <br>
 Fråga oss så får du tips och råd för den första tiden tillsammans med <b>$namn</b>! </div>";

?>

<form name="contactform" method="post" action="insert.php">
<table width="200px">
<tr>
 <td valign="top">
  <label for="kund">Namn: </label>
 </td>
 <td class="order" valign="top">
  <input style="margin:2px;" type="text" name="kundName" maxlength="50" size="50" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">E-mail: </label>
 </td>
 <td class="order" valign="top">
  <input  style="margin:2px;" type="text" name="kundEmail" maxlength="50" size="50"  required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="address">Address: </label>
 </td>
 <td class="order" valign="top">
 <textarea  style="margin:2px;"  name="kundAdress" maxlength="200" cols="30" rows="4" required></textarea>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telefon">Telefon: </label>
 </td>
 <td class="order" valign="top">
 <input style="margin:2px;" type="text" name="kundTelefon" maxlength="50" size="50" required>
 </td>
</tr>
<input type="hidden" value="<?=$ID?>" name="product_ID">
<input type="hidden" value="<?=$namn?>" name="product_name">
<input type="hidden" value="<?=$pris?>" name="product_price">
<tr>
 <td colspan="40" style="text-align:center">
  <input style="margin:10px;" type="submit" value="Beställ nu"> 
 </td>
</tr>
</table>
</form>


<?php
 }else
 header("Location: index.php");
 //echo "Sidan finns inte!";
 include 'footer.php';   
 

?>
