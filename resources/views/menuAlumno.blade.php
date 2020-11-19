@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class>
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, student</div>
                <div class="panel-body">
                <a href="{{ url('worksheets')}}" class="btn btn-primary">Monitoring sheet</a>
                <a href="{{ url('assistances')}}" class="btn btn-danger">Assistance</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection