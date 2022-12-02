<?php

require_once ROOT_PATH . '/app/models/modelo_tareas.php';

class IndexController extends ApplicationController


{	

	public function indexAction()
	
	{
		 $modeloTareas = new modeloTareas();
	     $contenido = $modeloTareas->getTareas();
			
		$this->view->contenido = $contenido;

		$this->countTask();

	}

	public function countTask()
	
	{
		 $modeloTareas = new modeloTareas();
	     $contenido = $modeloTareas->getTareas();

		 $numeroTareas = count($contenido);

		 $this->view->taskNumber = $numeroTareas;

	}


}