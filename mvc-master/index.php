<?php
include_once "includes/autoload.php";
session_start();

echo $request = $_SERVER['QUERY_STRING'];

switch ($request){
	/*case "1": break;
	case "1": break;
	case "1": break;
	case "1": break;
	*/


	case "bienvenido": 
		include_once "App/vistas/bienvenido.php";
		break;

	case "crear-usuarios":
		include_once "App/vistas/uCrear.php";
		break;
	case "crear-plan-de-estudios":
		include_once "App/vistas/planCrear.php";
		break;
	case "asignar-cursos":
		include_once "App/vistas/cursosAsignar.php";
		break;
	//POST
	case "login":
		include_once "App/vistas/uLogin.php";
		break;
	case "guardar-usuario":
		include_once "App/vistas/uCrear.php";
		break;
	default:
		include_once "App/vistas/uLogin.php";
		break;

}