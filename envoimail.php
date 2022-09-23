<?php
	$basehost= 'mysql-kadeidja.alwaysdata.net';
	$basename= 'kadeidja_bdd1';//'le nom de la base de donne'
	$dbuser= 'kadeidja';//'root'
	$dbpswd= 'kokiko@db123';//


	  try 
	{
	 	$usedbase = new PDO ('mysql:host='.$basehost.';dbname='.$basename,$dbuser,$dbpswd , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));		
 	} 
 	catch (Exception $e) 
 	{
 		die('erreur:'.$e->getMessage());
 	} 
 
$sendto   = "kadeidja.cisse@gmail.com";
$nom     = $_POST['lenom'];
$email    = $_POST['lemail'];
$subject  = $_POST['lesujet'];
$message  = $_POST['letexte'];
$mailhead = "From:".$nom . " l'e-mail de ".$email;
mail($sendto,$subject,$message,$mailhead);

echo "Merci $nom . Votre message a bien été envoyé!<br><br>";
echo "<a href ='../index.php'><button>RETOURNER A LA PAGE D'ACCUEIL</button></a>";
?>

