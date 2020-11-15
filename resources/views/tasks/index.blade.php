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
    @foreach ($tasks as $task)
        <tr></tr>
        <td>{{$loop->iteration}}</td>
        
        <td>{{$task->number}}</td>
        <td>{{$task->description}}</td>
        <td>
        <a class="btn btn-warning" href="{{url('/tasks/'.$task->id.'/edit')}}" >
            Edit 
        </a>
        
        <form method="post" action="{{url('/tasks/'.$task->id)}}" style="display:inline">
         {{csrf_field()}}
         {{method_field('DELETE')}}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Delete</button>
        </form>
        </td>
        </tr>
    @endforeach
    </body>
</table>

{{ $tasks->links() }}

</div>
@endsection
