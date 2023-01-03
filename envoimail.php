<?php
	$basehost= 'mysql-kadeidja.alwaysdata.net';
	$basename= 'kadeidja_port1';
	$dbuser= 'kadeidja';
	$dbpswd= '';


	  try 
	{
	 	$usedbase = new PDO ('mysql:host='.$basehost.';dbname='.$basename,$dbuser,$dbpswd , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)); $usedbase->exec('SET NAMES utf8');		
 	} 
 	catch (Exception $e) 
 	{
 		die('erreur:'.$e->getMessage());
 	}
	 $to   = "k.cisse.ad@gmail.com";
	 $nom     = $_POST['leNometPrenom'];
	 $email    = $_POST['leMail'];
	 $subject  = $_POST['leSujet'];
	 $message  = $_POST['leMessage'];
	 $mailhead = "From : ".$nom . " l'e-mail de ".$email;
	 mail($to,$subject,$message,$mailhead);
	 
	 header('Location: ../index.php');
	 //echo "Merci $nom . Votre message a bien été envoyé!<br><br>";
	// echo "<a href ='../index.php'><button>RETOURNER A LA PAGE D'ACCUEIL</button></a>";
	 ?>
	 

