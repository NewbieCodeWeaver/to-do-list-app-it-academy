<?php

require_once ROOT_PATH . '/app/models/modelo_tareas.php';


class EditController extends ApplicationController

{

	public function editTaskAction()
	{

		$idTarea = $_GET['id'];

		$modeloTareas = new modeloTareas();
		$getTarea = $modeloTareas->editTarea($idTarea);

		$this->view->tareaEditar = $getTarea;

		{
			if (!empty($_POST)) {
	
				$modeloTareas->updateTarea($_GET["id"],$_POST["nombre"], $_POST["f_inicio"], $_POST["f_fin"], $_POST["creador"], $_POST["estado"]);
			}



	
		}






	}

	public function viewAction()
	{
		echo "hello from test::index";
	}



}
