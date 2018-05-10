<?php
session_start();
require("funkcijeZaStranu.php");
require ("provera.php");


$mail = $_POST['email'];
$ime = $_POST['ime'];
$pass = $_POST['pass'];
$passRE = $_POST['passRe'];

zaglavlje($ime);

if(empty($_POST['email']) || empty($_POST['ime']) || empty($_POST['pass']) || empty($_POST['passRe'])){
	

	if (empty($_POST["email"])) {
        echo "<br>Niste uneli Email!";
    }else {
        $email = ($_POST["email"]);
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            echo "<br> Niste uneli dobar format e-mail!"; 
    	}	
 	}

 	if (empty($_POST["ime"])) {
        echo "<br>Zaboravili ste da upisete ime!";
    } else {
        $ime = ($_POST["ime"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$ime)) {
            echo  "<br>Samo slova i space su dozvoljeni"; 
        }
    } 

    if(!empty($_POST["pass"]) && ($_POST["pass"] == $_POST["passRe"])) {
        $pass = ($_POST["pass"]);
        $passRE = ($_POST["passRe"]);

        if (strlen($_POST["pass"]) <= '8') {
            echo "<br>Sifra mora sadrzati najmanje 8 karaktera!";
        }
        elseif(!preg_match("#[0-9]+#",$pass)) {
            echo "<br>Sifra mora imati najmanje jedan broj!";
        }
        elseif(!preg_match("#[A-Z]+#",$pass)) {
            echo  "<br>Sifra mora sadrzati bar jedno veliko slovo!";
        }
        elseif(!preg_match("#[a-z]+#",$pass)) {
            echo  "<br>Sifra mora sadrzati bar jedno malo slovo!";
        } 
    } elseif(!empty($_POST["pass"])) {
              echo "<br>Molim Vas proverite da li ste uneli i potvrdili sifru!";
    } else {
              echo "<br>Molimo unesite sifru!";
    } 
    

 echo " <br><a href='register.php'>nazad</a>";

}else{

	

$db = new mysqli('localhost','root','','test'); 
	if(mysqli_connect_errno()) { 
		
		echo "Doslo je do problema u povezivanju sa bazom podataka!<br>";
		exit;
	}
	
		$upit="insert into test2(email,name,password) 
				values(?,?,?);";
				
		$pripNar = $db->prepare($upit); 
		$pripNar->bind_param('sss',$mail,$ime,$pass);
		$pripNar->execute();

		$db->close();

		

		echo "Dobrodosli $ime uspesno ste se registrovali";



}


podnozje();	
?>