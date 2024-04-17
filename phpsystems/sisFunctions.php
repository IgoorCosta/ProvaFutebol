<?php
	function gerarSalt($pass) {
		$salt = bin2hex(random_bytes(16));
		$senhaHash = hash('sha256', $pass.$salt);
		return [$salt, $senhaHash];
	}
	function check_login($consis) {
		if(isset($_SESSION['id'])) {
			$result = mysqli_query($consis,"select * from usuarios where id = '".$_SESSION['id']."' limit 1;");
			if($result && mysqli_num_rows($result) > 0)
				return mysqli_fetch_assoc($result);	
		}
		header("Location: login");
		die;
	}
    function get_operador($consis) {
		if(isset($_SESSION['id'])) {
			$result = mysqli_query($consis,"select * from usuarios where id = '".$_SESSION['id']."' limit 1;");
			if($result && mysqli_num_rows($result) > 0)
				return mysqli_fetch_assoc($result);	
		}
		die;
	}
	function check_login_index($consis) {
		if(isset($_SESSION['id'])) {
			$result = mysqli_query($consis,"select * from usuarios where id = '".$_SESSION['id']."' limit 1;");
			if($result && mysqli_num_rows($result) > 0) {
				$user_data = mysqli_fetch_assoc($result);
				$vers = rand(1, 20000000);		
				return [$user_data, $vers];
			}
		}
		header("Location: login");
		die;
	}
    
    try {
		if(!isset($connection) || $connection != 'safe'){
			throw new Exception("Mensagem de erro aqui");
		}

	} catch (Exception $e) {
		header('HTTP/1.0 403 Forbidden');
    	exit;
	}
?>
