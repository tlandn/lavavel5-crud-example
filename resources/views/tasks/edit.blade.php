@extends('layouts.master')

@section('content')

	<h1>Editar Tarea</h1>
	<p class="lead">Corrija la tarea enseguida. <a href="{{ route('tasks.index') }}">Lista de Tareas</a> </p>
	<hr>

	@include('partials.alerts.errors')

	@include('partials.alerts.success')

	{!! Form::model( $task, ['method' => 'PATCH','route' => ['tasks.update', $task->id]] ) !!}
	 
	<div class="form-group">
	    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
	    {!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>
	 
	<div class="form-group">
	    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
	    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	</div>
	 
	{!! Form::submit('Actualizar Tarea', ['class' => 'btn btn-primary']) !!}
	 
	{!! Form::close() !!}	
@stop