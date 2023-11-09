@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <h1>ROLES Y PERMISOS</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
           <b><p>{{ $user->name }}</p></b> 
           
        </div>
        <div class="card-body">
            <h5>USUARIOS Y ROLES</h5>
            {!! Form::model($user, ['route' => ['asignar.update', $user], 'method' => 'put']) !!}
            @foreach ($roles as $role)

                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, $user->hasAnyRole([$role->id]) ? : false, ['class' => 'mr-1 ']) !!}
                    {{$role->name}}
                    </label>
                </div>
            @endforeach
           
            {!! Form::submit('Asignar Permisos', ['class' => 'btn btn-primary']) !!}

        </div>
        
    </div>

@stop

@section('css')
     <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stop
