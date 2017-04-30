<html>
<head>
<title>Berza bilja Postavljeno</title>
<link href = "berzastyle.css" rel = "stylesheet" type = "text/css">
</head>
<body class="body">

<h2 id= "welcome">Dobrodošli!<br><h2>
<img id = "slika" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzoTE7Xqj4XhDY2ZyiGrzvuyVECZoOpITxlwVio7TelDUV6VMCrQ"/>

<ul>
	<li><a href="berza1.php">Početna</a></li>
	<li><a href="berza2.php">Ponudite</a></li>
	<li><a href="pretraga.php">Pronadjite</a></li>
	<li><a href="">Iskustva</a></li>
</ul>	

<h1 id="naslov">Berza bilja<br><h1>
<br><br>
<p>Uspešno ste postavili oglas. Hvala!</p>
<?php

// define variables and set to empty values
$ime = $lokacija = $telefon = $biljka = $kolicina = $cena = "";


  $ime = $_POST["ime"];
  $lokacija = $_POST["lokacija"];
  $telefon = $_POST["telefon"];
  $biljka = $_POST["biljka"];
  $kolicina = $_POST["kolicina"];
  $cena = $_POST["cena"];
  
  


$strSQL = "INSERT INTO berzabilja(Ime, Lokacija, Telefon, Biljka, Kolicina, Cena) 
VALUES ('$ime', '$lokacija', '$telefon', '$biljka', '$kolicina', '$cena')";
//echo $strSQL;
mysql_connect("localhost", "root", "") or die(mysql_error());	
mysql_select_db("travari") or die(mysql_error());
mysql_query($strSQL) or die(mysql_error());
mysql_close ();
?>
