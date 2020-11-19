@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class>
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, student</div>
                <div class="panel-body">
                <a href="{{ url('worksheets')}}">
                <button>Monitoring sheet</button>
                </a>
                <a href="{{ url('assistances')}}">
                <button>Assistance</button>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection