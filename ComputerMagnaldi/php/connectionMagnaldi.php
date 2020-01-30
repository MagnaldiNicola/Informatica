<?php //ACCESSO AL DATABASE
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'esercizio1');

	$con = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

	if($con->connect_errno) {  //if(false)
		$codice=$con->connecr_errno;//codice errore
		$errore=$con->connect_error;//descrizione errore
		die("Errore di connessione: $codice - $errore");
	}
	$con->set_charset("utf-8"); //Imposto il set id caratteri
?>