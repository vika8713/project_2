<?php

include 'autoload.php';

//Информация о городе

$myTown = new TownProject\Town();
echo 'Формат JSON '.$myTown->getJSON();
$myTown	->getTownInfo();
	  
?>  