<?php
//session_start();
require("funkcijeZaStranu.php");
require ("provera.php");



$mail = $_POST['email'];
$pass = $_POST['pass'];




$db = new mysqli('localhost','root','','test'); 
	if(mysqli_connect_errno()) { 
		
		echo "Doslo je do problema u povezivanju sa bazom podataka!<br>";
		exit;
	}
	
	$upit = "select name,password,email from test2 where test2.email=? ;"; 
		
		$pripNar = $db->prepare($upit);
		$pripNar->bind_param('s',$mail);
		$pripNar->execute(); 
		$pripNar->store_result();
		
		$pripNar->bind_result($name, $password, $email);  
		
		$pripNar->fetch();

		zaglavlje($name);

		

			if($mail==$email && $pass==$password){
						//$_SESSION['korisnik'] = $name; 

						if(!empty($_POST['email']) && !empty($pass = $_POST['pass'])){
						echo  "Cestitamo &nbsp;".$name."&nbsp;uspesno ste se ulogovali, izvolite tabelu svih korisnika";

						$upit2 = "select * from test2 ;"; 
		
						$pripNar = $db->prepare($upit2);
		
						$pripNar->execute(); 
						$pripNar->store_result();
		
						$pripNar->bind_result($id,$email,$imeKor,$password);  
		
						//echo "Postoje ".$pripNar->num_rows." zapisa.<br>";

						echo "<table border='1'>";
						echo "<tr><th>id</th><th>Email</th><th>Ime i Prezime</th><th>sifra</th></tr>";
						while($pripNar->fetch()){
							echo "<tr>";
								echo "<td>$id</td>";
								echo "<td>$email</td>";
								echo "<td>$imeKor</td>";
								echo "<td>$password</td>";
								echo "</tr>";

						}

						echo "</table>";
					   }else{
					   		echo"Niste popunili polja";
					   }

				}else if($mail == "" || $pass == ""){
						echo  "Niste popunili sva polja";
				}else{
						echo  "Korisnicko ime ili sifra nisu tacni";
				}

			



		
		
		

		

		$pripNar->free_result();
		$db->close();
		

		

podnozje();	