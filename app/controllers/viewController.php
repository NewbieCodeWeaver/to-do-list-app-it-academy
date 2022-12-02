<?php

require_once ROOT_PATH . '/app/models/modelo_tareas.php';


class ViewController extends ApplicationController

{

	public function viewTaskAction()
	{

		$idTarea = $_GET['id'];

		$modeloTareas = new modeloTareas();
		$getTarea = $modeloTareas->viewTarea($idTarea);

		$this->view->tareaVer = $getTarea;


	}


}
