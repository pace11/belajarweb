<!DOCTYPE html>
<html>
<head>
	<title>Belajar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
 <div class="header">
 	<h1>Riantri</h1>
 </div>

 <div class="menu">
 	<a href="?page=home">home</a> 
 	<a href="?page=article">article</a>   <!-- a itu untuk link -->
 	<a href="?page=about">about</a>
 	<a href="?page=contact">contact us</a>

 </div>

 <div class="article">
 	<?php 
 		include("content.php")

 	 ?>

 </div>

 <div class="footer">
 	<p>copyright</p> 
 </div>
</body>
</html>