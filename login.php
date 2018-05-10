<?php
require("funkcijeZaStranu.php");
require ("provera.php");

zaglavlje("Login");

?>

<table>
	<form action="login2.php" method="POST">
	
			<tr>
				<td>E-mail:</td>
				<td><input type="email" id="email" name="email"/></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" id="pass" name="pass"/></td>
			</tr>
			<tr>
				<td><input type="submit" id="logIn" name="logIn" value="Log In"/></td>
				<td></td>
			</tr>	
	
	</form>
</table>


<?php



podnozje();

?>