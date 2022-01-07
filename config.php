<?php

//  connection à la base de donnée
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'forgo2002','formulaire');

// declaration et initialisation des variables
$Name = $_POST['nom'];
$Email = $_POST['mail'];
$Pass = $_POST['mdp'];
$Phone = $_POST['numero'];



// insertion du code SQL 
$sql = "INSERT INTO `inscription` (`id`, `username`, `email`, `password`, `numero`) VALUES ('0', '$Name', '$Email', '$Pass', '$Phone')";

// insertion dans  la base de dnnée 
$rs = mysqli_query($con, $sql);

if($rs)
	{
		echo "Information bien enregistrer dans la base de donnée";
	}else {
		echo "verifier vos coordonnées";
	}
?>