@extends('layouts.master')

@section('content')
	<h1>Lista de Tareas</h1>
	<p class="lead">Aquí está una lista de todas sus tareas. <a href="{{ route('tasks.create') }}">Agregar Tarea?</a></p>
	<hr>
	
	@foreach($tasks as $task)
		<h3>{{ $task->title }}</h3>
		<p>{{ $task->description }}</p>
		<p>
			<a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">Ver Tarea</a>
			<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editar Tarea</a>
		</p>
	@endforeach

@stop