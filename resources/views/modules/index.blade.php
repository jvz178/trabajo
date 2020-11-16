@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')

}}
@endif

<a href="{{ url('modules/create')}}"class="btn btn-success">New module</a>
<br/>
<br/>

<table class= "table table-light table-hover">
    
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Cycle</th>
        </tr>
    </thead>

    <body>
    @foreach ($modules as $module)
        <tr></tr>
        <td>{{$loop->iteration}}</td>
        
        <td>{{$module->name}}</td>
        <td>{{$module->cycle_id}}</td>
    
        
        <td>
        <a class="btn btn-warning" href="{{url('/modules/'.$module->id.'/edit')}}" >
            Edit 
        </a>
        
        <form method="post" action="{{url('/modules/'.$module->id)}}" style="display:inline">
         {{csrf_field()}}
         {{method_field('DELETE')}}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Delete</button>
        </form>
        </td>
        </tr>
    @endforeach
    </body>
</table>

{{ $modules->links() }}

</div>
@endsection
