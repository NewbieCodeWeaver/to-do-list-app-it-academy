<?php

class modeloTareas extends Model
{

	private $bbd;

	public function __construct()
	{
		$this->bbd = file_get_contents("../app/models/tareas.json");
	}


	public function getTareas()

	{

		$array_Tareas = json_decode($this->bbd, true);

		return $array_Tareas;
	}


	public function viewTarea($id)

	{

		$arrayTareas = json_decode($this->bbd, true);

		foreach ($arrayTareas as $i => $tarea) {
			if ($tarea['_id'] == $id) {

				$taskToView = ($arrayTareas[$i]);

				return $taskToView;

			}
		}

	}



	public function newTarea($nombre, $f_inicio, $f_fin, $creador, $estado)

	{

		$arrayTareas = json_decode($this->bbd, true);


			if ($arrayTareas != NULL) {

				$getLastArray = end($arrayTareas);
				$getID = current($getLastArray);
		
				$nuevaKey = ++$getID;
		
		 
	
			} else {

	   			$nuevaKey = 1; }

		$arrayAgregar = array(

			'_id' => $nuevaKey,
			'nombre' => $nombre,
			'f_inicio' => $f_inicio,
			'f_fin' => $f_fin,
			'creador' => $creador,
			'estado' => $estado

			);

			//var_dump($arrayAgregar);
		    //exit;

		if ($arrayTareas != NULL) {

			array_push($arrayTareas, $arrayAgregar);

			$json = json_encode($arrayTareas);

	
		} else {

	 		$json = json_encode([$arrayAgregar]);


	}

			file_put_contents("../app/models/tareas.json", $json);

			
			return header("Location: ../web/" );
	}

	public function removeTarea($id)

	{

		$arrayTareas = json_decode($this->bbd, true);

		foreach ($arrayTareas as $i => $tarea) {
			if ($tarea['_id'] == $id) {

				unset($arrayTareas[$i]);

			}
		}

		$json = json_encode($arrayTareas);

		file_put_contents("../app/models/tareas.json", $json);

		return header("Location: ../web/" );
	}



	public function editTarea($id)

	{

		$arrayTareas = json_decode($this->bbd, true);

		foreach ($arrayTareas as $i => $tarea) {
			if ($tarea['_id'] == $id) {

				$taskToEdit = ($arrayTareas[$i]);

				return $taskToEdit;

			}
		}

	}



	public function updateTarea($id, $nombre, $f_inicio, $f_fin, $creador, $estado)

	{

		$arrayTareas = json_decode($this->bbd, true);

		
		foreach ($arrayTareas as $i => $tarea) {
			if ($tarea['_id'] == $id) {

				 $arrayTareas[$i]['nombre'] = $nombre;
				 $arrayTareas[$i]['f_inicio'] = $f_inicio;
				 $arrayTareas[$i]['f_fin'] = $f_fin;
				 $arrayTareas[$i]['creador'] = $creador;
				 $arrayTareas[$i]['estado'] = $estado;
			}}

			$json = json_encode($arrayTareas);

			file_put_contents("../app/models/tareas.json", $json);

			return header("Location: ../web/" );


			}
}
