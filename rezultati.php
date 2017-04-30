<html>
<head>
<title>Berza bilja: Rezultati</title>
<link href = "berzastyle.css" rel = "stylesheet" type = "text/css">
</head>
<body class="body">

<h2 id= "welcome">Dobrodošli!<br><h2>
<img id = "slika" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzoTE7Xqj4XhDY2ZyiGrzvuyVECZoOpITxlwVio7TelDUV6VMCrQ"/>

<ul>
	<li><a href="pocetna.php">Početna</a></li>
	<li><a href="ponudite.php">Ponudite</a></li>
	<li><a href="pronadjite.php">Pronadjite</a></li>
	<li><a href="">Iskustva</a></li>
</ul>	

<h1 id="naslov">Berza bilja<br><h1>
<p>Rezultati pretrage:</p>
<?php
$lokacija = $_POST["lokacija"];
$biljka = $_POST["biljka"];

mysql_connect("localhost", "root", "") or die(mysql_error());	
mysql_select_db("travari") or die(mysql_error());
if ($lokacija == NULL and $biljka == NULL) {
	$strSQL = "SELECT * FROM berzabilja";
}
elseif ($lokacija == NULL) {
	$strSQL = "SELECT * FROM berzabilja WHERE Biljka = '$biljka'";
}
elseif ($biljka == NULL) {
	$strSQL = "SELECT * FROM berzabilja WHERE Lokacija = '$lokacija'";
}
else {
	
	$strSQL = "SELECT * FROM berzabilja WHERE Lokacija = '$lokacija' AND Biljka = '$biljka'";
}
?>
 <table style="width:100%">
  <tr>
    <th>Ime</th>
    <th>Lokacija</th>
    <th>Telefon</th>
	<th>Biljka</th>
	<th>Kolicina</th>
	<th>Cena din/kg</th>
  </tr>
<?php 
$rs = mysql_query($strSQL);
/*if (!empty($_POST)){*/
	while($row = mysql_fetch_array($rs)) {
		?>
		<tr>
		<td><?php echo $row['Ime']?></td>
		<td><?php echo $row['Lokacija']?></td>
		<td><?php echo $row['Telefon']?></td>
		<td><?php echo $row['Biljka'] ?></td>
		<td><?php echo $row['Kolicina']?></td>
		<td><?php echo $row['Cena'] ?></td> 
		</tr>
		<?php
		}

mysql_close ();


?>
</table>
</body>
</html>
