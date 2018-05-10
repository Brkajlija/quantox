<?php
function zaglavlje($naslov){
	
	?>
		<html>

		<head>
		<title><?php echo $naslov;?></title>

		<style>

		@import url('https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display');

		div{
			box-sizing:border-box;
		}

		#pozadina{
			width:80%;
			height:100%;
			margin:auto;
			/*background-color:lightgray;*/
		}


		#zaglavlje{
			background-color:lightgray;
			height:17%;
			padding:10px;
			
		}

		#zaglavlje img{
			float:left;
			height:90%;
			width:12%;
			border-radius:10px;
		}
		#zaglavlje h1{
			margin-left:20px;
			float:left;
			width:50%;
			height:20%;
			font-family: 'Sedgwick Ave Display', cursive;
		}
		#zaglavlje i{
			margin-left:20px;
			float:left;
			width:50%;
			height:5%;
		}
		#meni{
			clear:both;
			background-color:lightgray;
			height:80%;
			width:20%;
			float:left;
			padding:20px;
			font-family:arial, sans-serif;
		}
		#meni a{
			background-color:#ED4918;
			color:#FFF86F;
			padding:5px;
			text-decoration:none;
			border-radius:5px;
			font-weight:bold;
		}
		#telo{
			background-color:#FF7600;
			height:80%;
			width:80%;
			float:left;
			padding:10px;
			font-family:arial, sans-serif;
		}
		#telo p{
			text-align:justify;
		}

		#podnozje{
			clear:both;
			text-align:center;
			font-weight:bold;
			font-family:arial, sans-serif;
			padding:2px;
		}
		</style>
		</head>


		<body>

		<div id="pozadina">

		<div id="zaglavlje">
			<a href="index.php"><img src="mozila.jpg"/></a>
			<h1>Mozila Fazila Gorila</h1><br>
			<i>Baza podataka &copy;Brkajlija</i>
		</div>
		
		<div id="meni">
			<a href="index.php">Home</a><br><br>
			<a href="logIn.php">Log in</a><br><br>
			<a href="register.php">Register</a><br><br><br>
			<a href="search.php">Search</a><br><br>
			<input type="text" value="Unesite ime za pretragu" name = "pretraga"/ id="pretraga"><br><br><br>
			<a href="">Logout</a>
		</div>
		
		<div id="telo">
		
	<?php
	

}

function podnozje(){
	
	?>
		</div>
		<div id="podnozje">
			<p>&copy; 2018, Brkovic Nenad</p>
		</div>

		</div>	



		</body>

		</html>
	<?php
	
}

?>