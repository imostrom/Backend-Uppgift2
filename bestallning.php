
<?php
 define("PAGE_TITLE", "Din Beställning");
 
include 'header.php';   
?>

 <?php

$namn = $_GET['namn'];
$pris = $_GET['pris'];
echo "<h1>Beställning: $namn</h1><br>";
echo "<div>Din hund kostar $pris kronor. <br>
Att få hem en ny familjemedlem är alldeles underbart, men det kan även vara omtumlande och det är mycket man ska tänka på. <br>
 Fråga oss så får du tips och råd för den första tiden tillsammans med <b>$namn</b>! </div>";

?>

<form name="contactform" method="post" action="submit.php">
<table width="200px">
<tr>
 <td valign="top">
  <label for="kund">Namn: </label>
 </td>
 <td valign="top">
  <input style="margin:2px;" type="text" ID="kund" name="kund" maxlength="50" size="50" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">E-mail: </label>
 </td>
 <td valign="top">
  <input  style="margin:2px;" type="text" name="email" maxlength="80" size="50" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="address">Address: </label>
 </td>
 <td valign="top">
  <textarea  style="margin:2px;"  name="address" maxlength="200" cols="40" rows="3" required></textarea>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comment">Meddelande: </label>
 </td>
 <td valign="top">
  <textarea  style="margin:2px;"  name="comment" maxlength="1000" cols="50" rows="6" required></textarea>
 </td>
</tr>
<input type="hidden" value="<?=$namn?>" name="produkt">
<input type="hidden" value="<?=$pris?>" name="pris">
<tr>
 <td colspan="40" style="text-align:center">
  <input style="margin:10px;" type="submit value="Beställ nu"> 
 </td>
</tr>
</table>
</form>


<?php

 include 'footer.php';   
 

?>
