@extends('layouts.app')

@section('content')

<div class="container">

<div class="alert alert-success" role="alert">
Visits
</div>

<a href="{{ url('home')}}"class="btn btn-success">Go Back to Menu</a>


<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Tracing_Id</th>
            <th>Enterprise_Id</th>
            <th>Date</th>
            <th>Kms</th>
        </tr>
    </thead>
    <tbody>
    @foreach($visits as $visit)
        <tr>
            <td>{{$visit->id}}</td>
            <td>{{$visit->tracing_id}}</td>
            <td>{{$visit->enterprise_id}}</td>
            <td>{{$visit->date}}</td>
            <td>{{$visit->kms}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $visits->links() }}

</div>
@endsection