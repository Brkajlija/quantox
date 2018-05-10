<?php
require("funkcijeZaStranu.php");
require ("provera.php");
//include ("register3.php");

zaglavlje("Register");


?>

<table>
	<form action="register2.php" method="POST">
	
			<tr>
				<td>E-mail:</td>
				<td><input type="email" id="email" name="email"/></td>
			</tr>
			<tr>
				<td>Ime i Prezime:</td>
				<td><input type="text" id="ime" name="ime"/></td>
			</tr>
			<tr>
				<td>Sifra:</td>
				<td><input type="password" id="pass" name="pass"/></td>
			</tr>
			<tr>
				<td>Potvrda Sifre:</td>
				<td><input type="password" id="passRe" name="passRe"/></td>
			</tr>
			<tr>
				<td><input type="submit" id="register" name="register" value="Register"/></td>
				<td></td>
			</tr>	
	
	</form>
</table>


<?php



podnozje();

?>