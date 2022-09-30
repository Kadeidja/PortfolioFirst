<!--On insére la base de donnée qu'on souhaite utilisé-->
<?php
	$basehost= 'mysql-kadeidja.alwaysdata.net';
	$basename= 'kadeidja_port1';
	$dbuser= 'kadeidja';
	$dbpswd= '';

	  try 
	{
	 	$baseutiliser = new PDO ('mysql:host='.$basehost.';dbname='.$basename,$dbuser,$dbpswd , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));//ici on insère les informations dans des variables au cas ou leurs contenus changerais...
		$baseutiliser->exec('SET NAMES utf8');	//Pour les accents			
 	} 
 	catch (Exception $e) 
 	{
 		die('erreur:'.$e->getMessage());
 	} 
?>

<!-- --------------------LE MENU-------------------- -->
<?php
 function get_menuportv1(){
     global $baseutiliser;
     $menuaRechercher=$baseutiliser->query('
     SELECT *
     FROM menuportv1
     ORDER BY id'
    );
    $resultatMenu = array();
    while ($menuRanger = $menuaRechercher->fetchObject()){
        $menuportresultat[]=$menuRanger;
    }
    return $menuportresultat;
 }
?>

<!-- --------------------PARTIE : MON PORTFOLIO-------------------- -->
<?php

	function get_portfolioportv1(){
 		global $baseutiliser;
		$elementPortfolio=$baseutiliser->query('
		SELECT *
		FROM portfolioportv1
		ORDER BY id'
);
$elementPortfolioResultat = array();

while ($elementPortfolioRanger = $elementPortfolio->fetchObject()){
	$elementPortfolioResultat[]=$elementPortfolioRanger;
}
return $elementPortfolioResultat;
}
?>
