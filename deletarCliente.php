<?php
	require_once("controller/ControllerCadastro.php");

	$controller = new ControllerCadastro();
	$resultado = $controller->excluir($_GET['id']);

?>