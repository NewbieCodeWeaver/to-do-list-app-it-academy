<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array(
	'/' => 'index#index', // muestra listado de tareas
	'/view' => 'view#viewTask', // muestra una tarea
	'/add' => 'add#addTask', // añade una tarea
	'/remove' => 'remove#removeTask', // elimina una tarea
	'/edit' => 'edit#editTask', // edita una tarea

);
