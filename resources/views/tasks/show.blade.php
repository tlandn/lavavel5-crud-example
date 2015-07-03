@extends('layouts.master')

@section('content')

	<h1>{{ $task->title }}</h1>
	<p class="lead">{{ $task->description }}</p>

	<a href="{{ route('tasks.index') }}" class="btn btn-info">Regresar a las Tareas</a>
	<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editar Tarea</a>

	<div class="pull-right">
		<a href="#" class="btn btn-danger">Borrar Tarea?</a>
	</div>

@stop