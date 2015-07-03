@extends('layouts.master')

@section('content')

    <h1>Agregar nueva tarea</h1>
    <p class="lead">Agregar a esta lista de tareas. <a href="{{ route('tasks.index') }}">Lista de Tareas</a></p>
    <hr>

    @include('partials.alerts.errors')
    
    @include('partials.alerts.success')

    {!! Form::open([ 'route' => 'tasks.store'  ]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:', ['class'=>'control-label']) !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:', ['class'=>'control-label']) !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('Crear nueva Tarea', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop
