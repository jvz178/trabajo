@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')

}}
@endif

<a href="{{ url('tasks/create')}}"class="btn btn-success">New task</a>
<br/>
<br/>

<table class= "table table-light table-hover">
    
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Number</th>
            <th>Description</th>
        </tr>
    </thead>

    <body>
    @foreach ($tasks as $tasks)
        <tr></tr>
        <td>{{$loop->iteration}}</td>
        
        <td>{{$tasks->number}}</td>
        <td>{{$tasks->description}}</td>
        <td>
        <a class="btn btn-warning" href="{{url('/tasks/'.$tasks->id.'/edit')}}" >
            Edit 
        </a>
        
        <form method="post" action="{{url('/tasks/'.$tasks->id)}}" style="display:inline">
         {{csrf_field()}}
         {{method_field('DELETE')}}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Delete</button>
        </form>
        </td>
        </tr>
    @endforeach
    </body>
</table>
</div>
@endsection
