<?php

require_once ROOT_PATH . '/app/models/modelo_tareas.php';


class AddController extends ApplicationController

{

	public function addTaskAction()
	{
		if (!empty($_POST)) {

			$modeloTareas = new modeloTareas();
			$modeloTareas->newTarea($_POST["nombre"], $_POST["f_inicio"], $_POST["f_fin"], $_POST["creador"], $_POST["estado"]);
		}

	}

	public function viewAction()
	{
		echo "hello from test::index";
	}
}
