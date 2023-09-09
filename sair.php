<?php
	//setcookie("login"); //para excluir o cookie basta chamar a função e passar o nome da variavel que será excluida
	session_start();
	session_unset();
	session_destroy();
	
	header("Location:login.php");
	?>