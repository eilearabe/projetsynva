<?php
//connexion serveur mysql + selection bd


$host="mysql-abdelkaderstrasbourg.alwaysdata.net";
$user="214472_mybase";
$passwd="1948A240rec!";
$bd="abdelkaderstrasbourg_mybase2020";





$a=$_POST['Numero'];
$b=$_POST['Date'];
$c=$_POST['B1'];
$d=$_POST['B2'];
$e=$_POST['B3'];
$f=$_POST['B4'];
$g=$_POST['B5'];
$i=$_POST['chance'];


	$con= new mysqli($host, $user, $passwd, $bd);

	if($con ->connect_error)
	{
	die("connection non khdam:".$con ->connect_error) ;

	}

	$request="INSERT INTO jeuxlotto (Numero,Date,B1,B2,B3,B4,B5,chance) values('$a','$b','$c','$d','$e','$f','$g','$i')";
	if(mysqli_query($con, $request))
	{
		echo"succes !!! le résultat est bien transmit à la base de données !!!!";
	}
	else
	{
		echo"ATTENTION ! IL Y A UN PROBLEME LE RESULTAT N'EST PAS SAISIE VEUILLEZ REFAITES LA SAISIE !".$request."<br".mysqli_error($con);
	}

	mysqli_close($con);




?>








