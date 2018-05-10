<?php
require("funkcijeZaStranu.php");
require ("provera.php");

zaglavlje("Pretraga");

$pretraga = "";


if(isset($_POST['pretraga']) && !empty($_POST['pretraga'])){
	$pretraga = $_POST['pretraga'];



$db = new mysqli('localhost','root','','test'); 
	if(mysqli_connect_errno()) { 
		
		echo "Doslo je do problema u povezivanju sa bazom podataka!<br>";
		exit;
	}
	
	$upit = "select * from test2 where test2.name=? ;"; 
		
		$pripNar = $db->prepare($upit);
		$pripNar->bind_param('s',$pretraga);
		$pripNar->execute(); 
		$pripNar->store_result();
		
		$pripNar->bind_result($id, $name, $password, $email);

		$pripNar->fetch();

		echo "<table border='1'>";
		echo "<tr><th>id</th><th>Email</th><th>Ime i Prezime</th><th>sifra</th></tr>";
		while($pripNar->fetch()){
			echo "<tr>";
				echo "<td>$id</td>";
				echo "<td>$email</td>";
				echo "<td>$name</td>";
				echo "<td>$password</td>";
				echo "</tr>";

		}

		echo "</table>";
		
		$pripNar->free_result();
		$db->close();




}else{
	echo "Niste uneli nista u polje za pretragu!";
}



podnozje();
?>