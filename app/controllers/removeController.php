<?php

require_once ROOT_PATH . '/app/models/modelo_tareas.php';


class RemoveController extends ApplicationController

{


	public function removeTaskAction()
	{
		$idTarea = $_GET['id'];

			$modeloTareas = new modeloTareas();
			$modeloTareas->removeTarea($idTarea);

	}




}
