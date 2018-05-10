<?php
session_start();

require("funkcijeZaStranu.php");
require("provera.php");

provera();

session_destroy();

header('Location:index.php');



?>