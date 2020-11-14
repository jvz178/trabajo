@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class>
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido, alumno</div>
                <div class="panel-body">
                <a href="{{ url('worksheets')}}">
                <button>Ficha de seguimiento</button>
                </a>
                <a href="{{ url('assistances')}}">
                <button>Asistencia</button>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection