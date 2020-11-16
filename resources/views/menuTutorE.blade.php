@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class>
            <div class="panel panel-default">
                <div class="panel-heading">Welcome educational tutor</div>
                <div class="panel-body">
                <a href="{{ url('tasks')}}" class="btn btn-primary">
                Tasks
                </a>
                <a href="{{ url('modules')}}" class="btn btn-default">
                Modules
                </a>
                <a href="{{ url('rra')}}" class="btn btn-info">
                RRA
                </a>
                <a href="{{ url('cce')}}" class="btn btn-success">
                CCE
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection