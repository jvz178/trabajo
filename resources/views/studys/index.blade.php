@extends('layouts.app')

@section('content')

<div class="container">

<div class="alert alert-success" role="alert">
Studies
</div>

<a href="{{ url('home')}}"class="btn btn-success">Go Back to Menu</a>


<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Student_Id</th>
            <th>Cycle_id</th>
        </tr>
    </thead>
    <tbody>
    @foreach($studys as $study)
        <tr>
            <td>{{$study->id}}</td>
            <td>{{$study->student_id}}</td>
            <td>{{$study->cycle_id}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $studys->links() }}

</div>
@endsection