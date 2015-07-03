@extends('layouts.master')

@section('content')

	<h1>{{ $task->title }}</h1>
	<p class="lead">{{ $task->description }}</p>
	<hr>
	
	<div class="row">
		<div class="col-lg-12">
	
			<a href="{{ route('tasks.index') }}" class="btn btn-info">Regresar a las Tareas</a>
			<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editar Tarea</a>
		
			<div class="pull-right">
				{!! Form::open(['method'=>'DELETE', 'route'=>['tasks.destroy', $task->id]]) !!}
					{!! Form::submit('Borrar Tarea', ['class'=>'btn btn-danger']) !!}
				{!! Form::close() !!}
			</div>
	
		</div>
	</div>

@stop