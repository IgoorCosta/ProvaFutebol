<?php
	function sis(){
		$dbhost = "localhost"; 
		$dbuser = "lollaigoor-costa"; 
		$dbpass = "@Rasptel021014Maria";
		$dbname = "fitsis";
		if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
			die("Não foi possível se conectar com o Servidore!");
		return $con;
	}
	
	try {
		if(!isset($connection) || $connection != 'safe'){
			throw new Exception("Mensagem de erro aqui");
		}
	} catch (Exception $e) {
		header('HTTP/1.0 403 Forbidden');
    	die;
	}

	$consis = sis();
?>
