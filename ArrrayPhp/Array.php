<?php

 $pistole1 = array('beretta','remington','winchester','colt','m9');

    echo "Ecco l'array definitivo di pistole: <br>";

	foreach($pistole1 as $p){
	echo $p."<br>";
 }

 $pistole2 = ['beretta','remington','winchester','colt','m9'];

 echo "Ecco l'array definitivo di pistole: <br>";

 foreach($pistole2 as $p){
	echo $p."<br>";

 }

 echo "Ecco l'array definitivo di pistole: <br>";

 $pistole3 = array(
		0=> "beretta",
		1=>"remington",
		2=>"winchester",
		3=>"colt",
		4=>"m9");

 foreach($pistole3 as $p){
	echo $p."<br>";

 }
 
 $pistole4 = array(
		"Be"=> "beretta",
		"Re"=>"remington",
		"Win"=>"winchester",
		"Co"=>"colt",
		"M9"=>"m9");
		echo "Ecco l'array definitivo di pistole: <br>";
 foreach($pistole4 as $p){
	echo $p."<br>";

 }


?>