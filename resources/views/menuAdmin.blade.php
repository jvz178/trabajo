@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class>
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido, administrador</div>
                <div class="panel-body">
                <a href="{{ url('users')}}" class="btn btn-primary">
                Users
                </a>
                <a href="{{ url('cycles')}}" class="btn btn-default">
                Cycles
                </a>
                <a href="{{ url('enterprises')}}" class="btn btn-info">
                Enterprises
                </a>
                <a href="{{ url('assistances')}}" class="btn btn-success">
                Assistances
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection