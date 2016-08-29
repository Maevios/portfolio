<!Doctype html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" type="image/png" href="pizza.png" >
<title>Mackie's Pizza</title>


	
	
<body>
	<nav id="formsub">
	<ul>
  
    <a href="index.html"><img src="images/logo.png" width="125px" height="80px"  alt="logo" class="logo" /></a>
  <li><a href="index.html">Home</a></li>
  <li><a href="menusubpage.html">Menu</a></li>
  <li><a href="didyouknow.html">Did you know?</a></li>
  <li><a href="contact.php">Contact</a></li>

  <a href="#"><img src="images/fb.png" width="30" height="30" alt="facebook" class="socialmedia" /></a>
  <a href="#"><img src="images/twt.png" width="30" height="30" alt="twitter" class="socialmedia"/></a>
  <a href="#"><img src="images/mail.png" width="30" height="30" alt="mail" class="socialmedia"/></a>
</ul>
    </nav>

    <center class="formPhp">
	<h2 class="thanks"> Thank you! </h2>


<?php

echo "<p>Full Name:";
$name=$_POST["name"];
echo "$name";
echo "<br>";


echo "<p>Telephone:";
$telephone=$_POST["telephone"];
echo "$telephone";
echo "<br>";

echo "<p>Number of People:";
$number=$_POST["number"];
echo "$number";
echo "<br>";

echo "<p>Date:";
$date=$_POST["date"];
echo "$date";
echo "<br>";

echo "<p>Time:";
$time=$_POST["time"];
echo "$time";
echo "<br>";


?>
</center>
</body>
</html>