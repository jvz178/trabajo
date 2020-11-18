@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class>
            <div class="panel panel-default">
                <div class="panel-heading">Welcome enterprise tutor</div>
                <div class="panel-body">
                <a href="{{ url('assistances')}}" class="btn btn-primary">
                Assistances
                </a>
                <a href="{{ url('task_done')}}" class="btn btn-info">
                Task done
                </a>
                <a href="{{ url('')}}" class="btn btn-success">
                Sign worksheet
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection