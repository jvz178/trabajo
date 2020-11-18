@extends('layouts.app')

@section('content')

<div class="container">

<div class="alert alert-success" role="alert">
Visits
</div>
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
            <td>{{$visit->student_id}}</td>
            <td>{{$visit->cycle_id}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $visits->links() }}

</div>
@endsection