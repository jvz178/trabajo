@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido alumno</div>

                <div class="panel-body">
                <a href="{{ url('worksheets/index')}}">
                <button type="submit">Ficha de seguimiento</button>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection